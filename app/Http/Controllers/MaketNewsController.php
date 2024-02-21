<?php

namespace App\Http\Controllers;

use PDF;
use Newsletter;
use App\Models\Loser;
use App\Models\Gainer;
use App\Models\Category;

use App\Mail\ContactMail;
use App\Models\MaketNews;
use App\Models\PDFDownload;

use Illuminate\Http\Request;

use App\Models\OsbornService;
use App\Models\ServiceCategory;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Stroage;
use App\Http\Requests\StoreMarketNewsRequest;

use App\Models\DailyMarketData;
use Illuminate\Support\Facades\Storage;

class MaketNewsController extends Controller
{



    public function dailyMarketReport(){
        return view('daily-market.create');
    }


    public function index()
    {
        //fetch 5 posts from database which are active and latest
        $dispnews = MaketNews::with('category')->orderBy('created_at', 'desc')->paginate(5);
        $categories = Category::all();
        // dd($dispnews);
        return view('market-news.index', compact('dispnews', 'categories'));
    }

    public function home(Request $request)
    {

        $maketNewss = MaketNews::with('category')->orderBy('created_at', 'desc')->paginate(3);
        $services = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(5);
        $marketSummary = DailyMarketData::select('id', 'loser', 'gainer' ,'asi', 'deal', 'volume', 'value', 'market_cap', 'bond_cap', 'etf_cap')->latest()
          ->limit(1)->first();

        //TopLoser and TopGainer Data
        //$loserData = [];
        $gainerData = [];
        $topGainers = DailyMarketData::select('gainer')->orderByDesc('id')->value('gainer');
        $topLosers = DailyMarketData::select('loser')->orderByDesc('id')->value('loser');


        $categories = Category::all();
        $serviceCategories = ServiceCategory::all();
        $osbornServices = OsbornService::orderBy('created_at', 'desc')->paginate(5);
        $priceLists = DailyMarketData::select('pricelist')->orderByDesc('id')->value('pricelist');
        // dd($priceLists);
        $priceData = [];
        if($priceLists){
            $file = Storage::path("public/uploads/{$priceLists}");
            if($file){
                $handle = fopen($file, 'r');
                $k = 0;
                while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                    if ($k !== 0) {
                        [
                            $board, $company, $refPrice, $pClose,
                            $openPrice, $highPrice, $lowPrice, $closePrice,
                            $change, $trades, $marketVol, $marketVal,
                            $dailyVol, $dailyVal, $companyName, $tradeDate
                        ] = $data;
                        if($change < 0){
                            $icon = 'minus';
                        }
                        if($change > 0){
                            $icon = 'plus';
                        }
                        if($change == 0){
                            $icon = '';
                        }

                        if (in_array($board, ['EQTY', 'PREMIUM'])) {
                            $priceData[] = [
                                'company' => $company,
                                'value' => $refPrice,
                                'tradeDate' => $tradeDate,
                                'icon' => $icon,
                            ];
                            // $priceData[$company]['value'] = $refPrice;
                            // $priceData[$company]['tradeDate'] = $tradeDate;
                            // $priceData[$company]['icon'] = $icon;
                        }
                    }
                    ++$k;
                }
                fclose($handle);
            }
        }

if($topGainers){
            $file = Storage::path("public/uploads/{$topGainers}");
            if($file){
                $handle = fopen($file, 'r');
                $k = 0;
                while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                    if ($k !== 0) {
                        [
                            $board, $security, $refPrice, $pClose,
                            $openPrice, $highPrice, $lowPrice, $closePrice,
                            $change, $changePercent, $securityName
                        ] = $data;

                         if (in_array($board, ['EQTY', 'PREMIUM'])) {
                            $gainerData[$security] = [
                                'company' => $securityName,
                                'closePrice' => $closePrice,
                                'change' => $change,
                                'percentChange' => $changePercent,
                            ];

                        }
                    }
                    ++$k;
                     if($k == 7) break;
                }
                fclose($handle);
            }
        }

        if($topLosers){

           $file = Storage::path("public/uploads/{$topLosers}");
            $csvData = $this->loadCsv($file);
            $loserData = [];
            $k = 0;
            foreach($csvData as $loser){
                [
                            $board, $security, $refPrice, $pClose,
                            $openPrice, $highPrice, $lowPrice, $closePrice,
                            $change, $changePercent, $securityName
                        ] = $loser;
                if (in_array($board, ['EQTY', 'PREMIUM'])) {
                    $loserData[$security] = [
                        'company' => $securityName,
                        'closePrice' => $closePrice,
                        'change' => $change,
                        'percentChange' => $changePercent,
                    ];
                }
                ++$k;
                if($k == 6) break;
            }
        }
        // dd($loserData);

        return view('index', compact('marketSummary', 'maketNewss', 'loserData','gainerData', 'categories', 'serviceCategories', 'osbornServices', 'priceData'));


}
    public function servicePage()
    {
        // $serviceCategories = ServiceCategory::orderBy('created_at', 'desc')->first();
        // dd($serviceCategories);
        // $serviceCategories = ServiceCategory::with('osbornService')->orderBy('created_at', 'desc')->get();
        $osbornServices = OsbornService::orderBy('created_at', 'desc')->limit(1)->get();

        $finance= OsbornService::where('title', 'Financial Advisory services')->get();
        $titles = OsbornService::all()->pluck('title')->where('title' ==='Financial Advisory services ');

        $serviceCategories = ServiceCategory::all();
        return view('osborn-service.service-page', compact('osbornServices', 'serviceCategories'));
    }




// public function allService(OsbornService $osbornService){
//     $serviceCategories = ServiceCategory::all();
//     // $allServices =OsbornService::all();
//     $allServices = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(5);

//     return view('osborn-service.all-service', compact('allServices','serviceCategories','osbornService'));

// }

    // public function allService(OsbornService $osbornService)
    // {
    //     $serviceCategories = ServiceCategory::all();
    //     $allServices = OsbornService::all();
    //     $allServices = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(10);
    //     $osbornService = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(10);
    //     return view('osborn-service.all-service', compact('allServices','serviceCategories','osbornService'));
    // }

    public function allService(OsbornService $osbornService)
    {

        $allServices = OsbornService::all();
        $osbornServices = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(10);
        return view('osborn-service.all-service', compact('osbornService','osbornServices'));
    }


    public function allServiceDetail(OsbornService $osbornService)
    {
       $allServices = OsbornService::with('osbornCategory')->orderBy('created_at', 'desc')->paginate(10);
        return view('osborn-service.allService-detail', compact('osbornService','allServices'));
    }



    public function serviceDetail(OsbornService $osbornService)
    {
        // $osbornServices = OsbornService::orderBy('created_at', 'desc')->get();
        $osbornServices = OsbornService::with('osbornCategory')->get();
        $serviceCategories = ServiceCategory::with('osbornServices')->get();
        // $osbornService = OsbornService::all();
        return view('osborn-service.service-detail', compact('osbornService', 'osbornServices', 'serviceCategories'));
    }



    public function newsDetail(MaketNews $maketNews)
    {
        // $losers = Loser::orderBy('created_at', 'desc')->paginate(5);
        // // whereEmail($email)->first();
        // $dispnews = MaketNews::limit(1)->get();
        // $categories = Category::all();
        // $maketNews = MaketNews::with('category')->get();
        // dd($maketNews);
        return view('market-news.news-detail', compact('maketNews'));
    }





    public function allMarketNews(MaketNews $maketNews)
    {

        $maketNewss = MaketNews::all();
        $maketNewss = MaketNews::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view('market-news.all-market-news', compact('maketNews','maketNewss'));
    }




    public function create()
    {
        // $dispnews = MaketNews::all();
        $categories = Category::all();
        // dd($dispnews);
        return view('market-news.create', compact('categories'));
    }

    public function store(StoreMarketNewsRequest $request,  MaketNews $maketNews)
    {
        $validated=$request->all();

        MaketNews::create($validated);

        alert()->success('Category Created successfully')->autoclose(3500);

        return back()->with('success', 'category created successfully');
    }



    public function show(MaketNews $maketNews)
    {
        //
    }


    public function edit(MaketNews $maketNews)
    {
        //
        $makets = MaketNews::with('Category')->get();
        $categories = Category::all();

        return view('market-news.edit', compact('maketNews', 'categories'));
    }


    //  public function update(Request $request, MaketNews $maketNews)
    //     {

    //         $request->validate([
    //             'title' => 'required|string|max:255',
    //             'body' => 'required|string',

    //         ]);

    //         $maketNews->update([
    //             'title' => $request->title,
    //             'body' => $request->body,
    //             'category_id' => $request->category_id,

    //         ]);
    //         alert()->success(' updated successfully')->autoclose(3500);

    //         return back();
    //     }


    public function update(StoreMarketNewsRequest $request, MaketNews $maketNews)
    {

                $validated= $request->all();

        // $maketNews->update($validated);
        // alert()->success('news updated successfully')->autoclose(3500);
        // return back()->with('success', 'news created successfully');

         $maketNews->update([
                'title' => $validated['title'],
                'body' => $validated['body'],

            ]);

        //  $osborn->category_id = $validated['category_id'];
        // $osborn->title = $validated['title'];
        // $osborn->body = $validated['body'];
        // $osborn->save();

        alert()->success(' updated successfully')->autoclose(3500);

        // return back();
        
         return redirect()->route('market-news.index')
            ->with('success','News updated successfully');
    }

    public function destroy(MaketNews $maketNews)
    {
        //

        // $maketNews = MaketNews::find($id);

        $maketNews->delete();

        alert()->success(' Deleted successfully')->autoclose(3500);
        // return back();

        return back()->with('success', 'Record deleted successfully');
    }

    public function contact()
    {
        return view('site.contact');
    }


    public function sendMail(Request $request)
    {
        $this->validate(request(), array(
            'g-recaptcha-response' => 'required|captcha'
        ));

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'message' => $request->message,
        ];


        Mail::to('info@ocmlng.com')->send(new ContactMail($details));
        return back()->with('success', 'your mail has been sent successfully');
    }




    public function pageUpload()
    {
        $data = PDFDownload::all();
        return view('pdf-download.downloads', compact('data'));
    }

    public function pdfDownload(Request $request, $file){

      $data = PDFDownload::all();
      alert()->success('upload successfully')->autoclose(3500);
        return response()->download(public_path('assets/'.$file));
    }

    // public function download(Request $request, $file){

    //     $data = PDFDownload::all();
    //     return view('pdf-download.downloads', compact('data'));
    //   }


      public function view($id){

        $data = PDFDownload::find($id);
        return view('pdf-download.view-pdf', compact('data'));
      }




      public function letter()
      {
          return view('index');
      }

      public function newsLetter(Request $request)
      {
        //   dd($request->all());
          if ( ! Newsletter::isSubscribed($request->email) )
          {
              Newsletter::subscribePending($request->email);
              return back()->with('success', 'Thanks For Subscribing');
          }
          return back('newsLetter')->with('failure', 'Sorry! You have already subscribed ');

      }

    //   public function createPDF() {
    //     // retreive all records from db
    //     $data = PDFDownload::all();

    //     // share data to view
    //     view()->share('books',$data);
    //     $pdf = PDF::loadView('pdf_view', $data);

    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }

   private function loadCSV($file) {
    $rows = array();
    if (($handle = fopen($file, "r")) !== FALSE) {
       $k = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {


            array_push($rows, $data);
            ++$k;

        }
        fclose($handle);
    }
    return array_reverse($rows);
}

}

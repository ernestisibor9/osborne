<?php

namespace App\Http\Controllers;
use App\Models\Company;

use App\Models\CorporateAction;
use Illuminate\Http\Request;
use App\Models\CompanyReport;
use App\Models\DailyMarketData;
use Illuminate\Support\Facades\Storage;

class CorporateActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $corporateActions = CorporateAction::with('company')->orderBy('created_at', 'desc')->paginate(5);
        return view('research.corporate_action', compact('companies','corporateActions'));

    }

    public function corporateActionsInfo(Request $request){
        $companies = Company::all();
        $company_id = $request->company_id;
        $corporateActionInfo = CorporateAction::with('company')->where('company_id', $company_id)
        ->orderBy('created_at', 'desc')->paginate(5);
        // dd($corporateActionInfo->period);
        // $periodCollection = [0=>'Full Year', 1=>'1st Qrt', 2=>'2nd Qrt', 3=>'3rd Qrt', 4=>'4th Qrt'];
        return view('site.display.corporate-action' , compact('companies', 'corporateActionInfo') );
    }

    public function companyFinancialReport(Request $request){
        $companies = Company::all();
        $company_id = $request->company_id;
        $year = $request->year;
        $period = $request->period;
        $companyReports = CompanyReport::with('company')->where('company_id', $company_id)
        ->where('period', $period)
        ->where('year', $year)
        ->get();
        // ->orderBy('created_at', 'desc')->paginate(5);
        return view('site.display.company-financial-report', compact('companies', 'companyReports') );
    }

    public function ngxDailyPriceList(Request $request){
        $priceData = [];
        if($request->date){
            $date = $request->date;
            $priceLists = DailyMarketData::where('date', $date)->select('pricelist')->orderByDesc('id')->value('pricelist');

            // dd($priceLists);

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

                         if (in_array($board, ['EQTY', 'PREMIUM'])) {
                            $priceData[] = [
                                'stock' => $company,
                                'pClose' => $pClose,
                                'openPrice' => $openPrice,
                                'highPrice' => $highPrice,
                                'closePrice' => $closePrice,
                                'lowPrice' => $lowPrice,
                                'absoluteChange' => $change,
                                'percentChange' => number_format($change/$openPrice * 100, 2),
                                'dailyVolume' => number_format($dailyVol),
                                'dailyValue' => number_format($dailyVal, 2),
                                'tradeDate' => $tradeDate,
                            ];

                        }
                    }
                    ++$k;
                    //  if($k == 6) break;
                }
                fclose($handle);
            }
        }
        }

        return view('site.NGX-daily', compact('priceData'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('research.corporate_action');
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CorporateAction $corporateAction)
    {

                // dd($request->all());

          $corporateAction = new CorporateAction();
          $corporateAction->company_id =$request->company_id;
          $corporateAction->accounting_year = $request->accounting_year;
          $corporateAction->period = $request->period;
          $corporateAction->dividend = $request->dividend;
          $corporateAction->bonus = $request->bonus;
          $corporateAction->closure_date = $request->closure_date;
          $corporateAction->agm_date = $request->agm_date;
          $corporateAction->payment_date = $request->payment_date;
          $corporateAction->save();

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateAction  $corporateAction
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateAction $corporateAction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateAction  $corporateAction
     * @return \Illuminate\Http\Response
     */
    public function edit(CorporateAction $corporateAction)
    {
         $companies = Company::all();
        return view('research.edit_corporate_action', compact('companies','corporateAction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateAction  $corporateAction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorporateAction $corporateAction)
    {
          $corporateAction->company_id =$request->company_id;
          $corporateAction->accounting_year = $request->accounting_year;
          $corporateAction->period = $request->period;
          $corporateAction->dividend = $request->dividend;
          $corporateAction->bonus = $request->bonus;
          $corporateAction->closure_date = $request->closure_date;
          $corporateAction->agm_date = $request->agm_date;
          $corporateAction->payment_date = $request->payment_date;
          $corporateAction->save();

        return redirect()->route('corporate_action.index')->with('success', 'update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateAction  $corporateAction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateAction $corporateAction)
    {
         $corporateAction->delete();
         return redirect()->route('corporate_action.index')->with('success', 'deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Loser;

use Illuminate\Http\Request;
use App\Exports\LoserExport;
use App\Imports\LoserImport;
use Maatwebsite\Excel\Facades\Excel;

class LoserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {

        $losers =Loser::orderBy('created_at' ,'desc')->paginate(5);
        // $losers =Loser::orderBy('created_at' ,'desc')->latest();
        return view('upload-files.top-loser', compact('losers'));
     }
    

     public function exportLoserToExcel() 
     {
         return Excel::download(new LoserExport, 'losers.xlsx');
     }
    
     public function exportLoserToCSV() 
     {
         return Excel::download(new LoserExport, 'losers.csv');
      
     }
    
     
    
    public function importLoser(Request $request) 
    {
  
         Excel::import(new LoserImport, $request->file);

        //  Excel::import(new GainersImport, $request->file('file')->store('temp'));
        return back()->with('status', 'The file has imported successfully ');
        
    } 
     
     
    // public function importLoser(Request $request) 
    // {

    //     // $request->validate([
    //     //     'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
    //     //   ]); 
    
    //      Excel::import(new LoserImport, $request->file('file'));
    //     Excel::import(new LoserImport,$request()->file('file'));
    //     //  Excel::import(new LoserImport, $request->file('file')->store('temp'));
    //     return back()->with('status', 'The file has imported successfully ');
        
    // } 
     /**
     * @return \Illuminate\Support\Collection
     */
    //  public function exportLosers($type) 
    //  {
    //      return \Excel::download(new LoserExport, 'losers'.$type);
    //  }
    

    
     /**
     * @return \Illuminate\Support\Collection
     */
    //  public function importLosers(Request $request) 
    //  {
    //      \Excel::import(new LoserImport,$request->import_file);
 
    //      \Session::put('success', 'Your file is imported successfully in database.');
            
    //      return back();
    //  }



    }








//     public function index()
//     {
//         return view('upload-files.top-loser');
//     }



//     public function importLosers(Request $request)
//     {
//         Excel::import(new LoserImport, $request->file('file')->store('temp'));
//         return back();
//     }

//     public function exportLosers()
//     {
//         return Excel::download(new LoserExport, 'loser-collection.xlsx');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Loser  $loser
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Loser $loser)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Loser  $loser
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Loser $loser)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Loser  $loser
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Loser $loser)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Loser  $loser
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Loser $loser)
//     {
//         //
//     }
// }

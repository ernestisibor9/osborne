<?php

namespace App\Http\Controllers;

use App\Models\Gainer;

use Illuminate\Http\Request;
use App\Exports\GainerExport;
use App\Imports\GainersImport;
use Maatwebsite\Excel\Facades\Excel;


class GainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $gainers = Gainer::orderBy('created_at', 'DESC')->paginate(5);

        return view('upload-files.top-gain', compact('gainers'));
    }
     
    public function exportGainnersExcel() 
    {
        return Excel::download(new GainerExport, 'gainers.xlsx');
    }
   
    public function exportGainnersToCSV() 
    {
        return Excel::download(new GainerExport, 'gainers.csv');
        
    }
   
    
    // public function export() 
    // {
        // $type="";
        // return Excel::download(new GainerExport, 'gainers.xlsx');
        // return Excel::download(new Export(), 'customers.xlsx', 'Html');

        // return Excel::download(new GainerExport(), 'gainers.xlsx'.$type);
    // }
   

    
    public function importGainners(Request $request) 
    {
  
         Excel::import(new GainersImport, $request->file);

        //  Excel::import(new GainersImport, $request->file('file')->store('temp'));
        return back()->with('status', 'The file has imported successfully ');
        
    } 








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gainer  $gainer
     * @return \Illuminate\Http\Response
     */
    public function show(Gainer $gainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gainer  $gainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Gainer $gainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gainer  $gainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gainer $gainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gainer  $gainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gainer $gainer)
    {
        //
    }
}

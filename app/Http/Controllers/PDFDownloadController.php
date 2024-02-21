<?php

namespace App\Http\Controllers;

use App\Models\PDFDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfdata = PDFDownload::all();
        return view('pdf-download.index', compact('pdfdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





     public function pdfDownload(){

      
        return response()->download(public_path('assets/'.$file));
    }

    public function create()
    {
        return view('pdf-download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            "name" => "required",
            "description" => "required",
            "file" => "required|mimes:pdf|max:30740",

        ]);
        $data = new PDFDownload();
    
        $file = $request->file;
        $filename = time().'_'.$file->getClientOriginalName();

          // Upload file
          $request->file->move('assets',$filename);

        $data->file=$filename;


        
        $data->name =$request->name;
        $data->description =$request->description;
        $data->save();
        
        alert()->success('PDF created successfully')->autoclose(3500);
        
        return back()->with('success', 'PDF Upload successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function show(PDFDownload $pDFDownload)
    {
        $data = PDFDownload::all();

        return view('pdf-download.show', compact('data', 'pDFDownload'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function edit(PDFDownload $pDFDownload)
    {
        $data = PDFDownload::all();

        return view('pdf-download.show', compact('data', 'pDFDownload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PDFDownload $pDFDownload)
    {

        $pDFDownload = PDFDownload::find($pDFDownload->id);
        $data = new PDFDownload();
    
        $file = $request->file;
        $filename = time().'_'.$file->getClientOriginalName();

          // Upload file
          $request->file->move('assets',$filename);

        $data->file=$filename;
        $data->name =$request->name;
        $data->description =$request->description;
        $data->save();
        return back()->with('success', 'uploaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function destroy(PDFDownload $pDFDownload)
    {
        // $pDFDownload = PDFDownload::find($pDFDownload->id);
        $pdfdata=$pDFDownload->delete();
        // alert()->success(' Deleted successfully')->autoclose(3500);
        // return back();
   
        return back()->with('success', 'Record deleted successfully');
    }
}

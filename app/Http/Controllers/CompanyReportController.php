<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyReport;
use Illuminate\Http\Request;

class CompanyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $CompanyReports = CompanyReport::all();
        //dd($CompanyReports);
        return view('research.company_report', compact('companies','CompanyReports'));
    }

    public function getFile(Request $request, $file){

        $file = storage_path('public/uploads/').$file.'.pdf';

        if(file_exists($file)){
            $headers = ['Content-Type' => 'application/pdf'];

            return response()->file($file, $headers);
        }

        else{
            abort(404, 'File not found');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $companies = Company::all();
         return view('company_report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //  $request->validate([
        //     "company_id" => "required",
        //     "title" => "required",
        //     "document" => "required|mimes:pdf|max:30740",
        //     "period" => "required",
            // 'year' => 'required|integer|min:'.date('Y')

        // ]);
        // dd($request->all());

        $companyReport = new CompanyReport();
        $companyReport->company_id =$request->company_id;
        $companyReport->title =$request->title;

        //Store Document
        $documentToDb = '';
       if ($request->hasFile('document')) {
        $document = $request->file('document')->getClientOriginalName();
        $documentExt = $request->file('document')->getClientOriginalExtension();
        $documentName = pathinfo($document, PATHINFO_FILENAME);
        $documentToDb = $documentName.time(). '.' .$documentExt;
        $documentToDb =  preg_replace('/\s+/', '_', $documentToDb);
       $saveDocument = $request->file('document')->storeAs('/public/uploads', $documentToDb);
       }
        // removing whitespaces in the document name
        $companyReport->document = $documentToDb;

        $companyReport->period =$request->period;
        $companyReport->year =$request->year;
        $companyReport->save();

        // alert()->success('Reportt Created successfully')->autoclose(3500);
        return back()->with('success','report created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyReport  $companyReport
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyReport $companyReport)
    {
        $companies = Company::all();
        $CompanyReports = CompanyReport::with('company')->orderBy('created_at', 'desc')->paginate(5);

        return view('company_report.show', compact('companies','companyReport','CompanyReports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyReport  $companyReport
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyReport $companyReport)
    {
        // dd($companyReport->id, 'hey there');
        $companies = Company::all();
        return view('research.edit_company_report', compact('companyReport','companies'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyReport  $companyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyReport $companyReport)
    {

        $companyReport->company_id =$request->company_id;
        $companyReport->title =$request->title;

        //Store Document
        $documentToDb = '';
       if ($request->hasFile('document')) {
        $document = $request->file('document')->getClientOriginalName();
        $documentExt = $request->file('document')->getClientOriginalExtension();
        $documentName = pathinfo($document, PATHINFO_FILENAME);
        $documentToDb = $documentName.time(). '.' .$documentExt;
        $documentToDb =  preg_replace('/\s+/', '_', $documentToDb);
       $saveDocument = $request->file('document')->storeAs('/public/uploads', $documentToDb);
       }
        // removing whitespaces in the document name
        $companyReport->document = $documentToDb;

        $companyReport->period =$request->period;
        $companyReport->year =$request->year;
        $companyReport->save();

        // alert()->success('Reportt Created successfully')->autoclose(3500);
        return redirect()->route('company_report.index')->with('success','report updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyReport  $companyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyReport $companyReport)
    {
        // CompanyReport::find($CompanyReport->id);
        $companyReport->delete();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CorporateAccountOpening;
use Illuminate\Http\Request;

class CorporateAccountOpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountOpens = CorporateAccountOpening::all();
        $Countapproved = $accountOpens->count();
        $acct_approves=CorporateAccountOpening::where('acct_approve', false)->get();
        return view('account-form.corporate_form_index', compact('accountOpens','acct_approves','Countapproved'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.corporate-form');
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
                  'name' =>'required|string|max:255',
                  'email' =>'required|email:rfc,dns',
                   'phone' =>'required|digits:11',
                    'memorandum' =>  "sometimes|mimes:jpeg,jpg,png,pdf|max:5000",
                    'board_resolution' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'incorporation_cert' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'director_particular' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'partnership_deed' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'attorney_power' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'approv_letter' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'g-recaptcha-response' => 'required|captcha',
                ]);
    //Store Document
       if ($request->hasFile('memorandum')) {
        $document = $request->file('memorandum')->getClientOriginalName();
        $documentExt = $request->file('memorandum')->getClientOriginalExtension();
        $documentName = pathinfo($document, PATHINFO_FILENAME);
        $documentToDb = $documentName.time(). '.' .$documentExt;
        $documentToDb =  preg_replace('/\s+/', '_', $documentToDb);
        $request->file('memorandum')->storeAs('/public/uploads', $documentToDb);
       }
       if ($request->hasFile('board_resolution')) {
        $boardDocument = $request->file('board_resolution')->getClientOriginalName();
        $boardDocumentExt = $request->file('board_resolution')->getClientOriginalExtension();
        $boardDocumentName = pathinfo($boardDocument, PATHINFO_FILENAME);
        $boardDocumentToDb = $boardDocumentName.time(). '.' .$boardDocumentExt;
        $boardDocumentToDb =  preg_replace('/\s+/', '_', $boardDocumentToDb);
        $request->file('board_resolution')->storeAs('/public/uploads', $boardDocumentToDb);
       }

       if ($request->hasFile('incorporation_cert')) {
        $incorporationDocument = $request->file('incorporation_cert')->getClientOriginalName();
        $incorporationDocumentExt = $request->file('incorporation_cert')->getClientOriginalExtension();
        $incorporationDocumentName = pathinfo($incorporationDocument, PATHINFO_FILENAME);
        $incorporationDocumentToDb = $incorporationDocumentName.time(). '.' .$incorporationDocumentExt;
        $incorporationDocumentToDb =  preg_replace('/\s+/', '_', $incorporationDocumentToDb);
        $request->file('incorporation_cert')->storeAs('/public/uploads', $incorporationDocumentToDb);
       }

       if ($request->hasFile('director_particular')) {
        $directorDocument = $request->file('director_particular')->getClientOriginalName();
        $directorDocumentExt = $request->file('director_particular')->getClientOriginalExtension();
        $directorDocumentName = pathinfo($directorDocument, PATHINFO_FILENAME);
        $directorDocumentToDb = $directorDocumentName.time(). '.' .$directorDocumentExt;
        $directorDocumentToDb =  preg_replace('/\s+/', '_', $directorDocumentToDb);
        $request->file('director_particular')->storeAs('/public/uploads', $directorDocumentToDb);
       }

       if ($request->hasFile('partnership_deed')) {
        $partnershipDocument = $request->file('partnership_deed')->getClientOriginalName();
        $partnershipDocumentExt = $request->file('partnership_deed')->getClientOriginalExtension();
        $partnershipDocumentName = pathinfo($partnershipDocument, PATHINFO_FILENAME);
        $partnershipDocumentToDb = $partnershipDocumentName.time(). '.' .$partnershipDocumentExt;
        $partnershipDocumentToDb =  preg_replace('/\s+/', '_', $partnershipDocumentToDb);
        $request->file('partnership_deed')->storeAs('/public/uploads', $partnershipDocumentToDb);
       }

       if ($request->hasFile('attorney_power')) {
        $attorneyDocument = $request->file('attorney_power')->getClientOriginalName();
        $attorneyDocumentExt = $request->file('attorney_power')->getClientOriginalExtension();
        $attorneyDocumentName = pathinfo($attorneyDocument, PATHINFO_FILENAME);
        $attorneyDocumentToDb = $attorneyDocumentName.time(). '.' .$attorneyDocumentExt;
        $attorneyDocumentToDb =  preg_replace('/\s+/', '_', $attorneyDocumentToDb);
        $request->file('attorney_power')->storeAs('/public/uploads', $attorneyDocumentToDb);
       }

       if ($request->hasFile('approv_letter')) {
        $approvDocument = $request->file('approv_letter')->getClientOriginalName();
        $approvDocumentExt = $request->file('approv_letter')->getClientOriginalExtension();
        $approvDocumentName = pathinfo($approvDocument, PATHINFO_FILENAME);
        $approvDocumentToDb = $approvDocumentName.time(). '.' .$approvDocumentExt;
        $approvDocumentToDb =  preg_replace('/\s+/', '_', $approvDocumentToDb);
        $request->file('approv_letter')->storeAs('/public/uploads', $approvDocumentToDb);
       }

       $requestData = $request->except('g-recaptcha-response');
$requestData['memorandum'] = $documentToDb;
$requestData['board_resolution'] = $boardDocumentToDb;
$requestData['incorporation_cert'] = $incorporationDocumentToDb;
$requestData['director_particular'] = $directorDocumentToDb;
$requestData['partnership_deed'] = $partnershipDocumentToDb;
$requestData['attorney_power'] = $attorneyDocumentToDb;
$requestData['approv_letter'] = $approvDocumentToDb;

        CorporateAccountOpening::create($requestData);

        //  return redirect()->route('account-form.index')
        //                 ->with('success','Post created successfully.');

        return back()->with('success','Thank you for wanting to open a stock broken account with Osborne Capital. Your account number will be sent to your mail within the next 24 hours. For more information please call 012914775');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateAccountOpening  $corporateAccountOpening
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateAccountOpening $corporateAccountOpening)
    {
         $CorporateAccountOpens = CorporateAccountOpening::all();
        $acct_approves= CorporateAccountOpening::where('acct_approve', false)->get();
        return view('account-form.show_corporate_form', compact('acct_approves','corporateAccountOpening','CorporateAccountOpens'));

    }




      public function approval(CorporateAccountOpening $corporateAccountOpening)
    {

        $accountOpens = CorporateAccountOpening::find($corporateAccountOpening->id);


             $accountOpens->update([

              'acct_approve'=>1,

                 ]);


    return redirect()->route('registeration-acctForm.index')->with('success','approval created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateAccountOpening  $corporateAccountOpening
     * @return \Illuminate\Http\Response
     */
    public function edit(CorporateAccountOpening $corporateAccountOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateAccountOpening  $corporateAccountOpening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorporateAccountOpening $corporateAccountOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateAccountOpening  $corporateAccountOpening
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateAccountOpening $corporateAccountOpening)
    {
         $corporateAccountOpening->delete();
         return redirect()->route('registeration-acctForm.index')
                        ->with('success','Record deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AccountOpening;
use Illuminate\Http\Request;

class AccountOpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $accountOpens = AccountOpening::all();
        $Countapproved = $accountOpens->count();
        $acct_approves=AccountOpening::where('acct_approve', false)->get();
        return view('account-form.index', compact('accountOpens','acct_approves','Countapproved'));
        // return view('account-form.register-form-individual');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function individualAccount()
    {
        return view('site.individual-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIndividualAccount(Request $request)
    {
                $request->validate([
                  'first_name' =>'required|string|max:255',
                  'last_name' =>'required|string|max:255',
                  'email' =>'required|email:rfc,dns',
                //   'phone' =>'required|numeric|max:11',
                //   'marital_status' =>'required|string',
                //   'dob'=>'required|string',
                //   'nationality' =>'required|string',
                //   'nationality_status'=>'required|string',
                //   'mother_name' =>'required|string',
                    'passport' =>  "sometimes|mimes:jpeg,jpg,png|max:5000",
                    'proof_identity' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'proof_address' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'signature' => ['sometimes', 'mimes:jpeg,jpg,png,pdf', 'max:5000'],
                    'state_of_origin' => ['required_if:nationality,Nigeria'],
                    'g-recaptcha-response' => 'required|captcha',
                //   'passport'=>'required|string',
                //   'proof_identity'=>'required|string',
                //   'residence_address'=>'required|string',
                //   'proof_address'=>'required|string',`
                //   'permanent_address'=>'required|string',
                //   'bank_name' =>'required|string',
                //   'account_no'=>'required|string',
                //   'bvn'=>'required|string',
                //   'address_bank'=>'required|string',
                // 'signature' =>'required|string',
                //   'acct_approve' =>'required|string',
                //   'nextOfKin_name'`=>'required|string',
                //   'nextOfKin_phone'=>'required|string',
                //   'nextOfKin_address' =>'required|string',
                //   'signature' =>'required|string',
                //   'declaration'=>'required|string',
                //   'gender' =>'required|string',
                //   'type'=>'required|string',
                //   'cscs_no'=>'required|string',
                //   'nextOfKinRelationship'=>'required|string',
                //   'nextOfKinEmail'=>'required|string',
                //   'company'=>'required|string',
                //   'political_exposure'=>'required|string',
                //   'employer_name'=>'required|string',
                //   'employer_address'=>'required|string',
                //   'lg'=>'required|string',
                ]);

//Store Document
        // $documentToDb = '';
       if ($request->hasFile('passport')) {
        $document = $request->file('passport')->getClientOriginalName();
        $documentExt = $request->file('passport')->getClientOriginalExtension();
        $documentName = pathinfo($document, PATHINFO_FILENAME);
        $documentToDb = $documentName.time(). '.' .$documentExt;
        $documentToDb =  preg_replace('/\s+/', '_', $documentToDb);
        $request->file('passport')->storeAs('/public/uploads', $documentToDb);
       }
       if ($request->hasFile('proof_identity')) {
        $identityDocument = $request->file('proof_identity')->getClientOriginalName();
        $identityDocumentExt = $request->file('proof_identity')->getClientOriginalExtension();
        $identityDocumentName = pathinfo($identityDocument, PATHINFO_FILENAME);
        $identityDocumentToDb = $identityDocumentName.time(). '.' .$identityDocumentExt;
        $identityDocumentToDb =  preg_replace('/\s+/', '_', $identityDocumentToDb);
        $request->file('proof_identity')->storeAs('/public/uploads', $identityDocumentToDb);
       }

       if ($request->hasFile('proof_address')) {
        $addressDocument = $request->file('proof_address')->getClientOriginalName();
        $addressDocumentExt = $request->file('proof_address')->getClientOriginalExtension();
        $addressDocumentName = pathinfo($addressDocument, PATHINFO_FILENAME);
        $addressDocumentToDb = $addressDocumentName.time(). '.' .$addressDocumentExt;
        $addressDocumentToDb =  preg_replace('/\s+/', '_', $addressDocumentToDb);
        $request->file('proof_address')->storeAs('/public/uploads', $addressDocumentToDb);
       }

       if ($request->hasFile('signature')) {
        $signatureDocument = $request->file('signature')->getClientOriginalName();
        $signatureDocumentExt = $request->file('signature')->getClientOriginalExtension();
        $signatureDocumentName = pathinfo($signatureDocument, PATHINFO_FILENAME);
        $signatureDocumentToDb = $signatureDocumentName.time(). '.' .$signatureDocumentExt;
        $signatureDocumentToDb =  preg_replace('/\s+/', '_', $signatureDocumentToDb);
        $request->file('signature')->storeAs('/public/uploads', $signatureDocumentToDb);
       }

    //   $requestData = $request->all();
    $requestData = $request->except('g-recaptcha-response');
$requestData['passport'] = $documentToDb;
$requestData['proof_identity'] = $identityDocumentToDb;
$requestData['proof_address'] = $addressDocumentToDb;
$requestData['signature'] = $signatureDocumentToDb;

        AccountOpening::create($requestData);

        //  return redirect()->route('account-form.index')
        //                 ->with('success','Post created successfully.');

        return back()->with('success','Thank you for wanting to open a stock broken account with Osborne Capital. Your account number will be sent to your mail within the next 24 hours. For more information please call 012914775');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountOpening  $accountOpening
     * @return \Illuminate\Http\Response
     */
    public function show(AccountOpening $accountOpening)
    {

        // $acct_approves=AccountOpening::where('acct_approve', false)->limit(1)->get();

        $accountOpens = AccountOpening::where('acct_approve', false)->limit(1)->get();
        // dd($accountOpening);
        return view('account-form.show_form', compact('accountOpens','accountOpening'));
    }


    public function approval(AccountOpening $accountOpening)
    {

        $accountOpens = AccountOpening::find($accountOpening->id);

            // if($acctVal=='yes'){
            //     $acctVal=1;
            // }else{
            //     $acctVal=0;
            // }

             $accountOpens->update([

              'acct_approve'=>1,

                 ]);

        // return view('account-form.index', compact('accountOpens','accountOpening'));
        // return redirect()->route('account-form.index')

        return redirect()->route('form.index')->with('success','approval created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountOpening  $accountOpening
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountOpening $accountOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountOpening  $accountOpening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountOpening $accountOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountOpening  $accountOpening
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountOpening $accountOpening)
    {
        $accountOpening->delete();

         return redirect()->route('form.index')
                        ->with('success','Record deleted successfully.');
    }
}

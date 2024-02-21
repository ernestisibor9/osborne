<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreServiceRequest;
use Illuminate\Support\Facades\Validator;


use App\Models\OsbornService;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class OsbornServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        // $osbornServices = OsbornService::with('osbornCategory')->orderBy('created_at', 'DESC')->latest()->first()->get();
        $osbornServices = OsbornService::latest()->paginate(3);
        return view('osborn-service.index', compact('osbornServices', 'serviceCategories'));
    }




    
    // public function servicePage(OsbornService $osbornService)
    // {
    //     dd($osbornService);
    //     $serviceCategories = ServiceCategory::with('osbornService')->orderBy('created_at', 'desc')->get();
    //     return view('osborn-service.service-page', compact('osbornService', 'serviceCategories') );   
    //  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceCategories = ServiceCategory::all();
        $osbornServices = OsbornService::with('osbornCategory')->get();

        // $osbornServices = OsbornService::all();
        return view('osborn-service.create', compact('osbornServices', 'serviceCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request, OsbornService $osbornService)
    {
      
            $validated = $request->all();
            
            // $data = $request->validated($request->all());
            $path = $request->file('image')->store('public/images');
            // OsbornService::create($validated);
            $osborn = new OsbornService();
            $osborn->service_category_id = $validated['service_category_id'];
            $osborn->title = $validated['title'];
            $osborn->body = $validated['body'];
            $osborn->image = $path;
            $osborn->save();
        

        alert()->success('Record created successfully')->autoclose(3500);
        return back()->with('success', 'created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsbornService  $osbornService
     * @return \Illuminate\Http\Response
     */
    public function show(OsbornService $osbornService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.    
     *
     * @param  \App\Models\OsbornService  $osbornService
     * @return \Illuminate\Http\Response
     */
    public function edit(OsbornService $osbornService)
    {
        // $dispnews = MaketNews::with('category')->orderBy('created_at', 'desc')->paginate(5);
        $osbornServices = OsbornService::with('osbornCategory')->get();
        $serviceCategories = ServiceCategory::with('osbornServices')->get();
        return view('osborn-service.edit', compact('osbornServices', 'osbornService', 'serviceCategories'))->with('osbornService',$osbornService);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsbornService  $osbornService
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServiceRequest $request, OsbornService $osbornService)
    {
 
        //     $osbornService->update([
        //     'service_category_id'=>$request->service_category_id,
        //     'title' => $request->title,
        //     'body' => $request->body,

        // ]);

        $validated = $request->validated();
            // $data = $request->validated($request->all());
            // dd($validated);


            
            if($request->has('image')){
                $path = $request->file('image')->store('public/images');
            }
            

            // $osborn = OsbornService::find($osbornService->id);
          
            $osbornService->service_category_id = $validated['service_category_id'];
            $osbornService->title = $validated['title'];
            $osbornService->body = $validated['body'];
            $osbornService->image = ($request->has('image')) ? $path : $osbornService->image;
            
            //update serviceCategory title on service update
            $serviceCategory = ServiceCategory::find($validated['service_category_id']);
            $serviceCategory->update([
                'name' => $validated['title']
                ]);
            
            $osbornService->save();
        

        // $osbornService->update($validated);

        alert()->success('updated successfully')->autoclose(3500);
        return back()->with('success', 'created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsbornService  $osbornService
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsbornService $osbornService)
    {
        $osbornService->delete();

        alert()->success('Record Deleted')->autoclose(3500);
        return back();
    }
}

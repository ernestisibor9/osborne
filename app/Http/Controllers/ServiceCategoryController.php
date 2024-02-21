<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ServiceCategoryRequest;

use App\Models\ServiceCategory;
use App\Models\OsbornService;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        // $serviceCategories = ServiceCategory::with('osbornServices')->get();
        return view('osborn-service-category.index', compact('serviceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $serviceCategories = ServiceCategory::all();
        return view('osborn-service-category.create', compact('serviceCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCategoryRequest $request, ServiceCategory $serviceCategory)
    {

        // $validated = $request->validated();
        $validated = $request->all();

        ServiceCategory::create($validated);




        // OsbornService::create([
        //     'service_category_id'=>$request->service_category_id,

        // ]);

        alert()->success('registered')->autoclose(3500);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCategory $serviceCategory)
    {
        // $osbornServices = OsbornService::with('osbornCategory')
        //     ->where('service_category_id', $serviceCategory)->latest();
        $osbornServices = $serviceCategory->osbornServices;
        $serviceCategories = ServiceCategory::all();

        // dd($serviceCategory);
        return view('osborn-service.service-page', compact('serviceCategory', 'osbornServices', 'serviceCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $serviceCategory)
    {

        return view('osborn-service-category.edit', compact('serviceCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceCategoryRequest $request, ServiceCategory $serviceCategory)
    {
        $validated = $request->all();

        $serviceCategory->update($validated);

        alert()->success('updated successfully')->autoclose(3500);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $serviceCategory)
    {

        $serviceCategory->delete();
        alert()->success('deleted successfully')->autoclose(3500);
        return back();
    }
}

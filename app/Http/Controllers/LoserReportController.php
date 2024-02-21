<?php

namespace App\Http\Controllers;

use App\Models\LoserReport;
use Illuminate\Http\Request;

class LoserReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('loser-import.import');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loser-import.loser-files');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate=([
            'file'=> 'required|mimes:csv,txt'
        ]);

        $file =file($request->file->getRealPath());
        $data =array_slice($file, 1);

        $parts = (array_chunk($data, 5000));

        foreach ($parts as $part) {
            $fileName = resource_path('loser-files/'. date(y-m-d-H-i-s). $index. '.csv');
            file_put_content($fileName, $part);
        }

        sesion()->flash('status', 'queued for import');

        return redirect()->route('loser-import.loser-files');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoserReport  $loserReport
     * @return \Illuminate\Http\Response
     */
    public function show(LoserReport $loserReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoserReport  $loserReport
     * @return \Illuminate\Http\Response
     */
    public function edit(LoserReport $loserReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoserReport  $loserReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoserReport $loserReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoserReport  $loserReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoserReport $loserReport)
    {
        //
    }
}

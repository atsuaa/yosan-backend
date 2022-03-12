<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavingReportRequest;
use App\Http\Requests\UpdateSavingReportRequest;
use App\Models\SavingReport;

class SavingReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSavingReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSavingReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SavingReport  $savingReport
     * @return \Illuminate\Http\Response
     */
    public function show(SavingReport $savingReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SavingReport  $savingReport
     * @return \Illuminate\Http\Response
     */
    public function edit(SavingReport $savingReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSavingReportRequest  $request
     * @param  \App\Models\SavingReport  $savingReport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSavingReportRequest $request, SavingReport $savingReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SavingReport  $savingReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavingReport $savingReport)
    {
        //
    }
}

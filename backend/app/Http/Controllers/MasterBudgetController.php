<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMasterBudgetRequest;
use App\Http\Requests\UpdateMasterBudgetRequest;
use App\Models\MasterBudget;

class MasterBudgetController extends Controller
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
     * @param  \App\Http\Requests\StoreMasterBudgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasterBudgetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterBudget  $masterBudget
     * @return \Illuminate\Http\Response
     */
    public function show(MasterBudget $masterBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterBudget  $masterBudget
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterBudget $masterBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasterBudgetRequest  $request
     * @param  \App\Models\MasterBudget  $masterBudget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasterBudgetRequest $request, MasterBudget $masterBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterBudget  $masterBudget
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterBudget $masterBudget)
    {
        //
    }
}

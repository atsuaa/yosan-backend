<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetGroupRequest;
use App\Http\Requests\UpdateBudgetGroupRequest;
use App\Models\BudgetGroup;

class BudgetGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreBudgetGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetGroup  $budgetGroup
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetGroup $budgetGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetGroup  $budgetGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetGroup $budgetGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetGroupRequest  $request
     * @param  \App\Models\BudgetGroup  $budgetGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetGroupRequest $request, BudgetGroup $budgetGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetGroup  $budgetGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetGroup $budgetGroup)
    {
        //
    }
}

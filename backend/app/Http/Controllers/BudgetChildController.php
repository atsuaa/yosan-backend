<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetChildRequest;
use App\Http\Requests\UpdateBudgetChildRequest;
use App\Models\BudgetChild;

class BudgetChildController extends Controller
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
     * @param  \App\Http\Requests\StoreBudgetChildRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetChildRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetChild  $budgetChild
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetChild $budgetChild)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetChild  $budgetChild
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetChild $budgetChild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetChildRequest  $request
     * @param  \App\Models\BudgetChild  $budgetChild
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetChildRequest $request, BudgetChild $budgetChild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetChild  $budgetChild
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetChild $budgetChild)
    {
        //
    }
}

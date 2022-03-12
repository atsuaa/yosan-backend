<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompensationRequest;
use App\Http\Requests\UpdateCompensationRequest;
use App\Models\Compensation;

class CompensationController extends Controller
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
     * @param  \App\Http\Requests\StoreCompensationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompensationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compensation  $compensation
     * @return \Illuminate\Http\Response
     */
    public function show(Compensation $compensation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compensation  $compensation
     * @return \Illuminate\Http\Response
     */
    public function edit(Compensation $compensation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompensationRequest  $request
     * @param  \App\Models\Compensation  $compensation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompensationRequest $request, Compensation $compensation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compensation  $compensation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compensation $compensation)
    {
        //
    }
}

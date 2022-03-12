<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavingGroupRequest;
use App\Http\Requests\UpdateSavingGroupRequest;
use App\Models\SavingGroup;

class SavingGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreSavingGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSavingGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SavingGroup  $savingGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SavingGroup $savingGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SavingGroup  $savingGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SavingGroup $savingGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSavingGroupRequest  $request
     * @param  \App\Models\SavingGroup  $savingGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSavingGroupRequest $request, SavingGroup $savingGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SavingGroup  $savingGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavingGroup $savingGroup)
    {
        //
    }
}

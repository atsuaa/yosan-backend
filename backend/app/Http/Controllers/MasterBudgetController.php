<?php

namespace App\Http\Controllers;

use App\Models\MasterBudget;
use App\Services\BudgetServiceInterface;
use Illuminate\Http\Request;

class MasterBudgetController extends Controller
{
    /** @var BudgetServiceInterface $BudgetService */
    protected $BudgetService;

    public function __construct(BudgetServiceInterface $BudgetService)
    {
        $this->BudgetService = $BudgetService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masterBudget.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterBudget.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->BudgetService->registerMaster($request->all());

        return redirect('/budget/master');
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
     * @param  \App\Models\MasterBudget  $masterBudget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterBudget $masterBudget)
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

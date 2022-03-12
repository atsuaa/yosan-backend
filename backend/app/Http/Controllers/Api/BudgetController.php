<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBudgetRequest;
use App\Http\Requests\UpdateBudgetRequest;
use App\Models\Budget;
use App\Services\BudgetServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BudgetController extends Controller
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
        $budgets = $this->BudgetService->findInMonth(3);
        return $budgets;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $budget = $this->BudgetService->register($request->all());
        dump($budget);
        exit;
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreBudgetRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(StoreBudgetRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return $this->BudgetService->findDetail($id);
        } catch (\Exception $e) {
            return 'データが存在しません。';
        }
    }
}

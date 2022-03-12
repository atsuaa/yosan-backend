<?php

namespace App\Services;

use App\Models\Budget;
use App\Repositories\BudgetRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BudgetService implements BudgetServiceInterface
{
    /** @var Budget $Budget */
    protected $Budget;

    /** @var BudgetRepositoryInterface $budgetRepository */
    protected $budgetRepository;

    /** @var int $budgetGroupId */
    protected $budgetGroupId;

    public function __construct(BudgetRepositoryInterface $budgetRepository)
    {
        $this->budgetRepository = $budgetRepository;
    }

    /**
     * budget_groups.idをセット
     *
     * @param int $id
     * @return void
     */
    public function setBudgetGroupId($id)
    {
        $this->budgetGroupId = (int)$id;
    }

    // 例
    public function findInMonth($month)
    {
        return $this->budgetRepository->findInMonth($month);
    }

    /**
     * 期間内の予算を取得
     *
     * @param \DateTimeInterface|string $fromDate
     * @param \DateTimeInterface|string $toDate
     * @return \ArrayAccess
     */
    public function findInTerm($fromDate, $toDate)
    {
        
    }

    /**
     * 予算登録
     *
     * @param \ArrayAccess $budget
     * @return \ArrayAccess|false
     */
    public function register($budget)
    {
        return $this->budgetRepository->save($budget);
    }

    public function findDetail($budget)
    {
        Budget::find();
        dd($budget);
        return $budget;
    }

    public function edit($budget)
    {
        return false;
    }

    public function delete($budget)
    {
        return false;
    }

    
}

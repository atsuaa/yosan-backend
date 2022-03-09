<?php

namespace App\Services;

use App\Repositories\BudgetRepositoryInterface;

class BudgetService implements BudgetServiceInterface
{
    /** @var BudgetRepositoryInterface $budgetRepository */
    protected $budgetRepository;

    public function __construct(BudgetRepositoryInterface $budgetRepository)
    {
        $this->budgetRepository = $budgetRepository;
    }

    public function findInMonth($month)
    {
        return $this->budgetRepository->findInMonth($month);
    }
}

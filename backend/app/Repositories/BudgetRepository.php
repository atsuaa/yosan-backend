<?php

namespace App\Repositories;

use App\Models\Budget;

class BudgetRepository extends AppRepository implements BudgetRepositoryInterface
{
    public function findInMonth($month)
    {
        $budgets = Budget::factory()->count(100)->make();
        return $budgets->where('month', '=', $month);
    }
}

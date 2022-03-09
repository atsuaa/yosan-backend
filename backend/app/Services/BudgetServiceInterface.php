<?php

namespace App\Services;

interface BudgetServiceInterface
{
    public function findInMonth($month);
}
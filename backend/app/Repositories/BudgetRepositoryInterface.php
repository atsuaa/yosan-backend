<?php

namespace App\Repositories;

interface BudgetRepositoryInterface
{
    /**
     * 指定した月の予算リストを返す
     * 日時昇順
     *
     * @param int $month
     * @return \ArrayAccess
     */
    public function findInMonth($month);
}
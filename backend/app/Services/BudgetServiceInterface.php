<?php

namespace App\Services;

interface BudgetServiceInterface
{
    /**
     * 詳細を返す
     *
     * @param int $budget
     * @return object
     * @throws \Exception データが存在しない
     */
    public function findDetail($budget);

    /**
     * 月の予算を取得
     *
     * @param \DateTimeInterface|string $fromDate
     * @param \DateTimeInterface|string $toDate
     * @return \ArrayAccess
     */
    public function findInMonth($month);

    /**
     * 期間内の予算を取得
     *
     * @param \DateTimeInterface|string $fromDate
     * @param \DateTimeInterface|string $toDate
     * @return \ArrayAccess
     */
    public function findInTerm($fromDate, $toDate);

    /**
     * 予算登録
     *
     * @param \ArrayAccess $budget
     * @return \ArrayAccess|false
     */
    public function register($budget);

    /**
     * 予算項目登録
     *
     * @param \ArrayAccess $budgetMaster
     * @return \ArrayAccess|false
     */
    public function registerMaster($budgetMaster);

    /**
     * 予算編集
     *
     * @param \ArrayAccess $budget
     * @return \ArrayAccess|false
     */
    public function edit($budget);

    /**
     * 予算削除
     * 対象のモデルかID
     *
     * @param \ArrayAccess|int $budget
     * @return bool
     */
    public function delete($budget);
}
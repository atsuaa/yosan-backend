<?php

namespace App\Services;

interface SpendingServiceInterface
{
    /**
     * 登録
     *
     * @param \ArrayAccess $data
     * @return \ArrayAccess|false
     */
    public function register($data);

    /**
     * 編集
     *
     * @param \ArrayAccess $data
     * @return \ArrayAccess|false
     */
    public function edit($data);

    /**
     * 削除
     * 対象のモデルかID
     *
     * @param \ArrayAccess|int $spending
     * @return bool
     */
    public function delete($spending);
}
<?php
namespace App\Repositories\Interfaces;

interface MemoRepositoryInterface
{
    public function getAllMemos();
    public function showMemo(int $memoId);
    public function storeMemo(array $data);
}
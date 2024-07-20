<?php
namespace App\Repositories\Interfaces;

interface MemoRepositoryInterface
{
    public function getAllMemos();
    public function storeMemo(array $data);
}
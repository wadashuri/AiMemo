<?php

namespace App\Repositories\Eloquent;

use App\Models\Memo;
use App\Repositories\Interfaces\MemoRepositoryInterface;

class MemoRepository implements MemoRepositoryInterface
{
    public function getAllMemos(): object
    {
        return auth()->user()->memos;
    }

    public function storeMemo(array $data): void
    {
        auth()->user()->memos()->create($data);
    }
}
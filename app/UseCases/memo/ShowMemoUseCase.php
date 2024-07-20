<?php
namespace App\UseCases\memo;

use App\Repositories\Interfaces\MemoRepositoryInterface;

class ShowMemoUseCase
{
    public function __construct(
        private readonly MemoRepositoryInterface $memo,
    ) {
    }

    public function execute(int $memoId): object
    {
        try {
            return $this->memo->ShowMemo($memoId);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
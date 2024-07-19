<?php
namespace App\UseCases\memo;

use App\Repositories\Interfaces\MemoRepositoryInterface;

class StoreMemoUseCase
{
    public function __construct(
        private readonly MemoRepositoryInterface $memo,
    ) {
    }

    public function execute($data): object
    {
        return $this->memo->storeMemo($data);
    }
}
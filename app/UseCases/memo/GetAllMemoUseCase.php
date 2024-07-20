<?php
namespace App\UseCases\memo;

use App\Repositories\Interfaces\MemoRepositoryInterface;

class GetAllMemoUseCase
{
    public function __construct(
        private readonly MemoRepositoryInterface $memo,
    ) {
    }

    public function execute(): object
    {
        return $this->memo->getAllMemos();
    }
}
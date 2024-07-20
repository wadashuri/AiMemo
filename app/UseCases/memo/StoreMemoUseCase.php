<?php
namespace App\UseCases\memo;

use App\Repositories\Interfaces\MemoRepositoryInterface;
use Illuminate\Http\Response;

class StoreMemoUseCase
{
    public function __construct(
        private readonly MemoRepositoryInterface $memo,
    ) {
    }

    public function execute($data): object
    {
        try {
            $this->memo->storeMemo($data);
            return response()->json([
                'status' => config('const.SUCCESS_MESSAGE')
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UseCases\memo\GetAllMemoUseCase;
use App\UseCases\memo\StoreMemoUseCase;
use App\UseCases\memo\ShowMemoUseCase;
use App\Http\Resources\MemoResource;
use App\Http\Resources\ShowMemoResource;

class MemoController extends Controller
{
    /**
     * @param GetAllMemoUseCase $useCase
     */
    public function index(GetAllMemoUseCase $useCase)
    {
        return MemoResource::collection($useCase->execute());
    }

    /**
     * @param ShowMemoUseCase $useCase
     */
    public function show(Request $request, ShowMemoUseCase $useCase)
    {
        return new ShowMemoResource($useCase->execute($request->memoId));
    }

    /**
     * @param Request $request
     * @param StoreMemoUseCase $useCase
     */
    public function store(Request $request, StoreMemoUseCase $useCase)
    {
        return $useCase->execute($request->all());
    }
}

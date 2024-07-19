<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UseCases\memo\GetAllMemoUseCase;
use App\UseCases\memo\StoreMemoUseCase;
use App\Http\Resources\MemoResource;

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
     * @param Request $request
     * @param StoreMemoUseCase $useCase
     */
    public function store(Request $request, StoreMemoUseCase $useCase)
    {
        $useCase->execute($request->all());
        return response()->json([], 201);
    }
}

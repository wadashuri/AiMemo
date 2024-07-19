<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\UseCases\memo\GetAllMemoUseCase;
use App\Http\Resources\MemoResource;

class MemoController extends Controller
{
    /**
     * @param GetAllMemoUseCase $useCase
     * @return JsonResponse
     */
    public function index(GetAllMemoUseCase $useCase)
    {
        return MemoResource::collection($useCase->execute());
    }
}

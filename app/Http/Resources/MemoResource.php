<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemoResource extends JsonResource
{
    public function toArray($request)
    {
        return ['memos' => $this->resource];
    }
}
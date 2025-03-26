<?php

namespace App\Http\Resources\Collections;

use App\Http\Resources\StockEntryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StockEntryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->transform(function($item) {
            return new StockEntryResource($item); // แปลงแต่ละ item โดยใช้ ExampleResource
        })->toArray();
    }
}

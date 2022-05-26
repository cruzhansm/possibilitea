<?php

namespace App\Http\Resources;

use App\Models\Items;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            // "ITEMS" => ItemResource::collection($this->id),
            // "SUBCATEGORY" => SubcategoryResource::collection($this->id),
        ];
    }
}

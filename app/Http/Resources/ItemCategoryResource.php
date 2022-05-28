<?php

namespace App\Http\Resources;

use App\Models\ItemCategory;
use App\Models\Items;
use App\Models\Subcategory;
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
            'id' => $this->id,
            'itemcat_name' => $this->itemcat_name,
            'subcategory_id' => $this->subcategory_id,
            'subcategory_name' =>  Subcategory::where('id', '=', $this->subcategory_id)->first()->sub_name,
            'items' => ItemResource::collection(Items::where('itemcat_id','=', $this->id)->get()),
        ];
    }
}

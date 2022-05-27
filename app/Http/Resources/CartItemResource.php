<?php

namespace App\Http\Resources;

use App\Models\Items;
use App\Models\Subcategory;
use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
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
            'user_id' => $this->user_id,
            'item_name' => Items::where('id','=',$this->item_id)->first()->item_name, 
            'category' => Subcategory::where('id', '=',  $this->subcategory_id)->first()->sub_name,
            'quantity' => $this->quantity,
            'size' => $this->size,
            'price' => $this->price,
            'addon_id' => $this->addon_id,
            'sugarlvl_id' => $this->sugarlvl_id,
        ];
    }
}

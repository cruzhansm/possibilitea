<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'item_name' => $this->item_name,
            'price' => $this->price,
            'img_path' => $this->img_path,
            'itemCat_id' => $this->itemCat_id,
            'subcat_id' => $this->subcat_id,
        ];
    }
}
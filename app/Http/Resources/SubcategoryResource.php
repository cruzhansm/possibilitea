<?php

namespace App\Http\Resources;

use App\Models\ItemCategory;
use App\Http\Resources\ItemCategoryResource;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Resources\Json\JsonResource;

class SubcategoryResource extends JsonResource
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
            'name' => $this->sub_name,
            'category' => Category::where('id','=', $this->category_id)->get()->first()->category_name,
            'active' =>  $this->status, 
            // 'items' => ItemCategoryResource::collection(ItemCategory::where('subcategory_id','=', $this->id)->get())  ,
            // 'items' => $this->item_categories,
            //get all item categories and the items associated with it
            'items' => ItemCategoryResource::collection(ItemCategory::all()),
        ];
    }
}
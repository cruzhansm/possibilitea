<?php

namespace App\Http\Resources;

use App\Models\ItemCategory;
use App\Models\Items;
use App\Http\Resources\ItemCategoryResource;
use Illuminate\Support\Facades\URL;
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
            'active' =>  $this->active, 
            'img_path' => $this->img_path ? URL::to($this->img_path) : null,
            'items' => ItemCategoryResource::collection(ItemCategory::where('subcategory_id','=', $this->id)->get()),
        ];
    }
}

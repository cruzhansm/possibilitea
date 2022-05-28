<?php

namespace App\Http\Resources;

use App\Models\ItemCategory;
use App\Models\Items;
use App\Models\Subcategory;
use App\Models\SugarLvl;
use App\Models\Transaction;
use App\Models\User;
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
            'user_name' => User::where('id','=', $this->user_id)->first()->username,
            'item_name' => Items::where('id','=',$this->item_id)->first()->item_name, 
            'category' =>  ItemCategory::where('id',"=",Items::where('id','=',$this->item_id)->first()->itemCat_id)->first()->itemcat_name,
            'quantity' => $this->quantity,
            'size' => $this->size != null ? $this->size : null,
            'price' => $this->price,
            'total' => $this->price * $this->quantity,
            'addon_id' => $this->addon_id,
            'sugar' => $this->sugarlvl_id != null ? SugarLvl::where('id', '=', $this->sugarlvl_id)->first()->sugar_lvl : null,
            'trans_number' => Transaction::get()->count(),
            // 'subcategory' => Subcategory::where('id','=',Items::where('id','=',$this->item_id))->first()->subcat_id
        ];
    }
}

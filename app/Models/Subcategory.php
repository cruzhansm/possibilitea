<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function item_categories()
    {
        return $this->hasMany(ItemCategory::class,'subcategory_id')->with('item');
    }

}

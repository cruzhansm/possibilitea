<?php

namespace App\Models;

use App\Models\Items;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemCategory extends Model
{
    use HasFactory;

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }

    public function item()
    {
        return $this->hasMany(Items::class,'itemCat_id');
    }
}

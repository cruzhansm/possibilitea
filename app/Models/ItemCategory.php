<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}

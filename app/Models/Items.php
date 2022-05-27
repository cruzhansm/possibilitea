<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'item_name',
        'price',
        'itemCat_id',
        'subcat_id',
        'img_path',
    ];

    public function item_categories()
    {
        return $this->belongsTo(ItemCategory::class, 'itemCat_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

}

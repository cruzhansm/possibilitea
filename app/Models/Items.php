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

}

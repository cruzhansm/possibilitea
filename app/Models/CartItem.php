<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'item_id',
        'subcategory_id',
        'quantity',
        'size',
        'price',
    ];

    public function item()
    {
        return $this->hasOne(Items::class, 'item_id');
        // (Items::class, 'item_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

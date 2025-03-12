<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price','status'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

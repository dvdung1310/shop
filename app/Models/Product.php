<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'price', 'sale_price', 'image', 'album'];

    protected $casts = [
        'album' => 'array', // Chuyển đổi album từ JSON sang mảng khi truy xuất dữ liệu
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}

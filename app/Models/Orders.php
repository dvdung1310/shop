<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'payment_method',
        'receiver_name',
        'phone_number',
        'city',
        'district',
        'address_detail',
        'referral_code',
    ];

    // Liên kết với bảng `users`
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Liên kết với bảng `order_items`
    public function orderItems()
    {
        return $this->hasMany(Order_items::class);
    }
}

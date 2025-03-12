<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAffiliate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'referral_code', 'referrer_id', 'level', 'total_commission'
    ];

    protected $hidden = ['password'];

    // Người giới thiệu (referrer)
    public function referrer()
    {
        return $this->belongsTo(UserAffiliate::class, 'referrer_id');
    }

    // Danh sách người được giới thiệu (F1, F2, F3...)
    public function referrals()
    {
        return $this->hasMany(UserAffiliate::class, 'referrer_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID', 'Users_ID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'User_ID', 'Users_ID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'Product_ID';

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'Stock',
        'Category_ID',
//        'Image_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_ID', 'Category_ID');
    }
}

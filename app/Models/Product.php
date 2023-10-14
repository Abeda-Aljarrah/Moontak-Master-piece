<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'main_price',
        'description',
        'main_image',
        'availability',
        'discount_id',
        'Qty',
        'main_unit',
        'main_weight',
        'Expiration_Date',
    ];

    public function orderdetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
    // Product.php
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Product.php
    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }
}

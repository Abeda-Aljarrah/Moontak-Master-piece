<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];

    // Category.php
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }


}

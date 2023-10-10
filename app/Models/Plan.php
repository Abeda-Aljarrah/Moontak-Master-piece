<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function period()
    {
        return $this->hasMany(Period::class, 'plan_id');
    }
}

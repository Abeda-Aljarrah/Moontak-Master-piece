<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'title',
        'plan_id',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'period_id');
    }
}

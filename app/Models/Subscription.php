<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'period_id',
        'is_active',
    ];

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

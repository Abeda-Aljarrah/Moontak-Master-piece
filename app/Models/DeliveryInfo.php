<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_address',
        'street_name',
        'building_name',
        'city',
        'postal_code',
        'phone',
        'notes',
        'delivery_status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'delivery_id');
    }
}

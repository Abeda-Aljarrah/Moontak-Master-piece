<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'total_price',
        'sub_total',
        'sub_fee',
        'created_time',
        'delivery_id',
        'require_date',
    ];

    public function paymentdetail()
    {
        return $this->hasOne(PaymentDetail::class, 'payment_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderdetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
    public function deliveryInfo()
    {
        return $this->hasOne(DeliveryInfo::class, 'delivery_id');
    }
}

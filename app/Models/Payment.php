<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['sale_id', 'amount_paid', 'payment_method_id'];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentOption::class, 'payment_method_id');
    }
}

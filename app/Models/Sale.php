<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    // 'user_id', 'total_amount', 'tax_amount' these should be calculated in backend.
    protected $fillable = ['invoice_number', 'customer_id', 'discount_amount', 'payment_method_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paymentOption()
    {
        return $this->belongsTo(PaymentOption::class);
    }
    public function items()
    {
        return $this->hasMany(SaleItem::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    protected $fillable = ['name'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_method_id');
    }
}

<?php

namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Categories\Models\Category;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'price', 'cost', 'stock_quantity', 'category_id', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function stockMovements()
    // {
    //     return $this->hasMany(StockMovement::class);
    // }
}


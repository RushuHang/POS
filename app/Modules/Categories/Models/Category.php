<?php

namespace App\Modules\Categories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Products\Models\Product;
use Database\Factories\Modules\Categories\CategoryFactory; // explicitly import

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected static function newFactory(): Factory
    {
        return CategoryFactory::new();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

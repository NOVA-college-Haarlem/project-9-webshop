<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'variant_name', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function stockLevel()
    {
        return $this->hasOne(StockLevel::class);
    }
}

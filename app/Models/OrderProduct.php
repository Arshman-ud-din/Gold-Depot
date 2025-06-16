<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderProduct extends Model
{
    protected $fillable = ['id', 'order_id', 'product_id', 'product_name', 'product_price', 'product_quantity', 'total'];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class, 'order_product_variants');
    }
    public function variant()
    {
        return $this->hasMany(OrderProductVariant::class, 'order_product_id');
    }

}

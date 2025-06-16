<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    protected $fillable = ['id', 'review','fullname','email','product_id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

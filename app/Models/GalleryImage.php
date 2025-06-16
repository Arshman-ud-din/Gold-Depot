<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryImage extends Model
{
    protected $fillable = ['product_id', 'images'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

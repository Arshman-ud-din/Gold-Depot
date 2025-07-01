<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable =
        [
            'title',
            'short_description',
            'long_description',
            'price',
            'quantity',
            'featured_img',
            'images',
            'category_id',
        ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function galleryimages(): HasMany
    {
        return $this->hasMany(GalleryImage::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class ,'order_products');
    }

    public function productAttributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class ,'product_attributes');
    }
    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class ,'product_variants')->withPivot('price');
    }
}

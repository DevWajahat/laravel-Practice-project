<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    protected $fillable = ['category_id', 'name', 'price', 'description'];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->withTimestamps();
    }

    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class)->withTimestamps();
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity','color','size','id')->withTimestamps();
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }


}

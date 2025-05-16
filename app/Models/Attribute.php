<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    protected $fillable = ['name'];
    public $timestamps = true;

    public function products() : BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function variants() : HasMany
    {
        return $this->hasMany(Variant::class);
    }
}

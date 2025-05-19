<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $fillable = ['user_id','quantity','color','size'];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity','color','size','id')->withTimestamps();
    }

}

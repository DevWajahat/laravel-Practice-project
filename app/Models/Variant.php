<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Variant extends Model
{
   protected $fillable = ['attribute_id','name'];


   public function attribute() : BelongsTo
   {
    return $this->belongsTo(Attribute::class);
   }

   public function products() : BelongsToMany
   {
    return $this->belongsToMany(Product::class);
   }

}

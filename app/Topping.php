<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
   protected $fillable = [
       'pizza_id',
       'name'
   ];

   public function pizza()
   {
       return $this->belongsTo(Pizza::class);
   }
}

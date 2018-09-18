<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'name'
    ];

    public function toppings()
    {
        return $this->hasMany(Topping::class);
    }
}

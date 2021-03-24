<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['address_prefix', 'address', 'number', 'city', 'rooms','bath', 'furniture', 'price', 'image'];
}

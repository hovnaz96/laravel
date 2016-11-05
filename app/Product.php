<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getAllProducts(){
        return Product::all();
    }
}

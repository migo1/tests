<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    public $fillable = [
        'name', 'qty', 'price', 'test_id'
    ];

}

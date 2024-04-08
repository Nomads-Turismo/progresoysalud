<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class buyProducts extends Model
{
    protected $table = 'buy_products';

    protected $fillable = [
        'name',
        'price'
    ];
    protected $hidden = [];
}

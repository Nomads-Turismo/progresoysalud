<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Extra extends Model
{
    protected $table = 'sub_category';

    protected $fillable = [
        'name',
        'price',
        'stock'
    ];
    protected $hidden = [];
}

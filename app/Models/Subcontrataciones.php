<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Subcontrataciones extends Model
{
    protected $table = 'subcontrataciones';

    protected $fillable = [
        'name',
        'hour',
        'name_teacher',
        'name_company',
        'month',
        'year',
        'type',
        'price'
    ];
    protected $hidden = [];
}

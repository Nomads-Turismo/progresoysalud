<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRel extends Model
{
    protected $table = 'user_rel';
    protected $fillable = ['id_propia', 'id_vinculo'];

    protected $hidden = [];
}
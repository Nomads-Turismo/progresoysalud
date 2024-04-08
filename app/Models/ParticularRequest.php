<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticularRequest extends Model
{
    protected $table = 'particular_request';

    protected $fillable = [
        `price`,
        `payment`,
        `client_id`,
        `hours`,
        `participantes`
    ];

    protected $hidden = [];

}

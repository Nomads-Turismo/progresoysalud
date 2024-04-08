<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $fillable = [
        'name',
        'surname',
        'dni',
        'address',
        'email',
        'phone',
        'height',
        'weight',
        'shoe_size',
        'ski_level',
        'snow_level',
        'snow_front',
        'boot_type',
        'payment_status',
        'birthdate',
        'colaborators_id',
        'consent1'
    ];

    protected $hidden = [];

    public function courses()
    {
        return $this->belongsToMany(Client::class);
    }
}

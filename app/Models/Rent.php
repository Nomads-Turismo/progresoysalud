<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rent';

    protected $fillable = [
        'product_id',
        'client_id',
        'date',
        'time_start',
        'time_end',
        'status',
        'price',
        'payment'
    ];

    protected $hidden = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'rent_rel', 'id_vinculo', 'id_propia');
    }

    public function colaborators()
    {
        return $this->belongsToMany(Colaborators::class, 'rent_colaborator', 'rent_id', 'colaborator_id');
    }
    
}

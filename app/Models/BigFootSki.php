<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BigFootSki extends Model
{
    protected $table = 'bigfootski';

    protected $fillable = [
        'id_rent',
        'id_product'
    ];

    protected $hidden = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'rent_rel', 'id_vinculo', 'id_propia');
    }
    
}

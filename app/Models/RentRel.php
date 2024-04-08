<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentRel extends Model
{
    protected $table = 'rent_rel';
    protected $fillable = ['id_propia', 'id_vinculo'];

    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_propia');
    }

    public function rent()
    {
        return $this->belongsTo(Rent::class, 'id_vinculo');
    }
}
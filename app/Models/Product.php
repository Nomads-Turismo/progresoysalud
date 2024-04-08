<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'size',
        'quality',
        'status',
        'health',
        'category_id',
        'color',
        'observations',
        'rotation',
        'total_stock',
        'date',
        'model',
        'gender'
    ];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function statuses()
    {
    return $this->hasMany(ProductStatus::class);
    }
    public function rents()
    {
        return $this->hasMany(Rent::class, 'product_id');
    }
    public function packs()
    {
    return $this->belongsToMany(Pack::class);
    }
}

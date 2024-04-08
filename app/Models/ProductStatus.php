<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    protected $table = 'product_status';

    protected $fillable = [
        'product_id',
        'start_date',
        'end_date',
        'category'
        //MAS CAMPOS????
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model{
        protected $fillable = ['name', 'details','price_1_day', 'price_2_days', 'price_3_days', 'price_4_days', 'price_5_days', 'price_6_days', 'price_7_days'];
    
        public function products(){
            return $this->belongsToMany(Product::class);
        }
        public function category(){
            return $this->belongsTo(Category::class);
        }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'seller_id','quality', 'cardboard', 'price', 'imagePath'];

    public function users(){
        return $this->hasOne('App\User', 'id', 'seller_id');
    }
}

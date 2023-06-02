<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table= "customer";
    public $timestamps=false;

    public function getSeller(){
            return $this->hasOne('App\Models\Seller');
    }
    public function getProducts(){
        return $this->hasMany('App\Models\Product');
    }

}

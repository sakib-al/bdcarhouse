<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function categories()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    public function product_brand()
    {
        return $this->hasOne('App\Models\Brand', 'id', 'brand_id');
    }

    public function allDefaultPhotos() {
        return $this->hasMany('App\Models\ProductImage', 'product_id','id');
    }

    public function carmodels(){

        return $this->hasOne('App\Models\Carmodel', 'id', 'model_id');
    }

    public function countries(){

        return $this->hasOne('App\Models\Country', 'id', 'country');

    }

    public function cities(){

        return $this->hasOne('App\Models\City', 'id', 'city_id');

    }

    public function singleImage(){

        return $this->hasOne('App\Models\ProductImage', 'product_id', 'id');

    }


}

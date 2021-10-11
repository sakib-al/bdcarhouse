<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    protected $table = 'spare_parts';

    public function categories()
    {
        return $this->hasOne('App\Models\PartsCategory', 'id', 'parts_category');
    }

    public function carmodels(){

        return $this->hasOne('App\Models\Carmodel', 'id', 'car_model');
    }

    public function product_brand()
    {
        return $this->hasOne('App\Models\Brand', 'id', 'car_brand');
    }

    public function allPartstPhotos() {
        return $this->hasMany('App\Models\PartsImage', 'parts_id','id');
    }

    public function singleImage(){

        return $this->hasOne('App\Models\PartsImage', 'parts_id', 'id');

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

      public function getCityCombo(){

    	$data = City::get();
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
    }
    //Display country from countries table

    public function countries() {
        return $this->belongsTo('App\Models\Country','country_id')->withDefault();
    }
    public function numberOfCars()
    {
        return $this->hasMany('App\Models\Product', 'city_id','id');
    }




}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
	protected $fillable = ['name','code','status','created_by','updated_by'];
	
      public function getCountryCombo(){

    	$data = Country::get();
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
    }



}

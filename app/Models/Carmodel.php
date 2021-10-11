<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    protected $table = 'models';

    public function getCarmodelCombo(){

    	$data = Carmodel::get();
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getCategorCombo(){

        $data = Category::get();
        //dd($data);
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
    }

    public function cars()
    {
        return $this->hasMany(Product::class);
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    public function getBlogCombo(){

        $data = Blog::get();
        //dd($data);
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
	}
}

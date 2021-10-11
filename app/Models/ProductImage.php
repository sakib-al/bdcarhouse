<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    public function getProductImageCombo(){

    	$data = ProductImage::get();
    	$response = [];
    	if ($data) {
    		foreach ($data as $key => $value) {
    			$response[$value->id] = $value->name;
    		}
    	}
    	return $response;
    }
     
}

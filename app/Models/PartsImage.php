<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartsImage extends Model
{
    protected $table = 'parts_images';
    public function getPartsImageCombo(){

        $data = PartsImage::get();
        $response = [];
        if ($data) {
            foreach ($data as $key => $value) {
                $response[$value->id] = $value->name;
            }
        }
        return $response;
    }

}

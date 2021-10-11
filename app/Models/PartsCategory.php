<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartsCategory extends Model
{
    protected $table = 'parts_category';


    public function getPartsCombo(){

        $data = PartsCategory::get();
        $response = [];
        if ($data) {
            foreach ($data as $key => $value) {
                $response[$value->id] = $value->name;
            }
        }
        return $response;
    }

}

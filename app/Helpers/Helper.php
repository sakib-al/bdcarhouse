<?php

use App\Models\PartsCategory;
use App\Models\Brand;
use App\Models\Carmodel;

// if (!function_exists('getSpareParts')) {
//     function getSpareParts($id) {
//         $parts_name = PartsCategory::select('name')
//             ->where('id', $id)
//             ->first();
//         if (! empty($parts_name)) {
//             return $parts_name->name;
//         }
//         return [];
//     }
// }

// Helper Data for Choosen

if (!function_exists('getCarBrand')) {
    function getCarBrand($id) {
        $car_brand = Brand::select('name')
            ->where('id', $id)
            ->first();
        if (! empty($car_brand)) {
            return $car_brand->name;
        }
        return [];
    }
}


if (!function_exists('getCarModel')) {
    function getCarModel($id) {
        $car_model = Carmodel::select('name')
            ->where('id', $id)
            ->first();
        if (! empty($car_model)) {
            return $car_model->name;
        }
        return [];
    }
}

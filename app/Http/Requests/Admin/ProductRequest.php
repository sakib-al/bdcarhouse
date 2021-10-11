<?php

namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      $rules = [
          'category'                => 'required',
          'brand'                   => 'required',
          'carmodel'                => 'required',
          'price'                   => 'required',
          'name'                    => 'required',
          'body_type'               => 'required',
          'mileage'                 => 'required',
          'transmission'            => 'required',
          'fuel_type'               => 'required',
          'sku_prefix'              => 'required',
          'is_featured'             => 'required',

          'phone'                   => 'required',
          'gear_type'               => 'required',
          'engine_size'             => 'required',
          'engine_type'             => 'required',
          'steering_type'           => 'required',
          'safety_rating'           => 'required',
          'no_of_seats'             => 'required',
          'city'                    => 'required',
          'longitude'               => 'required',
          'latitude'                => 'required',
          'reg_no'                  => 'required',
          'zip_code'                => 'required',
          'condition'               => 'required',

          'address'                 => 'required',
          'description'             => 'required',


      ];

      return $rules;
    }

    public function messages()
    {
        return [
            'category.required'     => 'Please category name !',
            'brand.required'        => 'Please enter brand name !',
            'carmodel.required'     => 'Please enter carmodel !',
            'price.required'        => 'Please enter price !',
            'name.required'         => 'Please enter name !',
            'body_type.required'    => 'Please enter body type !',
            'mileage.required'      => 'Please enter mileage !',
            'transmission.required' => 'Please enter transmission !',
            'fuel_type.required'    => 'Please enter fuel type !',
            'sku_prefix.required'   => 'Please enter sku prefix !',
            'is_featured.required'  => 'Please select featured !',

            'phone.required'        => 'Please enter phone no !',
            'gear_type.required'    => 'Please select gear type!',
            'engine_size.required'  => 'Please enter engine size !',
            'engine_type.required'  => 'Please enter engine type !',
            'steering_type.required'=> 'Please enter steering type !',
            'safety_rating.required'=> 'Please enter safety rating !',
            'no_of_seats.required'  => 'Please enter no of seats !',
            'city.required'         => 'Please enter city !',
            'longitude.required'    => 'Please enter longtitude !',
            'latitude.required'     => 'Please enter latitude !',
            'reg_no.required'       => 'Please enter reg no !',
            'zip_code.required'     => 'Please enter zip code !',
            'condition.required'    => 'Please select condition !',

            'address.required'      => 'Please enter address !',
            'description.required'  => 'Please enter description !',
        ];
    }

}

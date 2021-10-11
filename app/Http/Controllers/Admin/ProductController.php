<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\City;
use App\Models\Country;
use DB;
use Validator;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $category;
    private $brand;
    private $carmodel;
    private $city;
    private $country;

    public function __construct(Category $category, Brand $brand, Carmodel $carmodel, City $city, Country $country, ProductImage $prd_img, Auth $auth)
    {
        $this->middleware('auth');
        $this->category = $category;
        $this->brand = $brand;
        $this->carmodel = $carmodel;
        $this->city = $city;
        $this->country = $country;
        $this->auth = $auth;
        // $this->prd_img        = $prd_img;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product['title'] = "Product";
        $product = Product::all();
        return view('admin.product.list')->with('product',$product);

    }

    public function add()
    {
        $product['title'] = "Product";
        $category = $this->category->getCategorCombo();
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();
        $city = $this->city->getCityCombo();
        $country = $this->country->getCountryCombo();

        return view('admin.product.add')->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withCity($city)->withCountry($country);
    }

    public function edit($id)
    {
        $product['title'] = "Product";
        $category = $this->category->getCategorCombo();
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();
        $city = $this->city->getCityCombo();
        $country = $this->country->getCountryCombo();
        $product = Product::find($id);


        return view('admin.product.edit', compact('product'))->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withCity($city)->withCountry($country);;
    }

    public function store(ProductRequest $request)
    {

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $product = new Product;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->model_id = $request->carmodel;
        $product->price = $request->price;
        $product->name = $request->name;
        $product->body_type = $request->body_type;
        $product->mileage = $request->mileage;
        $product->transmission = $request->transmission;
        $product->fuel_type = $request->fuel_type;
        $product->sku_prefix = $request->sku_prefix;
        $product->is_featured = $request->is_featured;
        // $product->email         = $request->email;
        $product->image = $request->image;
        $product->phone = $request->phone;
        $product->gear_type = $request->gear_type;
        $product->engine_size = $request->engine_size;
        $product->engine_type = $request->engine_type;
        $product->steering_type = $request->steering_type;
        $product->safety_rating = $request->safety_rating;
        $product->no_of_seats = $request->no_of_seats;
        $product->city_id = $request->city;
        $product->longitude = $request->longitude;
        $product->latitude = $request->latitude;
        $product->reg_no = $request->reg_no;
        $product->grade = $request->grade;
        $product->chassis_no = $request->chassis_no;
        $product->color = $request->color;
        $product->zip_code = $request->zip_code;
        $product->condition = $request->condition;
        $product->country_id = $request->country;
        // $product->brochure      = $request->brochure;
        //$product->title         = $request->title;
        $product->address = $request->address;
        $product->description = $request->description;
        $product->save();

        if ($request->file('images')) {

            foreach ($request->file('images') as $key => $image) {
                $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $img_lib = new ProductImage();
                $img_lib->product_id = $product->id;
                $img_lib->name = $file_name;

                $img_lib->relative_path = '/image/';
                $img_lib->save();

                $image->move(public_path() . '/image/', $file_name);

            }
        }
        toast('Data added successfully !!','success');
        return redirect()->route('product.list');
    }

    public function getDeleteImage($id)
    {
        $data = ProductImage::where('id', $id)->delete();
        if ($data) {
            return ['status' => 'true'];
        } else {
            return false;
        }
    }


    public function update(Request $request)
    {



        $product = Product::findOrFail($request->id);
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->model_id = $request->carmodel;
        $product->price = $request->price;
        $product->name = $request->name;
        $product->body_type = $request->body_type;
        $product->mileage = $request->mileage;
        $product->transmission = $request->transmission;
        $product->fuel_type = $request->fuel_type;
        $product->sku_prefix = $request->sku_prefix;
        $product->is_featured = $request->is_featured;
        // $product->email         = $request->email;
        $product->image = $request->image;
        $product->phone = $request->phone;
        $product->gear_type = $request->gear_type;
        $product->engine_size = $request->engine_size;
        $product->engine_type = $request->engine_type;
        $product->steering_type = $request->steering_type;
        $product->safety_rating = $request->safety_rating;
        $product->no_of_seats = $request->no_of_seats;
        $product->city_id = $request->city;
        $product->longitude = $request->longitude;
        $product->latitude = $request->latitude;
        $product->reg_no = $request->reg_no;
        $product->grade = $request->grade;
        $product->chassis_no = $request->chassis_no;
        $product->color = $request->color;
        $product->zip_code = $request->zip_code;
        $product->condition = $request->condition;
        $product->country_id = $request->country;
        // $product->brochure      = $request->brochure;
        $product->title = $request->title;
        $product->address = $request->address;
        $product->description = $request->description;


        if ($request->file('images')) {

            foreach ($request->file('images') as $key => $image) {
                $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $img_lib = new ProductImage();
                $img_lib->product_id = $request->id;
                $img_lib->name = $file_name;

                $img_lib->relative_path = '/image/';
                $img_lib->save();

                $image->move(public_path() . '/image/', $file_name);

            }
        }

        $product->update();
        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('product.list');



    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
         toast('Data has deleted City !!','success');
        return redirect()->route('product.list');
    }

    public function view($id)
    {
        $category = $this->category->getCategorCombo();
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();
        $city = $this->city->getCityCombo();
        $country = $this->country->getCountryCombo();
        $product = Product::find($id);


        return view('admin.product.view', compact('product'))->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withCity($city)->withCountry($country);;

    }

}

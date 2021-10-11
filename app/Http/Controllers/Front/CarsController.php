<?php

namespace App\Http\Controllers\Front;

use DB;
use App\Models\City;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $category;

    public function __construct(Category $category, Brand $brand, Carmodel $carmodel, City $city)
    {

        $this->category       = $category;
        $this->brand          = $brand;
        $this->carmodel       = $carmodel;
        $this->city           = $city;
        // $this->country        = $country;
        // $this->prd_img        = $prd_img;
    }

    public function cars()
    {
        $product = Product::paginate(12);
        return view('front.cars')->with('product',$product);
    }

    public function category_wise_cars($slug)
    {
        $data['category'] = Product::where('category_id',$slug)
        ->select('categories.name as cat_name','categories.*','products.*','products.id as product_id')
        ->leftJoin('categories','categories.id','=','products.category_id')
        ->orderBy('products.id', 'desc')
        ->take(10)
        ->get();

       // dd($data['category']);
        return view('front.cars_by_category',$data);
    }
    public function specefic_category_car($id){
        $product = DB::table('products')->where('products.id',$id)
        ->select('products.*','categories.name as category_name')
        ->leftJoin('categories','categories.id','=','products.category_id')
        ->first();
      //  dd($product);
        return view('front.specefic_category_car')->with('product',$product);
    }

    public function cars_location($id){

        $data = Product::where('city_id',$id)->orderBy('products.id', 'desc')->get();
        return view('front.pages.cars_by_location')->withCity($data);
    }



    public function cars_view($id)
    {



            $category = $this->category->getCategorCombo();
            $brand    = $this->brand->getBrandCombo();
            $carmodel = $this->carmodel->getCarmodelCombo();
            $latest_cars = Product::orderBy('created_at', 'desc')->take(10)->get();
            $car_city = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();

            // $city     = $this->city->getCityCombo();
            // $country  = $this->country->getCountryCombo();
            $product = Product::find($id);
            $count   = $product->click;
            $product->click = $count+1;
            $product->update();


            return view('front.cars_view',compact('product'))->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withLatest($latest_cars)->withCity($car_city);

    }


}

<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\SpareParts;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $category;

    public function __construct(
        //Category $category,
        Brand $brand, Carmodel $carmodel, City $city)
    {

       // $this->category = $category;
        $this->brand = $brand;
        $this->carmodel = $carmodel;
        $this->city = $city;
        // $this->country        = $country;
        // $this->prd_img        = $prd_img;
    }

    public function front_index()
    {

        $category     = Category::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();
        $city         = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();
        $is_featured  = Product::where('is_featured', 'yes')->orderBy('id', 'desc')->take(8)->get();
        $latest_cars  = Product::orderBy('created_at', 'desc')->take(10)->get();
        $top_cars     = Product::orderBy('click', 'desc')->take(5)->get();
        $brand        = $this->brand->getBrandCombo();
        $carmodel     = $this->carmodel->getCarmodelCombo();
        $car_city     = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();

        //dd($category);


        return view('front.index')->withCity($city)->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withLatest($latest_cars)->withTop($top_cars)->withCity($car_city)->withFeatured($is_featured);
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function advance_search(Request $request)
    {
        $product      = Product::take(8)->get();
        $category     = Category::where('status', 'active')->orderBy('id', 'desc')->get();
        $brand        = $this->brand->getBrandCombo();
        $carmodel     = $this->carmodel->getCarmodelCombo();
        $city         = City::where('status', 'active')->orderBy('id', 'desc')->get();

        // Input search


        // // Filter search
        $select = array();
        $select['category1']    = (int)$request->car_category;
        $select['brand1']       = (int)$request->brand;
        $select['model1']       = (int)$request->carmodel;
        $select['condition1']   = (int)$request->condition;
        $select['city1']        = (int)$request->city;
        $select['fuel']         = $request->fuel_type;

        // $advanced = $request->advanced_search;

        // if ($request->advanced_search == '') {
        //     $advanced = 0;
        // }else{
        //     $advanced = $request->advanced_search;
        // }
        // $adv_search             = Product::where('name', 'like', '%' .$advanced. '%')->get();

        $advanced_s = Product::where('id', '!=', 0);

        if ($request->advanced_search != '') {
            $advanced_s->where('name', 'like', '%' .$request->advanced_search. '%');
        }

        if($select['category1'] != 0){
            $advanced_s->where('category_id',$select['category1']);
        }

        if($select['brand1'] != 0){
            $advanced_s->where('brand_id',$select['brand1']);
        }

        if($select['model1'] != 0){
            $advanced_s->where('model_id',$select['model1']);
        }
        if($select['city1'] != 0){
            $advanced_s->where('city_id',$select['city1']);
        }

        if($select['fuel'] != 'null'){
            $advanced_s->where('fuel_type',$select['fuel']);
        }

        $advanced_ss = $advanced_s->get();

        // $advanced_s = Product::orWhere('name', 'like', '%' .$advanced. '%')->orWhere('category_id',$select['category1'])->orWhere('brand_id',$select['brand1'])->orWhere('model_id',$select['model1'] )->orWhere('city_id',$select['city1'])->get();



        return view('front.advancesearch')->withCategory($category)->withBrand($brand)->withCarmodel($carmodel)->withCity($city)->with('product',$product)->withAdvance($advanced_ss)->withSelect($select);


    }
    public function signup()
    {
        return view('front.signup');
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function cars()
    {
        return view('front.cars');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data['products']    = Product::where('name', 'like', '%' .$search. '%')->get();
        $data['spareparts'] = SpareParts::where('parts_name', 'like', '%' .$search. '%')->get();



        return view('front.search')->withData($data);

    }


    // public function adv_search(Request $request)
    // {

    //     $category = Category::
    //     $advanced = $request->get('advanced_search');

    //     $adv_search = Product::where('name', 'like', '%' .$advanced. '%')->get();

    //     return view('front.advancesearch')->withProduct($adv_search);

    // }






    public function search1(Request $request)
    {

        $category=$request->car_category;
        $brand = $request->brand;
        $model = $request->carmodel;
        $condition = $request->condition;
        $search = $request->get('search');

        //$search1 = $request->get('search1');

        $data['products']  = Product::orwhere('category_id',$category)->orWhere('brand_id',$brand)->orwhere('model_id',$model)->get();
        return view('front.search')->withData($data);

    }



    public function all_categories()
    {
        $data['category'] = Category::where('status', 'active')->orderBy('id', 'desc')->get();
        $latest_cars  = Product::orderBy('created_at', 'desc')->take(10)->get();
        $car_city     = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();

       // dd($data['category']);
        return view('front.car_category_list',$data)->withLatest($latest_cars)->withCity($car_city);
    }
}


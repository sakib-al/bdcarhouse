<?php

namespace App\Http\Controllers\Front;


use App\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\SpareParts;
use Illuminate\Http\Request;
use App\Models\PartsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{

    public function spare_parts()
    {
        $user           =  User::all();
        $feature_parts  = SpareParts::where('is_feature', 'yes')->orderBy('id', 'desc')->take(4)->get();
        $recent_parts   = SpareParts::orderBy('created_at', 'desc')->take(10)->get();
        $category       = PartsCategory::orderBy('id', 'desc')->take(10)->get();

        return view('front.pages.spare_parts')
        ->withUser($user)
        ->withFeature($feature_parts)
        ->withCategory($category)
        ->withRecent($recent_parts);

    }

    public function shop_view($id)
    {


        $user           =  User::find($id);
        $feature_parts  = SpareParts::where('is_feature', 'yes')->orderBy('id', 'desc')->take(4)->get();
        $recent_parts   = SpareParts::orderBy('created_at', 'desc')->take(10)->get();
        $user_product   = SpareParts::where('user_id', $id)->get();

        return view('front.pages.parts_shop_view')
        ->withUser($user)
        ->withProduct($user_product)
        ->withFeature($feature_parts)
        ->withRecent($recent_parts);

    }

    public function service_center()
    {
        $latest_cars  = Product::orderBy('created_at', 'desc')->take(6)->get();
        $top_cars     = Product::orderBy('click', 'desc')->take(5)->get();
        $category     = Category::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();

        return view('front.pages.service_center')
        ->withLatest($latest_cars)
        ->withTop($top_cars)
        ->withCategory($category);
    }

    // Front Page View

    public function parts_view($id)
    {
        $parts = SpareParts::find($id);
        // $category = $this->category->getPartsCombo();
        // $brand = $this->brand->getBrandCombo();
        // $carmodel = $this->carmodel->getCarmodelCombo();
        $recent_parts   = SpareParts::orderBy('created_at', 'desc')->take(10)->get();

        return view('front.pages.spare_parts_view', compact('parts'))->withRecent($recent_parts);;

    }




}

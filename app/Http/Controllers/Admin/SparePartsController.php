<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\SpareParts;
use App\Models\PartsCategory;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\PartsImage;
use Validator;
use Auth;
use Illuminate\Http\Request;

class SparePartsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $brand;
    private $carmodel;


    public function __construct( Brand $brand, Carmodel $carmodel, PartsCategory $category, Auth $auth)
    {
        $this->middleware('auth');
        $this->brand = $brand;
        $this->carmodel = $carmodel;
        $this->category = $category;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::user()->role==1) {

            $parts = SpareParts::all();
        }
        else {
            $parts = SpareParts::Where('user_id',Auth::user()->id)->get();
        }
        return view('admin.spare_parts.index')->withParts($parts);
    }


    public function create()
    {
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();
        $category =  $this->category->getPartsCombo();
        return view('admin.spare_parts.create')->withBrand($brand)->withCarmodel($carmodel)->withCategory($category);
    }

    public function edit(Request $request,$id)
    {

        $parts = SpareParts::find($id);
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();
        $category =  $this->category->getPartsCombo();

        return view('admin.spare_parts.edit')->withParts($parts)->withBrand($brand)->withCarmodel($carmodel)->withCategory($category);
    }



    public function store(Request $request){



                $parts                      = new SpareParts;
                $parts->parts_name          = $request->parts_name;
                $parts->parts_brand         = $request->parts_brand;
                $parts->parts_category      = $request->parts_category;
                $car_brand                  = $request->car_brand;
                $parts->car_brand           = implode(',',$car_brand);
                $car_model                  = $request->car_model;
                $parts->car_model           = implode(',',$car_model);
                $parts->car_year            = $request->car_year;
                $parts->address             = $request->address;
                $parts->phone_no            = $request->phone_no;
                $parts->price               = $request->price;
                $parts->description         = $request->description;
                $parts->status              = $request->status;
                $parts->is_feature          = $request->is_feature;
                $parts->image               = $request->image;
                $parts->user_id             = Auth::user()->id;
                $parts->save();


                if ($request->file('images')) {

                    foreach ($request->file('images') as $key => $image) {
                        $file_name = 'spare_parts_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                        $img_lib = new PartsImage();
                        $img_lib->parts_id = $parts->id;
                        $img_lib->name = $file_name;

                        $img_lib->relative_path = '/parts_image/';
                        $img_lib->save();
                        $image->move(public_path() . '/parts_image/', $file_name);

                    }
                }


                toast('Data added successfully !!','success');
                return redirect()->route('parts.index');
    }

    public function update(Request $request, $id){


        $parts = SpareParts::find($id);
        $parts->parts_name          = $request->parts_name;
        $parts->parts_brand         = $request->parts_brand;
        $parts->parts_category      = $request->parts_category;
        $car_brand                  = $request->car_brand;
        $parts->car_brand           = implode(',',$car_brand);
        $car_model                  = $request->car_model;
        $parts->car_model           = implode(',',$car_model);
        $parts->car_year            = $request->car_year;
        $parts->address             = $request->address;
        $parts->phone_no            = $request->phone_no;
        $parts->price               = $request->price;
        $parts->description         = $request->description;
        $parts->status              = $request->status;
        $parts->is_feature          = $request->is_feature;

        if ($request->file('images')) {

            foreach ($request->file('images') as $key => $image) {
                $file_name = 'spare_parts_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $img_lib = new PartsImage();
                $img_lib->parts_id = $parts->id;
                $img_lib->name = $file_name;

                $img_lib->relative_path = '/parts_image/';
                $image->move(public_path() . '/parts_image/', $file_name);
                $img_lib->save();

            }
        }
        $parts->save();
        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('parts.index');

    }

    public function view($id)
    {
        $parts = SpareParts::find($id);
        $category = $this->category->getPartsCombo();
        $brand = $this->brand->getBrandCombo();
        $carmodel = $this->carmodel->getCarmodelCombo();


        return view('admin.spare_parts.view', compact('parts'))->withCategory($category)->withBrand($brand)->withCarmodel($carmodel);;

    }




    public function delete($id)
    {
        $parts = SpareParts::find($id);
        $parts->delete();

        toast('Data hasbeen Delete successfully !!','success');
        return redirect()->route('parts.index');
    }

    public function getDeleteImage($id)
    {

        $parts = PartsImage::find($id);
        $parts->delete();
        if ($parts) {
            return ['status' => 'true'];
        } else {
            return false;
        }
    }


}

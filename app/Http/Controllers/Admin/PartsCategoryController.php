<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PartsCategory;
use Validator;
use Illuminate\Http\Request;

class PartsCategoryController extends Controller
{

    public function index()
    {
       $p_category = PartsCategory::all();
        return view('admin.parts_category.index')->withCategory($p_category);
    }


    public function create()
    {
        // $data['category'] = Category::all();
        return view('admin.parts_category.create');
    }

    public function edit(Request $request,$id)
    {

        $p_category = PartsCategory::find($id);


        return view('admin.parts_category.edit')->withCategory($p_category);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [

                    'name' => 'required|string|max:255|unique:categories',

                    'status' => 'required',


                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $parts_category            = new PartsCategory;
                $parts_category->name      = $request->name;
                $parts_category->status    = $request->status;
                $parts_category->save();


                if ($request->file('images')) {

                 foreach ($request->file('images') as $key => $image) {
                        $file_name = 'category_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                        $parts_category->image = $file_name;
                        $parts_category->save();
                        $image->move(public_path() . '/parts_image/', $file_name);
                    }
                }


                toast('Data added successfully !!','success');
                return redirect()->route('parts.category.index');
    }

    public function update(Request $request, $id){


        $parts_category = PartsCategory::find($id);
        $parts_category->name    = $request->name;
        $parts_category->status  = $request->status;

        if ($request->file('images')) {



            foreach ($request->file('images') as $key => $image) {
                   $file_name = 'category_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                   $parts_category->image = $file_name;
                   $image->move(public_path() . '/parts_image/', $file_name);
                }
        }
        $parts_category->save();
        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('parts.category.index');

    }


    public function delete($id)
    {
        $category = PartsCategory::find($id);
        $category->delete();

        toast('Data hasbeen Delete successfully !!','success');
        return redirect()->route('parts.category.index');
    }

    public function getDeleteImage($id)
    {

        $category = PartsCategory::find($id);
        $category->image    = null;
        $category->save();
        if ($category) {
            return ['status' => 'true'];
        } else {
            return false;
        }
    }

}

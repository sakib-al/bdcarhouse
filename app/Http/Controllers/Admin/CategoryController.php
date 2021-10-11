<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Validator;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * add a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $data['title'] = "Category";
        $data['category'] = Category::all();
        return view('admin.category.list',$data);
    }
    public function add()
    {
        $data['title'] = "Category";
        return view('admin.category.add',$data);
    }
    public function edit(Request $request,$id)
    {
        $data['title'] = "Category";
        $data ['category'] = Category::find($id);


        return view('admin.category.edit',$data);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [

                    'name' => 'required|string|max:255|unique:categories',
                    'name_bn' => 'required|string|max:10|unique:categories',
                    'status' => 'required',


                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $category            = new Category;
                $category->name      = $request->name;
                $category->name_bn   = $request->name_bn;
                // $category->slug      = Str::slug($request->name);
                $category->status    = $request->status;
                // $category->created_by = Auth::user()->id;
                $category->save();


                if ($request->file('images')) {

                 foreach ($request->file('images') as $key => $image) {
                        $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                        $category->image = $file_name;
                        $category->save();
                        $image->move(public_path() . '/image/', $file_name);
                    }
                }


                toast('Data added successfully !!','success');
                return redirect()->route('admin.category.list');
    }




            public function update(Request $request, $id){
                //dd($request);
                $request->validate([
                    'name'         => 'required',
                    'name_bn'      => 'required',
                    'status'       => 'required',

                ]);

                $category = Category::find($id);
                $category->name    = $request->name;
                $category->name_bn = $request->name_bn;
                $category->status  = $request->status;
                // $category->image    = $request->image;
                $category->save();
                //dd($category);


                if ($request->file('images')) {



                    foreach ($request->file('images') as $key => $image) {
                           $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                           $category->image = $file_name;
                           $image->move(public_path() . '/image/', $file_name);
                        }
                    }

                    $category->save();
                toast('Data hasbeen updated successfully !!','success');
                return redirect()->route('admin.category.list');

            }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.list');
    }

    public function getDeleteImage($id)
    {

        $category = Category::find($id);
        $category->image    = null;
        \unlink;
        $category->save();
        if ($category) {
            return ['status' => 'true'];
        } else {
            return false;
        }
    }

}

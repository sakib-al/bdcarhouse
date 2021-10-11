<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Carmodel;
use App\Models\Brand;
use App\User;

use Auth;
use Validator;

use Illuminate\Http\Request;

class brandController extends Controller
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
        $data['title'] = "Brand";
        $data['brand'] = Brand::paginate(10);
        $user = User::find(1);
        return view('admin.brand.list',$data)->withUser($user);
    }
    public function add()
    {
        $data['title'] = "Brand";
        return view('admin.brand.add',$data);
    }
    public function edit(Request $request, $id)
    {
        $data['title'] = "Brand";
        $data ['brand'] = Brand::find($id);
        //dd($data);

        return view('admin.brand.edit',$data);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [

                    'name' => 'required|string|max:255|unique:brands',
                    // 'name_bn' => 'required|string|max:10|unique:brands',
                    // 'status' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

        $brand = new Brand;
        $brand->name = $request->name;
        $brand->name_bn = $request->name_bn;
        $brand->status = $request->status;
        $brand->save();

        toast('Data added successfully !!','success');
        // return redirect()->route('admin.brand.list');
        return redirect()->back();

    }



    public function update(Request $request, $id){
        //dd($request);

        $request->validate([
            'name'            => 'required',
            'name_bn'         => 'required',
            'status'          => 'required'
        ]);

        $brand            = Brand::find($id);
        $brand->name      = $request->name;
        $brand->name_bn   = $request->name_bn;
        $brand->status    = $request->status;
        $brand->save();
        //dd($brand);

        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('admin.brand.list');

    }


    public function delete($id)
    {
        $delete_row = Brand::find($id);
        //dd($delete_row);
        if (!is_null($delete_row)) {
            $delete_row->delete();
        }

        toast('Data has deleted brand !!','success');
        return back();

    }

}

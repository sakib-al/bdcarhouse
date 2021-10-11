<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Carmodel;
use Illuminate\Support\Facades\Auth;

use Validator;

use Illuminate\Http\Request;

class CarmodelController extends Controller
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
        $data['title'] = "Carmodel";
        $data['carmodel'] = Carmodel::paginate(10);
        return view('admin.carmodel.list',$data);
    }
    public function add()
    {
        $data['title'] = "Carmodel";
        return view('admin.carmodel.add',$data);
    }
    public function edit(Request $request, $id)
    {
        $data['title'] = "Carmodel";
        $data ['carmodel'] = Carmodel::find($id);


        return view('admin.carmodel.edit',$data);
    }

    public function store(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [

                    'name' => 'required|string|max:255|unique:models',
                    // 'name_bn' => 'required|string|unique:models',
                    // 'status' => 'required',

                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $carmodel = new Carmodel;
                $carmodel->name = $request->name;
                $carmodel->name_bn = $request->name_bn;
                $carmodel->status = $request->status;
                // $carmodel->addd_by = Auth::user()->id;
                $carmodel->save();

                toast('Data added successfully !!','success');
                return redirect()->back();

            }



            public function update(Request $request, $id){
                //dd($request);
                $request->validate([
                    'name'         => 'required',
                    // 'name_bn'      => 'required',
                    // 'status'       => 'required',
                ]);

                $carmodel = Carmodel::find($id);
                $carmodel->name    = $request->name;
                $carmodel->name_bn = $request->name_bn;
                $carmodel->status  = $request->status;
                $carmodel->save();
                //dd($carmodel);

                toast('Data hasbeen updated successfully !!','success');
                return redirect()->route('admin.carmodel.list');

            }

    public function delete($id)
    {
        $carmodel = Carmodel::find($id);
        $carmodel->delete();
        return redirect()->route('admin.carmodel.list');
    }

}

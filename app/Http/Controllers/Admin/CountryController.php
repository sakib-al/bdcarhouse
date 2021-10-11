<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

use Validator;

use Illuminate\Http\Request;

class CountryController extends Controller
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
        $data['title'] = "Country";
        $data['country'] = Country::all();
        return view('admin.country.list',$data);
    }
    public function add()
    {
        $data['title'] = "Country";
        return view('admin.country.add',$data);
    }
    public function edit($id)
    {
        $data['title'] = "Country";
        $data ['country'] = Country::find($id);


        return view('admin.country.edit',$data);
    }

    public function store(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [

                    'name' => 'required|string|max:255|unique:countries',
                    'code' => 'required|string|max:10|unique:countries',
                    'status' => 'required',
                    
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $country = new Country;
                $country->name = $request->name;
                $country->code = $request->code;
                $country->status = $request->status;
                //$country->addd_by = Auth::user()->id;
                $country->save();
        
                toast('Data added successfully !!','success');
                return redirect()->route('admin.country.list');
        
            }



            public function update(Request $request, $id){
                //dd($request);
                $request->validate([
                    'name'        => 'required',
                    'code'        => 'required',
                    'status' => 'required',
                ]);
        
                $country = Country::find($id);
                $country->name = $request->name;
                $country->code = $request->code;
                $country->status = $request->status;
                $country->save();
                //dd($country);
        
                toast('Data hasbeen updated successfully !!','success');
                return redirect()->route('admin.country.list');
        
            }

    public function delete($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('admin.country.list');
    }

}

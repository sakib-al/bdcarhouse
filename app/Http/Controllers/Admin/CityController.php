<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Country;

use App\Models\City;

use Validator;

use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
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
    public function index()
    {
        $data['title'] = "City";
        $data['city'] = City::all();
        return view('admin.city.list',$data);
    }
    public function create()
    {
        $data['title'] = "City";
        $data ['country']=  Country::all();
        return view('admin.city.create',$data);
    }
    public function edit($id)
    {
        $data['title'] = "City";
        $data ['city'] = City::find($id);
        $data ['country']=  Country::all();
        //dd($data);
        return view('admin.city.edit',$data);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:255|unique:cities',
                    'code' => 'required|string|max:5|unique:cities',
                    'country_id' => 'required',
                    'status' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

        $city = new City;
        $city->name = $request->name;
        $city->code = $request->code;
        $city->country_id = $request->country_id;
        $city->status = $request->status;
        $city->save();

        toast('Data added successfully !!','success');
        return redirect()->route('admin.city.index');

    }



    public function update(Request $request, $id){
        //dd($request);

        $request->validate([
            'name'     => 'required',
            'code'     => 'required',
            'country_id'     => 'required',
            'status' => 'required'
        ]);

        $city = City::find($id);
        $city->name = $request->name;
        $city->code = $request->code;
        $city->country_id = $request->country_id;
        $city->status = $request->status;

        $city->save();
        //dd($city);

        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('admin.city.index');

    }


    public function delete($id)
    {
        $delete_row = City::find($id);
        //dd($delete_row);
        if (!is_null($delete_row)) {
            $delete_row->delete();
        }

        toast('Data has deleted City !!','success');
        return back();

    }

}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\UserInfo;
use Illuminate\Http\Request;



class ContactInfoController extends Controller
{

    public function index()
    {
        $user_info = UserInfo::all();

        return view('admin.contact_info.user_info')->withInfo($user_info);
    }

    public function store(Request $request){

        $user_info = new UserInfo;
        $user_info->name    = $request->name;
        $user_info->email   = $request->email;
        $user_info->phone   = $request->phone;
        $user_info->details = $request->message;

        $user_info->save();

        toast('Your Information Submit !!','success');
        return redirect()->back();
            }


            public function delete($id)
            {
                $parts = UserInfo::find($id);
                $parts->delete();

                toast('Data hasbeen Delete successfully !!','success');
                return redirect()->route('user_contact.index');
            }

}

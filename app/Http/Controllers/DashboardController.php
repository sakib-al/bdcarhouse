<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
class DashboardController extends Controller
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
        $data['total_product']  = Product::count();
        $data['total_category'] = Category::count();
        $data['total_brand']    = Brand::count();
        $data['total_user']     = User::count();
        return view('admin.dashboard',$data);
    }
    public function profile($id)
    {

        $user = User::find($id);
        return view('admin.user_profile')->withUser($user);
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->address   = $request->address;
        $user->phone     = $request->phone;
        $user->save();

        $data['total_product']  = Product::count();
        $data['total_category'] = Category::count();
        $data['total_brand']    = Brand::count();
        $data['total_user']     = User::count();
        toast('Data hasbeen updated successfully !!','success');
        return view('admin.dashboard',$data)->withUser($user);
    }
    public function pass_update(Request $request){
        if (Hash::check($request->current_password, Auth::User()->password))
        {
            if($request->new_password == $request->confirm_password)
            {
                $user = User::where('id', '=', $request->id)->first();
                $user->password = bcrypt($request->new_password);
                $user->save();
                $data['total_product']  = Product::count();
                $data['total_category'] = Category::count();
                $data['total_brand']    = Brand::count();
                $data['total_user']     = User::count();
                toast('Password has been updated successfully !!','success');
                return view('admin.dashboard',$data)->withUser($user);
            }
        }
    }

    // Users Panel List

    public function user_index(){

        $users = User::all();
        return view('admin.user.index')->withUsers($users);
    }

    public function create(){

        return view('admin.user.create');
    }

    public function store(Request $request){


        $request->validate([
            'name'            => 'required',
            'email'         => 'required',
            'address'          => 'required',
            'phone_no'          => 'required',
            'password'          => 'required',
        ]);



        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone_no;
        $user->password = bcrypt($request->password);
        $user->role     = $request->user_type;


        if ($request->file('images')) {

            foreach ($request->file('images') as $key => $image) {
                   $file_name = 'user_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                   $user->image = $file_name;
                   $image->move(public_path() . '/image/', $file_name);
                }
            }
            $user->save();
            return redirect()->route('users.list');
    }

    public function user_edit(Request $request, $id)
    {

        $user = User::find($id);
        //dd($data);

        return view('admin.user.edit')->withUser($user);
    }

    public function update_users(Request $request)
    {
        // $request->validate([
        //     'name'            => 'required',
        //     'email'         => 'required',
        //     'address'          => 'required',
        //     'phone_no'          => 'required',
        //     'password'          => 'required',
        // ]);

        $user = User::find($request->id);
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->address   = $request->address;
        $user->phone     = $request->phone_no;
        if ($request->password != '') {

            $user->password  = bcrypt($request->password);
        }

        if ($request->file('images')) {



            foreach ($request->file('images') as $key => $image) {
                $file_name = 'user_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $user->image = $file_name;
                $image->move(public_path() . '/image/', $file_name);
            }
        }

        $user->save();
        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('users.list');
    }

    public function user_delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.list');
    }

    public function getDeleteImage($id)
    {

        $user = User::find($id);
        $user->image    = null;
        $user->save();
        if ($user) {
            return ['status' => 'true'];
        } else {
            return false;
        }
    }

}

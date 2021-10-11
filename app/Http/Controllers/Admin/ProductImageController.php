<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\ProductImage;

use Validator;

use Illuminate\Http\Request;

class ProductImageController extends Controller
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
        $image = ProductImage::all();
        return view('admin.product_image.list')->with('product_image',$image);
    }
    public function add()
    {
        return view('admin.product_image.add');
    }
    public function edit($id)
    {
        $image = ProductImage::find($id);
        return view('admin.product_image.edit',compact('image'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'product_id' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()
                                ->back()
                                ->withErrors($validator)
                                ->withInput();
                }

                $image = new ProductImage;

                $image->name = $request->name;
                $image->product_id = $request->product_id;
                $image->save();


        return redirect()->route('product_image.list');

    }



    public function update(Request $request){

        $validator = Validator::make($request->all(), [
                    'id' => 'required',
                    'name' => 'required',
                    'product_id' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()
                                ->back()
                                ->withErrors($validator)
                                ->withInput();
                }

                $image = ProductImage::find($request->id);

                $image->name = $request->name;
                $image->product_id = $request->product_id;
                $image->update();


        return redirect()->route('product_image.list');

    }




  public function delete($id)
    {
        $image = ProductImage::find($id);
        $image->delete();
        return redirect()->route('product_image.list');
    }
}
 
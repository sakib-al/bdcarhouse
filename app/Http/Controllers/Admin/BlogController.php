<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;


class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $data['title'] = "Blog";
        $data['blog'] = Blog::all();
        return view('admin.blog.list',$data);
    }

    public function add()
    {
        $data['title'] = "blog";
        return view('admin.blog.add',$data);
    }
    public function edit(Request $request, $id)
    {
        $data['title'] = "Blog";
        $data ['blog'] = Blog::find($id);
        //dd($data);

        return view('admin.blog.edit',$data);
    }

    public function store(Request $request){



        $validator = Validator::make($request->all(), [

                    'title' => 'required|string|max:255|unique:blogs',
                    // 'description' => 'required|string|unique:blogs',




                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }


                $blog                = new Blog;
                $blog->title         = $request->title;
                $blog->description   = $request->summernote;


                $blog->save();


                if ($request->file('images')) {

                 foreach ($request->file('images') as $key => $image) {
                        $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                        $blog->image = $file_name;
                        $blog->save();
                        $image->move(public_path() . '/image/', $file_name);
                    }
                }


                toast('Data added successfully !!','success');
                return redirect()->route('admin.blog.list');
    }


    public function update(Request $request, $id){
        //dd($request);
        $request->validate([
            'title'         => 'required',
            // 'description'      => 'required',

        ]);

        $blog = Blog::find($id);
        $blog->title    = $request->title;
        $blog->description = $request->summernote;
        $blog->image    = $request->image;
        $blog->save();
        //dd($blog);


        if ($request->file('images')) {



            foreach ($request->file('images') as $key => $image) {
                   $file_name = 'prod_' . date('dmY') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                   $blog->image = $file_name;
                   $blog->save();
                   $image->move(public_path() . '/image/', $file_name);
               }
           }

        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('admin.blog.list');

    }

public function delete($id)
{
$blog = Blog::find($id);
$blog->delete();
return redirect()->route('admin.blog.list');
}

public function getDeleteImage($id)
{
$blog = Blog::find($id);
$blog->image    = null;
$blog->save();
if ($blog) {
    return ['status' => 'true'];
} else {
    return false;
}
}


}

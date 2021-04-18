<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::latest()->paginate(50);
        return view('backend.photo.index',[
            'data' => $photo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $articles = Article::all();
        return view('backend.photo.create',[
            'products' => $products,
            'articles' => $articles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'product_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'type.required' => 'Bạn chưa chọn loại ảnh',
            'product_id.required' => 'Bạn chưa chọn sản phẩm',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $description  = $request->input('description');
        $product_id  = $request->input('product_id');
        $position  = $request->input('position');
        $target = $request->input('target');
        $type = $request->input('type');
        $url = $request->input('url');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/photos/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }
        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $photo = new Photo();
        $photo->title = $title;
        $photo->slug = $slug;
        $photo->description = $description;
        $photo->product_id = $product_id;
        $photo->position = $position;
        $photo->target = $target;
        $photo->type = $type;
        $photo->url = $url;
        $photo->is_active = $is_active;
        $photo->image = $path_image;
        $photo->save();
        // chuyen dieu huong trang
        return redirect()->route('admin.photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::all();
        $articles = Article::all();
        $data = Photo::findOrFail($id);
        return view('backend.photo.edit',[
            'products' => $products,
            'articles' => $articles,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'product_id' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'type.required' => 'Bạn chưa chọn loại ảnh',
            'product_id.required' => 'Bạn chưa chọn sản phẩm',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $description  = $request->input('description');
        $product_id  = $request->input('product_id');
        $position  = $request->input('position');
        $target = $request->input('target');
        $type = $request->input('type');
        $url = $request->input('url');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $photo = Photo::find($id);
        $photo->title = $title;
        $photo->slug = $slug;
        $photo->description = $description;
        $photo->product_id = $product_id;
        $photo->position = $position;
        $photo->target = $target;
        $photo->type = $type;
        $photo->url = $url;
        $photo->is_active = $is_active;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/photos/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $photo->image = $path_image;
        }

        $photo->save();
        // chuyen dieu huong trang
        return redirect()->route('admin.photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Photo::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

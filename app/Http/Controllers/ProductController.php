<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(30);
        return view('backend.product.index',[
            'data' =>  $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
//        $brands = Brand::all();
//        $vendors = Vendor::all();
//        $max_position = Product::max('position');

        return view('backend.product.create' ,[
            'categories' => $categories,
//            'brands' => $brands,
//            'vendors' => $vendors,
//            'max_position' => $max_position
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
            'name' => 'required|max:255',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $name  = $request->input('name');
        $slug = str_slug($name,'-');
        $category_id  = (int)$request->input('category_id');
        $departure_day  = $request->input('departure_day');
        $price  = $request->input('price');
        $sale  = $request->input('sale');
        $position  = $request->input('position');
        $duration  = $request->input('duration');
        $vehicle  = $request->input('vehicle');
        $url  = $request->input('url');
        $summary  = $request->input('summary');
        $description  = $request->input('description');


        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/product/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }
        $is_hot = 0; // default
        if ($request->has('is_hot')) {
            $is_hot = (int)$request->input('$is_hot');
        }

        $product = new Product();
        $product->name = $name;
        $product->category_id = $category_id;
        $product->departure_day = $departure_day;
        $product->price = $price;
        $product->sale = $sale;
        $product->position = $position;
        $product->url = $url;
        $product->summary = $summary;
        $product->description = $description;
        $product->slug = $slug;
        $product->is_active = $is_active;
        $product->duration = $duration;
        $product->vehicle = $vehicle;
        $product->image = $path_image;
        $product->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.product.index');
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
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend.product.edit', [
            'data' => $product
        ],[
            'categories' => $categories
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
            'name' => 'required|max:255',

            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $name  = $request->input('name');
        $slug = str_slug($name,'-');
        $category_id  = (int)$request->input('category_id');
        $departure_day  = $request->input('departure_day');
        $price  = $request->input('price');
        $sale  = $request->input('sale');
        $position  = $request->input('position');
        $duration  = $request->input('duration');
        $vehicle  = $request->input('vehicle');
        $url  = $request->input('url');
        $summary  = $request->input('summary');
        $description  = $request->input('description');


        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }


        $product = Product::find($id);
        $product->name = $name;
        $product->category_id = $category_id;
        $product->departure_day = $departure_day;
        $product->price = $price;
        $product->sale = $sale;
        $product->position = $position;
        $product->url = $url;
        $product->summary = $summary;
        $product->description = $description;
        $product->slug = $slug;
        $product->is_active = $is_active;
        $product->duration = $duration;
        $product->vehicle = $vehicle;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/product/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $product->image = $path_image;
        }
        $product->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Product::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

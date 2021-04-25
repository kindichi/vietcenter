<?php

namespace App\Http\Controllers;

use App\Tour;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest()->paginate(30);
        return view('backend.tour.index',[
            'data' =>  $tours
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
        $categoryParent_id = Category::where(['parent_id' => 0])->get();
        $categories = Category::where(['type' => 1, 'position' => 2])->get();

        return view('backend.tour.create' ,[
            'categories' => $categories,
            'categoryParent_id' => $categoryParent_id

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
        $categoryParent_id  = (int)$request->input('categoryParent_id');
        $departure_day  = $request->input('departure_day');
        $price  = $request->input('price');
        $sale  = $request->input('sale');
        $position  = $request->input('position');
        $duration  = $request->input('duration');
        $vehicle  = $request->input('vehicle');
        $location  = $request->input('location');
        $url  = $request->input('url');
        $schedule  = $request->input('schedule');
        $description  = $request->input('description');
        $rule  = $request->input('rule');


        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/tour/';
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

        $tour = new Tour();
        $tour->name = $name;
        $tour->category_id = $category_id;
        $tour->categoryParent_id = $categoryParent_id;
        $tour->departure_day = $departure_day;
        $tour->price = $price;
        $tour->sale = $sale;
        $tour->position = $position;
        $tour->url = $url;
        $tour->schedule = $schedule;
        $tour->description = $description;
        $tour->slug = $slug;
        $tour->is_active = $is_active;
        $tour->is_hot = $is_hot;
        $tour->duration = $duration;
        $tour->vehicle = $vehicle;
        $tour->location = $location;
        $tour->image = $path_image;
        $tour->rule = $rule;
        $tour->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.tour.index');
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
        $tour = Tour::find($id);
        $categoryParent_id = Category::where(['parent_id' => 0])->get();
        $categories = Category::where(['type' => 1, 'position' => 2])->get();

        return view('backend.tour.edit' ,[
            'data' => $tour,
            'categories' => $categories,
            'categoryParent_id' => $categoryParent_id
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
        $categoryParent_id  = (int)$request->input('categoryParent_id');
        $departure_day  = $request->input('departure_day');
        $price  = $request->input('price');
        $sale  = $request->input('sale');
        $position  = $request->input('position');
        $duration  = $request->input('duration');
        $vehicle  = $request->input('vehicle');
        $location  = $request->input('location');
        $url  = $request->input('url');
        $schedule  = $request->input('schedule');
        $description  = $request->input('description');
        $rule  = $request->input('rule');


        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }
        $is_hot = 0; // default
        if ($request->has('is_hot')) {
            $is_hot = (int)$request->input('is_hot');
        }

        $tour = Tour::find($id);
        $tour->name = $name;
        $tour->category_id = $category_id;
        $tour->categoryParent_id = $categoryParent_id;
        $tour->departure_day = $departure_day;
        $tour->price = $price;
        $tour->sale = $sale;
        $tour->position = $position;
        $tour->url = $url;
        $tour->schedule = $schedule;
        $tour->description = $description;
        $tour->slug = $slug;
        $tour->is_active = $is_active;
        $tour->is_hot = $is_hot;
        $tour->duration = $duration;
        $tour->vehicle = $vehicle;
        $tour->location = $location;
        $tour->rule = $rule;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/tour/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $tour->image = $path_image;
        }
        $tour->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Tour::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

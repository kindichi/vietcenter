<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Review;
use App\Tour;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::latest()->paginate(30);
        return view('backend.review.index',[
            'data' =>  $review
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::all();

        return view('backend.review.create',[
            'tours' => $tours
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
            'title' => 'required',
            'name' => 'required',
            'address' => 'required',
            'summary' => 'required',
            'description' => 'required',
            'avatar' => 'mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'name.required' => 'Bạn chưa nhập tên người đánh giá',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'description.email' => 'Bạn chưa nhập mô tả',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn',
            'image.mines' => 'File ảnh chưa đúng định dạng',
            'image.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $name  = $request->input('name');
        $address  = $request->input('address');
        $slug = str_slug($title,'-');
        $summary  = $request->input('summary');
        $description  = $request->input('description');
        $tour_id  = $request->input('tour_id');
        $position  = $request->input('position');

        $path_avatar = '';
        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/review/';
            // upload file
            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
        }
        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/review/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }
        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $review = new Review();
        $review->title = $title;
        $review->slug = $slug;
        $review->name = $name;
        $review->address = $address;
        $review->summary = $summary;
        $review->description = $description;
        $review->position = $position;
        $review->tour_id = $tour_id;
        $review->slug = $slug;
        $review->is_active = $is_active;
        $review->avatar = $path_avatar;
        $review->image = $path_image;
        $review->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.review.index');
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
        $data = Review::find($id);
        $tours = Tour::all();

        return view('backend.review.edit',[
            'data' => $data,
            'tours' => $tours
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
            'title' => 'required',
            'name' => 'required',
            'address' => 'required',
            'summary' => 'required',
            'description' => 'required',
            'avatar' => 'mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'name.required' => 'Bạn chưa nhập tên người đánh giá',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'description.email' => 'Bạn chưa nhập mô tả',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn',
            'image.mines' => 'File ảnh chưa đúng định dạng',
            'image.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $name  = $request->input('name');
        $address  = $request->input('address');
        $slug = str_slug($title,'-');
        $summary  = $request->input('summary');
        $description  = $request->input('description');
        $tour_id  = $request->input('tour_id');
        $position  = $request->input('position');



        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $review = Review::find($id);
        $review->title = $title;
        $review->slug = $slug;
        $review->name = $name;
        $review->address = $address;
        $review->summary = $summary;
        $review->description = $description;
        $review->position = $position;
        $review->tour_id = $tour_id;
        $review->slug = $slug;
        $review->is_active = $is_active;
        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/review/';
            // upload file
            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
            $review->avatar = $path_avatar;
        }
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/review/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $review->image = $path_image;
        }

        $review->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Review::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

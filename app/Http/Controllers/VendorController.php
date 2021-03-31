<?php

namespace App\Http\Controllers;

use App\User;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::latest()->paginate(5);
        return view('backend.vendor.index',[
            'data' => $vendor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor.create');
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
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'website' => 'required',
            'address' => 'required',
            'position' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'website.required' => 'Bạn chưa nhập website',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'position.required' => 'Bạn chưa chọn vị trí hiển thị',
            'image.mines' => 'File ảnh chưa đúng định dạng',
            'image.max' => 'Kích thước file quá lớn'
        ]);

        $name  = $request->input('name');
        $phone  = (int)$request->input('phone');
        $email = $request->input('email');
        $website = $request->input('website');
        $address = $request->input('address');
        $position = $request->input('position');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/vendor/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $vendor->name = $name;
        $vendor->phone = $phone;
        $vendor->email = $email;
        $vendor->website = $website;
        $vendor->position = $position;
        $vendor->address = $address;
        $vendor->is_active = $is_active;
        $vendor->image = $path_image;


        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/vendor/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $vendor->image = $path_image;
        }
        $vendor->save();
        // chuyen dieu huong trang
        return redirect()->route('admin.vendor.index');
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
        $vendor = Vendor::find($id);

        return view('backend.vendor.edit', [
            'data' => $vendor
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
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'website' => 'required',
            'address' => 'required',
            'position' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'website.required' => 'Bạn chưa nhập website',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'position.required' => 'Bạn chưa chọn vị trí hiển thị',
        ]);

        $name  = $request->input('name');
        $phone  = (int)$request->input('phone');
        $email = $request->input('email');
        $website = $request->input('website');
        $address = $request->input('address');
        $position = $request->input('position');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int) $request->input('is_active');
        }

        $vendor = Vendor::find($id); // đ/n 1 đối tượng mới cụ thể từ 1 lớp.
        $vendor->name = $name;
        $vendor->phone = $phone;
        $vendor->email = $email;
        $vendor->website = $website;
        $vendor->position = $position;
        $vendor->address = $address;
        $vendor->is_active = $is_active;

        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/vendor/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $vendor->image = $path_image;
        }

        $vendor->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

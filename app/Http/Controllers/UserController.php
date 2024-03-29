<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('backend.user.index',[
            'data' => $users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
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
            'role_id' => 'required|integer',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'role_id.integer' => 'Bạn chưa phân quyền',
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Tối thiểu 6 ký tự',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $name  = $request->input('name');
        $role_id  = (int)$request->input('role_id');
        $email = $request->input('email');
        $pwd = $request->input('password');

        $path_avatar = '';
        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/user/';
            // upload file
            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
        }

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $user = new User(); // đ/n 1 đối tượng mới cụ thể từ 1 lớp.
        $user->name = $name;
        $user->role_id = $role_id;
        $user->email = $email;
        $user->password = bcrypt($pwd);
        $user->is_active = $is_active;
        $user->avatar = $path_avatar;
        $user->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.user.index');

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
        //$user = User::findOrFail($id); // Tìm kiếm nhưng mà không thấy thì trả về message lỗi
        $user = User::find($id);

        return view('backend.user.edit', [
            'data' => $user
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
        // Kiểm tính đúng đắn của dữ liệu
        $request->validate([
            'role_id' => 'required|integer',
            'name' => 'required|max:255',
            'email' => 'required|email'
            //'password' => 'required|min:6',
            //'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        $name  = $request->input('name');
        $role_id  = (int) $request->input('role_id');
        $email = $request->input('email');
        $pwd = $request->input('password');



        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int) $request->input('is_active');
        }

        $user = User::find($id); // đ/n 1 đối tượng mới cụ thể từ 1 lớp.
        $user->name = $name;
        $user->role_id = $role_id;
        $user->email = $email;
        if (!empty($pwd)) {
            $user->password = bcrypt($pwd);
        }
        $user->is_active = $is_active;

        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/user/';
            // upload file
            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
            $user->avatar = $path_avatar;
        }

        $user->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = User::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

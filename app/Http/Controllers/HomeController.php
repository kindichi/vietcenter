<?php

namespace App\Http\Controllers;
use App\Article;
use App\Banner;
use App\Brand;
use App\Category;
use App\Contact;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('frontend.home.index');
    }

    public function contact()
    {
        return view('frontend.home.contact');
    }

    public function postContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'title' => 'required',
            'content' => 'required',

        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'email.required' => 'Bạn chưa nhập email',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'title.required' => 'Bạn chưa nhập yêu cầu',
            'content.required' => 'Bạn chưa nhập nội dung',
        ]);

        $name  = $request->input('name');
        $phone  = $request->input('phone');
        $email  = $request->input('email');
        $address  = $request->input('address');
        $title  = $request->input('title');
        $content  = $request->input('content');


        $contact = new Contact();
        $contact->name = $name;
        $contact->phone = $phone;
        $contact->email = $email;
        $contact->address = $address;
        $contact->title = $title ;
        $contact->content = $content;

        $contact->save();

        // chuyen dieu huong trang
        return redirect()->route('home.contact')->with('msg', 'Bạn đã gửi tin nhắn thành công');
    }
}

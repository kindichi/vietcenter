<?php

namespace App\Http\Controllers;

use App\Booktour;
use App\Customer;
use App\Tour;
use Illuminate\Http\Request;

class BooktourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookTour = Booktour::latest()->paginate(20);
        return view('backend.booktour.index',[
            'data' =>  $bookTour
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $tours = Tour::all();
        $data = Booktour::find($id);
        return view('backend.booktour.edit',[
            'data' => $data,
            'tours' =>  $tours
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'email.required' => 'Bạn chưa nhập email',
            'address.required' => 'Bạn chưa nhập địa chỉ'
        ]);

        $name  = $request->input('name');
        $phone  = $request->input('phone');
        $email  = $request->input('email');
        $address  = $request->input('address');
        $date  = $request->input('date');
        $amount  = $request->input('amount');
        $tour_id  = $request->input('tour_id');
        $moreInfo  = $request->input('moreInfo');

        $booktour = Booktour::find($id);
        $booktour->name = $name;
        $booktour->phone = $phone;
        $booktour->email = $email;
        $booktour->address = $address;
        $booktour->date = $date;
        $booktour->amount = $amount;
        $booktour->tour_id = $tour_id;
        $booktour->moreInfo = $moreInfo;


        $booktour->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.booktour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Booktour::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

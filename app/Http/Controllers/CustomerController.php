<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Booktour;
use App\Category;
use App\Customer;
use App\Tour;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(20);
        $tours = Tour::all();
        $bookTours = Booktour::all();
        return view('backend.customer.index',[
            'data' =>  $customers,
            'tours' =>  $tours,
            'bookTours' =>  $bookTours,
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
        $bookTours = Booktour::all();

        return view('backend.customer.create',[
            'tours' => $tours,
            'bookTours' => $bookTours
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
        'name' => 'required',
        'dateStart' => 'required',
        'dateEnd' => 'required',
        'amount' => 'required',
        'tour_id' => 'required',
    ],[
        'name.required' => 'Bạn chưa nhập họ tên',
    ]);

        $name  = $request->input('name');
        $bookTours = Booktour::where([['name','=',$name]])->first();
        $phone  = $bookTours->phone;
        $email  = $bookTours->email;
        $address  = $bookTours->address;
        $dateStart  = $request->input('dateStart');
        $dateEnd  = $request->input('dateEnd');
        $amount  = $request->input('amount');
        $tour_id  = $request->input('tour_id');
        $note  = $request->input('note');


        $customer = new Customer();
        $customer->name = $name;
        $customer->phone = $phone;
        $customer->email = $email;
        $customer->address = $address;
        $customer->dateStart = $dateStart;
        $customer->dateEnd = $dateEnd;
        $customer->amount = $amount;
        $customer->tour_id = $tour_id;
        $customer->note = $note;

        $customer->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.customer.index');
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
        $data = Customer::find($id);
        $bookTours = Booktour::all();
        return view('backend.customer.edit',[
            'data' => $data,
            'tours' =>  $tours,
            'bookTours' =>  $bookTours,
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
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'amount' => 'required',
            'tour_id' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
        ]);

        $name  = $request->input('name');
        $bookTours = Booktour::where([['name','=',$name]])->first();
        $phone  = $bookTours->phone;
        $email  = $bookTours->email;
        $address  = $bookTours->address;
        $dateStart  = $request->input('dateStart');
        $dateEnd  = $request->input('dateEnd');
        $amount  = $request->input('amount');
        $tour_id  = $request->input('tour_id');
        $note  = $request->input('note');


        $customer = Customer::find($id);
        $customer->name = $name;
        $customer->phone = $phone;
        $customer->email = $email;
        $customer->address = $address;
        $customer->dateStart = $dateStart;
        $customer->dateEnd = $dateEnd;
        $customer->amount = $amount;
        $customer->tour_id = $tour_id;
        $customer->note = $note;

        $customer->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Customer::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}

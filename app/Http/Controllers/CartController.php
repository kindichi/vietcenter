<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Booktour;
use App\Tour;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Exception;

class CartController extends GeneralController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // b1. lấy toàn bộ sản phẩm đã lưu trong giỏ
        $listTours = Cart::content();

        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::total(0,",",".");

        return view('frontend.cart.index', [
            'cart' => $listTours,
            'totalPrice' => $totalPrice
        ]);
    }

    public function addToCart($id, $qty = 1)
    {
       $tour = Tour::findOrFail($id);

        // thông tin sẽ lưu vào giỏ
        $cartInfo = [
            'id' => $tour->id,
            'name' => $tour->name,
            'qty' => $qty,
            'price' => $tour->sale,
            'options' => [
                'image' => $tour->image,
                // ....
            ]
        ];

        // gọi đến thư viện thêm sản phẩm vào giỏ hàng
        Cart::add($cartInfo);

        session(['totalItem' => Cart::count()]);

        // chuyển về trang danh sách sản phảm trong giỏ hàng
        return redirect()->route('home.cart');
    }

//Xóa sản phảm khỏi giỏ hàng

    public function removeToCart($rowId)
    {
        // xóa sản phẩm trong giỏ
        Cart::remove($rowId);

        $listTours = Cart::content();
        $totalPrice = Cart::total(0,",","."); // lấy tổng giá của sản phẩm

        return view('frontend.components.cart', [
            'cart' => $listTours,
            'totalPrice' => $totalPrice
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
        //
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
        //
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

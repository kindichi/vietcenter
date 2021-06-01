<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $tours; // danh sách sản phẩm
    public $totalPrice = 0; // tông giá
    public $totalQty = 0; // tổng sô SP
    public $discount = 0; // giá giảm
    public $coupon; // Mã giảm giá

    public function __construct($cart)
    {
        parent::__construct();

        if ($cart) {
            $this->tours = $cart->tours;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
            $this->discount = $cart->discount;
            $this->coupon = $cart->coupon;
        }
    }

    // Thêm sản phẩm vào giỏ hàng
    public function add($tour)
    {

        $_item = [
            'qty' => 0,
            'price' => $tour->sale,
            'item' => $tour
        ];

        // check xem cùng sản phẩm được mua không
        if ($this->tours && array_key_exists($tour->id, $this->tours)) {
            $_item = $this->tours[$tour->id];
        }

        $_item['qty']++;
        $_item['price'] = $_item['qty'] * $tour->sale;

        $this->tours[$tour->id] = $_item;
        $this->totalPrice = $this->totalPrice + $tour->sale;
        $this->totalQty = $this->totalQty + 1; // tăng lên 1 sản phẩm
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function remove($id)
    {
        // trừ bớt số lượng
        $this->totalQty = $this->totalQty - $this->tours[$id]['qty'];
        // trừ giá
        $this->totalPrice = $this->totalPrice - $this->tours[$id]['price'];

        unset($this->tours[$id]);

    }

    // Cập nhật số lượng cho sản phẩm trong giỏ hàng
    public function store($id , $qty)
    {
        // Xóa số lượng + giá của thằng hiện tại để cập nhật lại
        $this->totalQty = $this->totalQty - $this->tours[$id]['qty'];
        $this->totalPrice = $this->totalPrice - $this->tours[$id]['price'];

        // Cập nhật số lượng && giá của sẩn phẩm
        $this->tours[$id]['qty'] = $qty;
        $this->tours[$id]['price'] = $qty * $this->tours[$id]['item']->sale;

        // cập nhật tổng số lương và tổng giá của tất sản phẩm trong giỏ
        $this->totalQty = $this->totalQty + $this->tours[$id]['qty'];
        $this->totalPrice = $this->totalPrice + $this->tours[$id]['price'];
    }
}


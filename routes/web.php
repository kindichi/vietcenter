<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/danh-sach-tour/{slug}', 'HomeController@toursList')->name('home.toursList');
Route::get('/chi-tiet-tour/{slug}', 'HomeController@detailTour')->name('home.tourDetail');
Route::get('/dat-tour/{slug}', 'HomeController@bookTour')->name('home.bookTour');
Route::post('/dat-tour/{slug}', 'HomeController@postBookTour')->name('home.postBookTour');
Route::get('/tin-tuc', 'HomeController@allNews')->name('home.news');
Route::get('/tin-tuc/{slug}', 'HomeController@newsList')->name('home.newsList');
Route::get('/chi-tiet/{slug}', 'HomeController@newsDetail')->name('home.newsDetail');
Route::get('/dich-vu', 'HomeController@services')->name('home.services');
Route::get('/dich-vu/{slug}', 'HomeController@serviceDetail')->name('home.serviceDetail');
Route::get('/lien-he', 'HomeController@contact')->name('home.contact');
Route::post('/lien-he', 'HomeController@postContact')->name('home.postContact');
Route::get('/gioi-thieu', 'HomeController@introduce')->name('home.introduce');
Route::get('/doi-tac', 'HomeController@partner')->name('home.partner');
Route::get('/lich-khoi-hanh', 'HomeController@departureSchedule')->name('home.departureSchedule');
Route::post('/', 'HomeController@promotion')->name('home.promotion');
Route::get('/thong-tin/{slug}', 'HomeController@info')->name('home.info');
Route::get('/thong-tin-chi-tiet/{slug}', 'HomeController@infoDetail')->name('home.infoDetail');
Route::get('/cam-nhan-khach-hang/{slug}', 'HomeController@reviewDetail')->name('home.reviewDetail');
Route::get('/tim-kiem', 'HomeController@search')->name('home.search');
Route::get('/admin', 'AdminController@login')->name('admin.index');
Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
// Danh sách sản phẩm trong giỏ hàng
Route::get('/gio-hang', 'CartController@index')->name('home.cart');
// Thêm sản phẩm vào giỏ hàng
Route::get('/gio-hang/them-vao-gio-hang/{tour_id}', 'CartController@addToCart')->name('home.cart.add-to-cart');
// Xóa SP khỏi giỏ hàng
Route::get('/gio-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('home.cart.remove-to-cart');
// Cập nhật giỏ hàng
Route::get('/gio-hang/cap-nhat-so-luong-sp', 'CartController@updateToCart')->name('home.cart.update-to-cart');
// Hủy đơn đặt hàng
Route::get('/gio-hang/huy-don-hang', 'CartController@destroy')->name('home.cart.destroy');

Route::get('/dat-hang', 'CartController@order')->name('home.cart.order');

Route::post('/dat-hang', 'CartController@postOrder')->name('home.cart.postOrder');

Route::get('/dat-hang/hoan-tat-dat-hang', 'CartController@completedOrder')->name('home.cart.completedOrder');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'checkLogin'],function (){
    Route::resource('default', 'DefaultController');
    Route::resource('category', 'CategoryController');
    Route::resource('photo', 'PhotoController');
    Route::resource('vendor', 'VendorController');
    Route::resource('user', 'UserController');
    Route::resource('tour', 'TourController');
    Route::resource('article', 'ArticleController');
    Route::resource('banner', 'BannerController');
    Route::resource('customer', 'CustomerController');
    Route::resource('booktour', 'BooktourController');
    Route::resource('order', 'OrderController');
    Route::resource('contact', 'ContactController');
    Route::resource('setting', 'SettingController');
    Route::resource('schedule', 'ScheduleController');
    Route::resource('review', 'ReviewController');
    Route::resource('promotion', 'PromotionController');
});


?>

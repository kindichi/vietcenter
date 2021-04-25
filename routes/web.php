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
Route::get('/tour/{slug}', 'HomeController@getToursByCategory')->name('home.toursList');
Route::get('/chi-tiet-tour/{slug}', 'HomeController@detailTour')->name('home.tourDetail');
Route::get('/tour-hot-nhat', 'HomeController@hotTours')->name('home.hotTours');
Route::get('/dat-tour/{slug}', 'HomeController@bookTour')->name('home.bookTour');
Route::get('/dat-tour/{slug}', 'HomeController@postBookTour')->name('home.postBookTour');

Route::get('/tin-tuc', 'HomeController@news')->name('home.news');
Route::get('/tin-tuc/{slug}', 'HomeController@newsList')->name('home.newsList');
Route::get('/lien-he', 'HomeController@contact')->name('home.contact');
Route::post('/lien-he', 'HomeController@postContact')->name('home.postContact');
Route::get('/admin', 'AdminController@login')->name('admin.index');
Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

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
    Route::resource('contact', 'ContactController');
    Route::resource('setting', 'SettingController');
    Route::resource('schedule', 'ScheduleController');
    Route::resource('review', 'ReviewController');
});


?>

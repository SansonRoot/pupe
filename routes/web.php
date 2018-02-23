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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'hotel','middleware'=>'web'],function(){

    Route::get('/login','Hotel\Auth\LoginController@showLogin')->name('hotel.login');
    Route::get('/register/{id}','Hotel\Auth\RegisterController@showRegister')->name('hotel.register');
    Route::get('/token','Hotel\Auth\RegisterController@showToken')->name('hotel.token');


    Route::get('/','Hotel\HotelController@index');
    Route::get('/dashboard','Hotel\HotelController@index')->name('hotel.dashboard');
    Route::get('/rooms','Hotel\HotelController@getRooms')->name('hotel.rooms');
    Route::get('/facilities','Hotel\HotelController@getFacilities')->name('hotel.facilities');
    Route::get('/bookings','Hotel\HotelController@getBookings')->name('hotel.bookings');
    Route::get('/settings','Hotel\HotelController@getSettings')->name('hotel.settings');

    Route::get('/edit/{field}/{data}','Hotel\HotelController@updateHotel');

    Route::post('/token','Hotel\Auth\RegisterController@verify')->name('hotel.token');
    Route::post('/register','Hotel\Auth\RegisterController@register')->name('hotel.register');
    Route::post('/login','Hotel\Auth\LoginController@login')->name('hotel.login');

});

Route::group(['prefix'=>'admin','middleware'=>'web'],function(){
    Route::get('/login','Admin\Auth\LoginController@showLogin')->name('admin.login');
    Route::get('/register','Admin\Auth\RegisterController@showRegister')->name('admin.register');

    Route::post('/login','Admin\Auth\LoginController@login')->name('admin.login');
    Route::post('/register','Admin\Auth\RegisterController@register')->name('admin.register');

    Route::get('/','Admin\AdminController@index');
    Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/hotels','Admin\AdminController@getHotels')->name('admin.hotels');
    Route::get('/users','Admin\AdminController@getUsers')->name('admin.users');

    Route::get('/hotels/new','Admin\AdminController@newHotelView')->name('admin.hotels.new');
    Route::get('/hotels/{id}/{state}','Admin\AdminController@activateHotel');

    Route::post('/hotels/new','Admin\AdminController@addHotel')->name('admin.hotels.new');



});
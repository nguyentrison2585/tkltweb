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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware('auth')->group(function () {

    //user
    Route::get('users', 'UserController@index');
    Route::get('users/add', 'UserController@create');
    Route::post('users/add', 'UserController@store');
    Route::get('users/{id}', 'UserController@edit');
    Route::post('users/{id}', 'UserController@update');
    Route::get('users/{id}/delete', 'UserController@destroy');

    //diem-toeic
    Route::get('diem-toeic', 'ToeicController@index');
    Route::get('diem-toeic/add', 'ToeicController@create');
    Route::post('diem-toeic/add', 'ToeicController@store');
    Route::get('diem-toeic/{id}', 'ToeicController@edit');
    Route::post('diem-toeic/{id}', 'ToeicController@update');
    Route::get('diem-toeic/{id}/delete', 'ToeicController@destroy');

    //diem-hoc-phan
    Route::get('diem-hoc-phan', 'DiemHocPhanController@index');
    Route::get('diem-hoc-phan/add', 'DiemHocPhanController@create');
    Route::post('diem-hoc-phan/add', 'DiemHocPhanController@store');
    Route::get('diem-hoc-phan/{id}', 'DiemHocPhanController@edit');
    Route::post('diem-hoc-phan/{id}', 'DiemHocPhanController@update');
    Route::get('diem-hoc-phan/{id}/delete', 'DiemHocPhanController@destroy');

    //hoc-phan
    Route::get('hoc-phan', 'HocPhanController@index');
    Route::get('hoc-phan/add', 'HocPhanController@create');
    Route::post('hoc-phan/add', 'HocPhanController@store');
    Route::get('hoc-phan/{id}', 'HocPhanController@edit');
    Route::post('hoc-phan/{id}', 'HocPhanController@update');
    Route::get('hoc-phan/{id}/delete', 'HocPhanController@destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('my-profile', 'UserController@my_profile');
    Route::get('change-password', 'UserController@change_password');
    Route::post('change-password', 'UserController@update_password');
    Route::get('bang-diem-hoc-phan', 'DiemHocPhanController@bang_diem_hoc_phan_sv');
    Route::get('ket-qua-thi-toeic', 'ToeicController@ket_qua_thi_toeic');
    Route::get('phan-hoi', 'PhanHoiController@index');
    Route::post('phan-hoi', 'PhanHoiController@store');
    Route::get('dang-ky-hoc-phan', 'DKHocPhanController@index_dang_ky_hoc_phan');
    Route::post('dang-ky-hoc-phan', 'DKHocPhanController@dang_ky_hoc_phan');
    Route::get('dang-ky-hoc-phan-tctd', 'DKHocPhanController@index_dang_ky_tctd');
    Route::post('dang-ky-hoc-phan-tctd', 'DKHocPhanController@dang_ky_tctd');
    Route::get('tra-cuu-tkb', 'ThoiKhoaBieuController@index');
});

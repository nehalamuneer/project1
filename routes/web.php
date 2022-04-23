<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

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
// Route::view('registrationpage','registration');

Route::view('registrationpage','registration');
// Route::post('registrationpage', function () {
//     return view('registration');
// });
Route::post('registrationpage',[MyController::class,'fnAddUser']);
Route::view('loginpage','login');
Route::post('loginpage',[MyController::class,'fnUserLogin']);
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('services', function () {
    return view('services');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});
Route::get('admin', function () {
    return view('adminpanel');
});
Route::get('userview', function () {
    return view('user');
});
Route::post('userlogin',[MyController::class,'fnGetUserDetails']);
Route::get('agency', function () {
    return view('agency');
});
Route::view('viewpackage','package');
// Route::post('packages', function () {
//     return view('package');
// });

Route::post('packagepage',[MyController::class,'fnaddPackage']);
// Route::post('hotelmanage', function () {
//     return view('hotelmanage');
// });
Route::view('viewhotel','hotelmanage');
Route::post('hotelview',[MyController::class,'fnaddhotel']);
Route::get('vehicle', function () {
    return view('vehicle');
});
Route::get('viewuser', function () {
    return view('viewuser');
});
Route::get('userbook', function () {
    return view('userbook');
});
Route::get('managebook', function () {
    return view('managebook');
});
Route::view('packageview','viewpack');
Route::post('packpage',[MyController::class,'fnDisplayPackage']);

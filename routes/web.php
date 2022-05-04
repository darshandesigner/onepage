<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

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

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');
Route::get('/contact',SingleActionController::class);
Route::resource('photo',PhotoController::class);


Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer',[CustomerController::class,'view']);

Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::get('/index',function(){

    return view('index');

});

Route::get('get-all-session',function(){

    $_SESSION = session()->all();
    p($_SESSION);

});

Route::get('set-session',function(Request $request){
    $request->session()->put('user_name','OhhoWeb');
    $request->session()->put('user_id','123');
    $request->session()->flash('status','Success');
    return redirect('get-all-session');

});

Route::get('destroy-session',function(){
    session()->forget(['user_name','user_id']);
    // session()->forget('user_name');
    // session()->forget('user_id');
    return redirect('get-all-session');

});


// Route::get('/customer',function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     // print_r($customers);
//     print_r($customers->toArray());

// });


//  start basic route

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

//  end basic route



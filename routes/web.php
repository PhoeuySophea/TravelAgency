<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});


Route::get(uri:"/example", action: function(){

    return"This is Wep!";
});


Route::get("/user/{id}/{name}", function($id,$name){
    $data['user_id']=$id;
    $data['user_name']=$name;

    return view('test-route',$data);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

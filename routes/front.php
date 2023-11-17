<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

Route::get('front-agency', function (){
    return view('front-agency');
});

Route::get('home', function (){
    return view('front-home');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/services',[FrontPageController::class,'services'])->name('front.services');
Route::get('/packages',[FrontPageController::class,'packages'])->name('front.packages');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/guides',[FrontPageController::class,'guides'])->name('front.guides');
Route::get('/testimonail',[FrontPageController::class,'testimonail'])->name('front.testimonail');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');
Route::get('/page',[FrontPageController::class,'page'])->name('front.page');


<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    $users = DB::table('users')->get();
    return view('home',compact('users'));
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('contact/submit','App\Http\Controllers\ContactController@submit')
    //return Request::all();//poluchayem dannie formayic
    //dd(Request::all());// talis e bolor tvyalner@ masivi tesqov
    ->name('nar');
Route::get('contact/data', 'App\Http\Controllers\ContactController@allData')->name('contact-data');

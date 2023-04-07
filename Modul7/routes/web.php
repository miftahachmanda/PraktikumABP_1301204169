<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// jika hanya menampilkan view, bisa juga menggunakan ini
Route::view('/home', 'home');
// memanggil fungsi dari suatu Controller
Route::post('/auth', [SiteController::class, 'auth']);
// atau bisa juga seperti ini
//Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::resource('product', ProductController::class);
// jika hanya menampilkan view, bisa juga menggunakan ini
Route::view('/index', 'Index');
Route::view('/tamplate', 'Tamplate');

Route::view('/form', 'Form');
Route::view('/index-template', 'index-template');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

//
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::get('/product', function () {
    $list = DB::table('products')->get();
    return view('index-template', ['list' => $list]);});

Route::get('/product', function () {
    $list = DB::table('products')->get();
    return view('form', ['list' => $list]);});


Route::get('/login', function () {
    if (session()->has('email')) return redirect('/product');
    return view('login');
    });
Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
    });
Route::resource('product', ProductController::class)->middleware('auth');
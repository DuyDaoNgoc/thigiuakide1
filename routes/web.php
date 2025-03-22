<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanhMiController;

// Trang Chủ
Route::get('/', function () {
    return view('layout.app');
})->name('home');

// Trang Menu
Route::get('/menu', function () {
    return view('layout.menu');
})->name('menu');

// Trang Ăn Trưa
Route::get('/bua-an/an-trua', function () {
    return view('layout.lunch');
})->name('lunch');

// Trang Đặt Món
Route::get('/dat-mon', function () {
    return view('layout.order');
})->name('order');

// Trang Giới Thiệu
Route::get('/gioi-thieu', function () {
    return view('layout.about');
})->name('about');

// Trang Liên Hệ
Route::get('/lien-he', function () {
    return view('layout.contact');
})->name('contact');

// Các trang tĩnh khác
Route::get('/banhmi', function () {
    return view('layout.banhmi');
});

Route::get('/quanli', function () {
    return view('layout.quanli');
})->name('quanli');

Route::get('/quanlibanhmi', function () {
    return view('layout.quanlibanhmi');
})->name('quanlibanhmi.index');
Route::get('/create', function () {
    return view('restaurant.create');
})->name('create');
/*
|--------------------------------------------------------------------------
| CRUD cho BanhMiHtml qua BanhMiController
|--------------------------------------------------------------------------
| Tất cả đều sử dụng URL bắt đầu bằng /layout
| - GET  /layout             -> index
| - POST /layout             -> store
| - GET  /layout/{id}/edit   -> edit
| - PUT  /layout/{id}        -> update
| - DELETE /layout/{id}      -> destroy
*/
Route::get('/layout', [BanhMiController::class, 'index'])->name('banhmi.index');
Route::post('/layout', [BanhMiController::class, 'store'])->name('banhmi.store');
Route::get('/layout/{id}/edit', [BanhMiController::class, 'edit'])->name('layout.edit');
Route::put('/layout/{id}', [BanhMiController::class, 'update'])->name('banhmi.update');
Route::delete('/layout/{id}', [BanhMiController::class, 'destroy'])->name('banhmi.destroy');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csdldogovuongtuan;


Route::get('/', function () {
    return view('welcome');
});

// sanpham
use App\Http\Controllers\SanPhamController;
Route::get('/san-pham', [SanPhamController::class, 'index']);
Route::post('/add-to-cart', [SanPhamController::class, 'addToCart'])->name('cart.add');
// trangchu
use App\Http\Controllers\TrangChuController;
Route::get('/hi', [TrangChuController::class, 'index']);
// quantrivien
use App\Http\Controllers\AdminController;
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::delete('/admin/{MaSanPham}', [AdminController::class, 'delete'])->name('admin.delete'); // Sử dụng DELETE method

// use App\Http\Controllers\LoginController;
// Route::get('/login', [LoginController::class, 'index']);
// dangnhap
Route::get('/login', function () {
    return view('Login.index');
});
// chitietsanpham
use App\Http\Controllers\ChiTietSanPhamController;
Route::get('/Chi-Tiet-San-Pham', [ChiTietSanPhamController::class, 'index']);
Route::post('/Chi-Tiet-San-Pham/add', [ChiTietSanPhamController::class, 'addCart'])->name('giohang.add');

// giohang
use App\Http\Controllers\GioHangController;
Route::get('/Gio-Hang', [GioHangController::class, 'index']);
Route::post('/Gio-Hang/add', [GioHangController::class, 'addCart'])->name('giohang.add');
Route::put('/Gio-Hang/{id}', [GioHangController::class, 'update'])->name('giohang.update');

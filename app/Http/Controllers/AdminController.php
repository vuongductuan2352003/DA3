<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $admin = SanPham::all();
     
        
        return view('admin.index', compact('admin'));
    }

    public function delete(Request $request, $MaSanPham)
    {
        $sanPham = SanPham::findOrFail($MaSanPham);
        $sanPham->delete();
    
        return redirect()->route('admin.index');
    }
    
}

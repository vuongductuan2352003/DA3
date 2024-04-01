<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
{
    public function index()
    {
        
        $sanPhams = SanPham::paginate(12);

        return view('sanpham.index', compact('sanPhams'));
       
      
    }
    
    
}
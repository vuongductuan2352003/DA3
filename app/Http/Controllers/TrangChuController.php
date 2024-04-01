<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
class TrangChuController extends Controller
{
    
    public function index()
    {
        $slides = Slide::all();
        return view('TrangChu.index', compact('slides'));
        
    }
}

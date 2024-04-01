<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\GioHang;
class ChiTietSanPhamController extends Controller
{
    public function index(Request $request)
    {
     // Lấy mã sản phẩm từ URL
        $maSanPham = $request->query('id');


        // Lấy thông tin chi tiết sản phẩm dựa trên mã sản phẩm
        $chiTietSanPham = SanPham::where('MaSanPham', $maSanPham)->first();


        // Kiểm tra nếu không tìm thấy sản phẩm
        if (!$chiTietSanPham) {
            abort(404); // Trả về trang 404 Not Found
        }

        return view('ChiTietSanPham.index', compact('chiTietSanPham'));
    }
   
    public function addCart(Request $request)
    {
        $request->validate([
            'MaSanPham' => 'required|exists:sanpham,MaSanPham',
            'SoLuong' => 'required|integer|min:1',
        ]);

        // Lấy thông tin sản phẩm từ request
        $sanPham = SanPham::find($request->MaSanPham);

        // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng thì cập nhật số lượng, ngược lại thêm mới vào giỏ hàng
        $gioHang = GioHang::where('MaSanPham', $sanPham->MaSanPham)->first();
        if ($gioHang) {
            $gioHang->SoLuong += $request->SoLuong;
            $gioHang->save();
        } else {
            GioHang::create([
                'MaSanPham' => $sanPham->MaSanPham,
                'SoLuong' => $request->SoLuong,
            ]);
        }

        return redirect()->back()->with('success', 'Thêm sản phẩm vào giỏ hàng thành công.');
    }
}

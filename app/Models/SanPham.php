<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    
    protected $table = 'sanpham';
    protected $primaryKey = 'MaSanPham';
    public $timestamps = false; // Nếu không có trường 'created_at' và 'updated_at'
    
    protected $fillable = [
        'MaDanhMuc',
        'TenSanPham',
        'AnhDaiDien',
        'Gia',
        'SoLuong',
        'NhaSanXuat',
        'BaoHanh',
    ];

     // Liên kết với bảng DanhMuc
     public function danhmuc()
     {
         return $this->belongsTo(DanhMuc::class, 'MaDanhMuc', 'MaDanhMuc');
     }
     public function giohang()
     {
         return $this->hasOne(GioHang::class, 'MaSanPham', 'MaSanPham');
     }
 
}

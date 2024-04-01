<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'giohang';
    protected $primaryKey = 'MaGioHang';
    public $timestamps = false; // Nếu không có trường 'created_at' và 'updated_at'
    
    protected $fillable = [
        'MaSanPham',
        'SoLuong',
    ];
    public function sanpham()
    {
        return $this->hasOne(SanPham::class, 'MaSanPham', 'MaSanPham');
    }
}

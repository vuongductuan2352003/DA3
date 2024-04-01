<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    protected $table = 'danhmuc';
    protected $primaryKey = 'MaDanhMuc';
    public $timestamps = false; // Nếu không có trường 'created_at' và 'updated_at'

    protected $fillable = [
        'TenDanhMuc',
        // Các trường khác nếu có
    ];

    // Định nghĩa mối quan hệ với bảng SanPham
    public function sanphams()
    {
        return $this->hasMany(SanPham::class, 'MaDanhMuc', 'MaDanhMuc');
    }
}
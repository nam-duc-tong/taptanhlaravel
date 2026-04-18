<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ten_sanpham','chi_phi','mo_ta'
    ];
    // $fillable rất quan trọng vì nó cho phép bạn dùng create() 
    //hoặc update() mà không bị mass assignment bị chặn. Model mặc định sẽ làm việc với bảng products nếu tên model là Product
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use App\Models\Sanpham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sanpham(){
        $pro = Product::all();
        return view('services.service',compact('pro'));  
    }
}

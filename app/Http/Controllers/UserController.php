<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\middleware\CheckAccessTime;
use Illuminate\Routing\Controllers\HasMiddleware;

class UserController extends Controller implements HasMiddleware
{
  
    public static function middleware(){
        return [
            CheckAccessTime::class,
        ];
    }
    public function index(){
        $users = User::all();
        $title = "Danh sách người dùng trong hệ thống";
        //cach 1: truyển dữ liệu vào view bằng compact
        // return view('users.user',compact('users','title'));
        //cach 2: truyền dữ liệu vào view bằng with
        // return view('users.user')->with('users',$users)->with('title',$title
        return view('users.user',[
            'users' => $users,
            'title' => $title
        ]);
    }
}

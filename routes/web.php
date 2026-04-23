<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAccessTime;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[NoteController::class,'index'])->name('notes.index');
Route::get('/create',[NoteController::class,'create'])->name('notes.create');
Route::post('/store',[NoteController::class,'store'])->name('notes.store');


Route::get('/nam/{name?}',function(?string $name = "Tong Nam"){
    return "Chao ban $name";
});

Route::prefix('/san-pham')->group(function(){
    Route::get('/',function(){
        return 'Day la trang san pham';
    });
    Route::get('/{id}',function($id){
        return "Day la san pham so $id";
    });
});

Route::fallback(function(){
    return view('404');
});

Route::get("/users",[UserController::class,'index']);
// Route::get("/users",[UserController::class,'index'])->middleware('access.time');

// Route::get("/users",[UserController::class,'index'])->middleware(CheckAccessTime::class);

Route::get("/dichvu",[ProductController::class,'sanpham']);

Route::get("/post",[PostController::class,'index']);

// Route::fallback(function(){
//     return view('404');
// });


// Route group cho HomeController
Route::controller(HomeController::class)->group(function(){
    Route::get('/home','index')->name('home.index');
    Route::get('/home/about','about')->name('home.about');
});
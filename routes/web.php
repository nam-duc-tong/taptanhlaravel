<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get("/dichvu",[ProductController::class,'sanpham']);


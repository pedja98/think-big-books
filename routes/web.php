<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function() {
    return redirect("/login");
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('index',[AdminController::class,'index'])->name('admin.index');
    Route::get('books/index', [BookController::class, 'index'])->name('admin.books');
    Route::post('books', [BookController::class, 'store']);
    Route::get('books/{book}', [BookController::class, 'show']);
});

Route::group(['prefix'=>'member', 'middleware'=>['isMember','auth']], function(){
    Route::get('books/index',[BookController::class,'index'])->name('member.index');
    Route::get('books/{book}', [BookController::class, 'show']);
});

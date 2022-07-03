<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function (){
    return view('frontend.index');
});
// Route::get('/detail', function (){
//     return view('frontend.detail');
// });


// Let make the route for the category
Route::get('/{id}',[FrontendController::class,'menu'])->name('menu.page');

// Route for all the detail page
Route::get('/detail/{slug}',[FrontendController::class,'detailPage'])->name('detail.page');


// Rotes for all the authentication
Route::get('/auth/login',[MainController::class,'login']);
Route::get('/auth/register',[MainController::class,"register"]);
Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

// let us make the route for the logout
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');


// Lets group all the address of dashboard
Route::group(['middleware'=>['AuthCheck']], function (){
    // For the backend

});
Route::get('/admin/dashboard', function (){
    return view('backends.layout.dash');
});
// Let make the route for the header
Route::get('/admin/header',[MainController::class,'header']);
//  Routes for all the Post pages
Route::get('/admin/post/create',[PostController::class,'create']);
Route::get('/admin/post/index',[PostController::class,'index']);
Route::post('/admin/post/store',[PostController::class,'store'])->name('post.store');
Route::get('/admin/post/destroy/{id}',[PostController::class,'destroy'])->name('post.delete');
Route::get('/admin/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/admin/post/update/{id}',[PostController::class,'update'])->name('post.update');

// Route for all the Menu page
Route::get('/admin/menu/index',[MenuController::class,'index']);
Route::get('/admin/menu/create',[MenuController::class,'create']);
Route::post('/admin/menu/store',[MenuController::class,'store'])->name('menu.store');
Route::get('/admin/menu/destroy/{id}',[MenuController::class,'destroy'])->name('menu.delete');
Route::get('/admin/menu/edit/{id}',[MenuController::class,'edit'])->name('menu.edit');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

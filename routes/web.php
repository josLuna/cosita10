<?php

use App\Http\Controllers\imagenController;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

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
    return view('info');
});
Route::get('/Formulario', function () {
    return view('Formulario');
});

Route::get('register', [RegisterController::class,'index']);
//Route::post('registro', [RegisterController::class,'AddUser']);
Route::post('registerxd', [RegisterController::class,'store']);
Route::get('/inicio', [UserControler::class,'inicio'])->name('inicio');
Route::get('/login', [LoginControler::class,'index'])->name('index');
Route::post('loginXT', [LoginControler::class,'store'])->name('store');
Route::post('/salir', [LogoutController::class,'store'])->name('logout');
Route::get('principal', [LogoutController::class,'principal'])->name('principal');
Route::get('postMuro', [PostController::class, 'postMuro'])->name('postMuro');
Route::get('/muro', [PostController::class, 'index'])->name('post.index');
Route::get('/muro/create',[PostController::class, 'create'])->name('post.create');

Route::post('/imagenes',[imagenController::class,'store'])->name('imagenes.store');
Route::post('/pstImg',[PostController::class,'store'])->name('pstImg');


/*Route::get('register', function () {
    return view('register');
});*/
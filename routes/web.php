<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', [LoginController::class, 'home'])->name('admin.home');
Route::get('/perfil', [UserController::class, 'profile'])->name('admin.user.profile');

//rotas de produtos
Route::get('/produtos', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/produtos/cadastrar-novo', [ProductController::class, 'novo'])->name('admin.product.new');
Route::post('/produtos/cadastrar-novo/post', [ProductController::class, 'novoPost'])->name('admin.product.new.post');
Route::get('/produtos/exportar-pdf', [ProductController::class, 'exportPdf'])->name('admin.products.export-pdf');

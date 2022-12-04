<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.produto.index', [
            'title' => env('APP_NAME') . ' | Produtos'
        ]);
    }

    public function novo()
    {
        return view('admin.produto.novo', [
            'title' => env('APP_NAME'). ' | Cadastrar novo produto'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Formatter;
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

    public function novoPost(Request $request)
    {
        if($request->all()){

            $request->value_unit = Formatter::jmaskToDecimal($request->value_unit);

        }

    }
}

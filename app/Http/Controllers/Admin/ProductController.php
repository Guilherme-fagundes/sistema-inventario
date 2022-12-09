<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Helpers\Formatter;
use App\Helpers\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {

        $readproduct = DB::table('products')->paginate(10);
        $totalParcial = $readproduct->sum('parcial_value');


        return view('admin.produto.index', [
            'title' => env('APP_NAME') . ' | Produtos',
            'products' => $readproduct,
            'totalParcial' => $totalParcial
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

            if(in_array('' ,$request->all())){
                return redirect()->back()->withErrors(['error', 'Preencha todos os campos']);


            }

            $createProduct = new \App\Models\Product();
            $createProduct->reference_code = ($request->reference_code ? $request->reference_code : 'Não informado');
            $createProduct->description = $request->description;
            $createProduct->quantity = $request->quantity;
            $createProduct->value_unit = $request->value_unit;
            $createProduct->parcial_value = $request->quantity * $request->value_unit;

            $createProduct->save();
            $lastInserId = $createProduct->id;

            if(!$lastInserId){
                Log::emergency("Erro ao cadastrar produto");
            }else{
                Log::debug("Produto cadastrado em: ". date('Y-m-d H:i:s'. " - Produto ID: ". $lastInserId));
            }
            return redirect()->back()->withErrors(['success', 'Produto cadastrado com sucesso']);

        }
    }

    public function exportPdf()
    {

    }
}

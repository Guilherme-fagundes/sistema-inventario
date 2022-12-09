@extends('admin.inc.templates.layout')

@section('main')
<section class="sessProduct">
    <div class="py-2 product-header">
        <h3><span class="icon-price-tag"></span> produtos</h3>

        <a href="{{ route('admin.product.new') }}" class="btn btn-outline-success btn-sm"><span class="icon icon-plus"></span> Cadastrar novo</a>

    </div>

    <div class="product-content">

        <div class="product-result">
            <div class="product-result-header">
                <p class="product-result-title">Relação dos ultimos produtos cadastrados</p>
                <div class="product-result-header-options">
                    <a href="{{ route('admin.products.export-pdf') }}" title="Exportar como PDF" class="btn btn-warning"><span
                            class="icon icon-file-pdf"></span></a>

                </div>

            </div>

            <div class="product-result-content">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código do produto</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor Unit</th>
                            <th scope="col">Valor Parcial</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->reference_code }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>RS {{ App\Helpers\Formatter::number($product->value_unit) }}</td>
                                <td>R$ {{ App\Helpers\Formatter::number($product->parcial_value) }}</td>
                            </tr>

                        @endforeach
                        <tr class="bg-primary text-white">
                            <td colspan="4">Valor Total</td>
                            <td>{{ App\Helpers\Formatter::number($totalParcial) }}</td>
                        </tr>

                    </tbody>

                </table>
                {{ $products->links() }}

            </div>

        </div>

    </div>


</section>
@endsection

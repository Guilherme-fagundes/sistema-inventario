@extends('admin.inc.templates.layout')

@section('main')
<section class="sessProduct">
    <div class="py-2 product-header">
        <h3><span class="icon-price-tag"></span> produtos</h3>

        <a href="#" class="btn btn-outline-success btn-sm"><span class="icon icon-plus"></span> Cadastrar novo</a>

    </div>

    <div class="product-content">

        <div class="product-result">
            <div class="product-result-header">
                <p class="product-result-title">Relação dos ultimos produtos cadastrados</p>
                <div class="product-result-header-options">
                    <a href="#" title="Exportar como PDF" class="btn btn-warning"><span
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
                        <tr>
                            <td scope="row">1</td>
                            <td>Nescau</td>
                            <td>126</td>
                            <td>RS 5,28</td>
                            <td>R$ 665,28</td>
                        </tr>
                        <tr>
                            <td colspan="4">Valor Total</td>
                            <td>R$ 6000,00</td>
                        </tr>

                    </tbody>
                </table>

            </div>

        </div>

    </div>


</section>
@endsection

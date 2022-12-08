@extends('admin.inc.templates.layout')

@section('main')
<section class="sessProduct">
    <div class="py-2 product-header">
        <h3><span class="icon-price-tag"></span> Cadastrar novo produto</h3>

        <a href="{{ route('admin.product.index') }}" class="btn btn-outline-warning btn-sm"><span
                class="icon icon-arrow-left"></span> Voltar</a>

    </div>

    <div class="product-new-content">

        <div class="create-new-product">
            <div class="create-new-product-header">
                <p class="create-product-title">Cadastre seus produtos e veja a relação dos valores na página de
                    produtos.</p>
            </div>

            <div class="row">
                <div class="col-12">
                    @if($errors->all())
                        @if($errors->all()[0] == 'error')
                            <div class="alert alert-warning" role="alert">
                                <span class="icon icon-cross"></span> {{ $errors->all()[1] }}
                            </div>
                        @else
                            <div class="alert alert-success" role="alert">
                                <span class="icon icon-checkmark"></span> {{ $errors->all()[1] }}
                            </div>
                        @endif
                    @endif

                </div>

            </div>
            <div class="create-new-product-content">

                <form class="form-create-new-product" method="POST" action="{{ route('admin.product.new.post') }}">
                    @csrf
                    <div class="mb-3">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">produto</label>
                                <input class="form-control" type="text" name="description"
                                    placeholder="Informe a descrição/nome do produto" />

                            </div>
                            <div class="col">
                                <label class="form-label">Código de referencia (Opsional)</label>
                                <input class="form-control" type="text" name="reference_code"
                                    placeholder="Informe o código de referencia" />

                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col">
                                <label class="form-label">Quantidade</label>
                                <input class="form-control" type="number" name="quantity"
                                    placeholder="Informe a quantidae do produto" />

                            </div>

                            <div class="col">
                                <label class="form-label">Valor unitário</label>
                                <input class="form-control val-unitario" type="text" name="value_unit"
                                    placeholder="Informe o valor unitario do produto" />

                            </div>

                        </div>

                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success"><span class="icon icon-floppy-disk"></span> Salvar
                            produto</button>

                    </div>
                </form>

            </div>

        </div>

    </div>


</section>
@endsection

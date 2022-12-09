<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estoque existente em: 31-12-{{ date('Y') }}</title>

    <style>
        @page{
            size: a4;
            font-family: Arial, Helvetica, sans-serif;
            font-size: .8em;
            margin: 40px 0;


        }
        body{
            padding: 30px;
        }
        table{
            width: 100%;
            margin: 0 auto;
            text-align: center;
            border: none;


        }
        table thead tr th{
            border: 1px dotted black;
            padding: 5px 10px;
        }
        table tbody tr td{
            border: 1px dotted black;
            padding: 5px 10px;
        }
        .pdf-heder{

            display: flex;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            margin-top: -20px;
            top: -5px;


        }
    </style>
</head>

<body>

    <header class="pdf-heder">
        <p><span>Estoque existente em: 31-12-{{ date('Y') }}</span></p>

    </header>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>Cód. Referencia</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor Unit</th>
                <th>Valor Parcial</th>

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

        </tbody>

    </table>

</body>

</html>

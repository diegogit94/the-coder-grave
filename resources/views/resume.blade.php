@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>thank you</title>
</head>
<body>
    <div class="container">
        <div class="grid grid-cols-3 grid-rows-2 justify-center items-center">
            <div class="col-start-2 row-start-1 flex flex-col justify-center items-center">
                    <form method="GET" action="{{ route('product.index') }}">
                    <table>
                        <thead>
                            <th class="border px-4 py-2">Transacción {{ $response['status']['status'] }}</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Referencia:  {{ $response['request']['payment']['reference'] }}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Producto: {{ $response['request']['payment']['description'] }}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Valor: ${{ $response['request']['payment']['amount']['total'] }} USD</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Muchas gracias por su compra.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-start-2 row-start-3 text-center bg-lime-500 hover:bg-lime-400 text-white font-bold py-2 px-4 rounded-full">
                        <button type="submit">Volver a la tienda</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

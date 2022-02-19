@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>product</title>
</head>
<body>
    <div class="container">
        <div class="grid grid-cols-3 grid-rows-1 justify-center items-center py-2">
            <div class="col-start-2 row-start-1 flex flex-col justify-center items-center">
                <form method="GET" action="{{ route('checkout.index') }}">
                    <table>
                        <thead>
                            @if ($product)
                            <th class="border px-4 py-2">{{ $product->name }}</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2"><img src="{{ $product->image }}" alt=""></td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">¿Te dan ganas golpear algo despues de googlear esos mil errores mientras programas? Esta almohada es para ti ;)</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">¡¡ Puedes tenerla por solo ${{ $product->price }}.00 USD!!</td>
                            </tr>
                            @else
                                <h1 class="text-center font-bold">Ejecuta el comando "php artisan db:seed" ;)</h1>
                            @endif
                            <tr>
                                @if (Auth::user())
                                    <td class="border px-4 py-2 text-center"><button type="submit" class="button bg-lime-500 hover:bg-lime-400 text-white font-bold py-2 px-4 rounded-full">Comprar</button></td>
                                @else
                                    <td class="border px-4 py-2 text-center font-bold bg-red-500">Por favor, inicia sesión o registrate para realizar una compra.</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

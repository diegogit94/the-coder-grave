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
                                <td class="border px-4 py-2">¡¡ Puedes tenerla por solo ${{ $product->price }}.00 !!</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 text-center"><button type="submit" class="button bg-lime-500 hover:bg-lime-400 text-white font-bold py-2 px-4 rounded-full">Comprar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
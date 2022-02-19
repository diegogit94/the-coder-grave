@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>admin-history</title>
</head>
<body>
    <div class="container">
        <div class="grid grid-cols-6 grid-rows-6 justify-center items-center">

            {{-- Headers --}}
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Fecha</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Cliente</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Producto</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Valor</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Estado</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-1 border-b-2">
                <thead>
                    <th>Referencia</th>
                </thead>
            </div>
            {{-- end headers --}}

            {{-- body --}}
            <?php $index = 0?>
            @foreach ($orders as $order)
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>{{ $order->user->name }} {{ $order->user->surname }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>{{ $order->product->name }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>${{ $order->total }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>{{ $order->status }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="tracking-wide text-gray-700 text-center mb-2 row-start-<?php $index + 3 ?>">
                    <tbody>
                        <tr>
                            <td>{{ $order->id }}</td>
                        </tr>
                    </tbody>
                </div>
                <?php $index++ ?>
            @endforeach
            {{-- end body --}}
            
            {{-- pagination --}}
                {{ $orders->links() }}
            {{-- end pagination --}}
        </div>
    </div>
</body>
</html>
@endsection

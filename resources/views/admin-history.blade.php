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
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Fecha</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Cliente</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Producto</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Valor</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Estado</th>
                </thead>
            </div>
            <div class="block uppercase tracking-wide text-gray-700 text-center font-bold mb-2 row-start-2 border-b-2">
                <thead>
                    <th>Referencia</th>
                </thead>
            </div>
            {{-- end headers --}}

            {{-- body --}}
            <div class="tracking-wide text-gray-700 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>08-02-2022</td>
                    </tr>
                </tbody>
            </div>
            <div class="tracking-wide text-gray-700 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>Diego Alejandro Ospina Upegui</td>
                    </tr>
                </tbody>
            </div>
            <div class="tracking-wide text-gray-700 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>USB Big Enter Key Table Pillow for Angry Developers</td>
                    </tr>
                </tbody>
            </div>
            <div class="tracking-wide text-gray-700 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>$500.00</td>
                    </tr>
                </tbody>
            </div>
            <div class="tracking-wide text-lime-500 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>PAYED</td>
                    </tr>
                </tbody>
            </div>
            <div class="tracking-wide text-gray-700 text-center mb-2 row-start-3">
                <tbody>
                    <tr>
                        <td>1</td>
                    </tr>
                </tbody>
            </div>
            {{-- end body --}}
            
        </div>
    </div>
</body>
</html>

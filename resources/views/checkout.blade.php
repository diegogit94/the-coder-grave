<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>checkout</title>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="grid grid-cols-6 grid-rows-8 gap-2 py-6">
                <div class="col-start-3 row-start-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first-name">
                        Nombres
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="first-name" type="text" placeholder="Diego Alejandro">
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-4 row-start-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="surname">
                        Apellidos
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="surname" type="text" placeholder="Ospina Upegui">
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-3 row-start-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="document-type">
                        Tipo de documento
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="document-type" type="text">
                        <option value="">Seleccione una opcion</option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="RUT">Registro unico tributario</option>
                        <option value="PPN">Pasaporte</option>
                    </select>
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-4 row-start-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="document">
                        Documento
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="document" type="text" placeholder="1234567890">
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-3 row-start-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Correo
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" type="text" placeholder="diego@mail.com">
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-4 row-start-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mobile">
                        Movil
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="mobile" type="tel" placeholder="3113234434">
                    <p class="text-red-500 text-xs italic">Por favor, llenar este campo.</p>
                </div>
                <div class="col-start-3 row-start-5" id="order">
                    <p class="" id="product">USB Big Enter Key Table Pillow for Angry Developers</p>
                    <p class="" id="total">$500.00</p>
                </div>
                <div class="col-start-4 row-start-5 row-span-2">
                    <img src="https://55gadgets.com/wp-content/uploads/2018/06/USB-Big-Enter-Key-Table-Pillow.jpg" alt="headphones" />
                </div>
                <div class="col-start-3 row-start-7 col-span-2 text-center bg-lime-500 hover:bg-lime-400 text-white font-bold py-2 px-4 rounded-full">
                    <button type="button">Pagar con Placetopay</button>
                </div>
                <div class="col-start-4 row-start-8">
                    <a href="https://www.evertecinc.com/pasarela-de-pagos-e-commerce/" target="_blank"><img src="https://static.placetopay.com/placetopay-logo-black.svg" alt="placetopay-logo"></a>
                </div>
            </div>
        </form> 
    </div>
</body>
</html>

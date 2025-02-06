@extends('layouts.app')

@section('content')
    <header class="bg-white py-5 text-center shadow">
        <div>

            <div class="flex justify-center items-center gap-5 mb-5">
                <img src="{{ asset('media/edomex.png') }}" alt="Logo 1" class="w-[100px] h-auto">
                <img src="{{ asset('media/tesi.png') }}" alt="Logo 2" class="w-[100px] h-auto">
                <img src="{{ asset('media/isclogo.jpeg') }}" alt="Logo 3" class="w-[100px] h-auto">
            </div>
            <div class="banner">
                <h1 class="text-4xl text-blue-600">Bienvenidos</h1>
            </div>
    </header>

    <main class="p-5">
        <button class="bg-red-600 text-white px-4 py-2 rounded float-right hover:bg-red-700" onclick="cerrarSesion()">
            Cerrar sesión
        </button>
        <div class="flex justify-between mt-5">

            <div class="flex-1 mr-5">
                <h2 class="text-2xl mb-3">Seleccione una opción:</h2>
                <ul class="list-none p-0">
                    <li class="mb-3"><a href="#" class="text-blue-600 hover:underline">Canalización</a></li>
                    <li class="mb-3"><a href="#" class="text-blue-600 hover:underline">Ficha de tutorado</a>
                    </li>
                    <li class="mb-3"><a href="#" class="text-blue-600 hover:underline">Tutorías académicas</a>
                    </li>
                    <li class="mb-3"><a href="#" class="text-blue-600 hover:underline">Reporte Mensual</a></li>
                    <li class="mb-3"><a href="#" class="text-blue-600 hover:underline">Ficha de Identificación</a>
                    </li>
                </ul>
            </div>

            <div class="pet">
                <img src="{{ asset('media/roco2.png') }}" alt="Mascota Roko" class="max-w-[200px] h-auto">
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center py-3 fixed bottom-0 w-full">
        <p>© 2024 Tecnológico de Estudios Superiores de Ixtapaluca</p>
    </footer>

    <script>
        function cerrarSesion() {
            window.location.href = "/login.html";
        }
    </script>

    </div>
@endsection

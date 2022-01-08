@extends("layouts.app2")
@section("contenido")
<div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
                Windblue Sports
            </h2>
            <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                Página de gestión de buceos
            </p>
            <a class="btn btn-success" href="{{ url('/buceadores') }}">Buceadores</a>
            <a class="btn btn-primary" href="{{ url('/login') }}">Iniciar sesión</a>

        </div>
    </div>
</div>
@endsection
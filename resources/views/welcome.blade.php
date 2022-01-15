@extends("layouts.app3")

@section("contenido")
<div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                Administración de Windblue Sports
            </h1>
            <a id="login" class="btn btn-outline-info" href="{{ url('/login') }}">Iniciar sesión</a>
            <a class="btn btn-outline-info" href="{{ url('/register') }}">Regístrate</a>
        </div>
    </div>
</div>
@endsection
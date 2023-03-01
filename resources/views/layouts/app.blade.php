<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba Tecnica GML</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="bg-gray-50">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between">
                <h1 class="text-3xl">
                    GML Software
                </h1>

                <nav class="flex gap-2 items-center">
                    <a class="text-red-700 bg-red-500 text-white rounded p-3" href="/">Usuarios en Tarjeta</a>
                    <a class="text-red-700 bg-red-500 text-white rounded p-3" href="{{ route('table') }}">Usuarios en Tabla</a>
                    <a class="text-red-700 bg-red-500 text-white rounded p-3" href="{{ route('crear') }}" title="Crear Usuario">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>
                    </a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10 bg-white p-2">
            <h2 class="text-2xl text-center mb-10">
                @yield('gTitulo')
            </h2>
            @yield('gContent')

        </main>
        <footer class="text-center p-4 text-pink-800 mt-8">
            GML Software - Prueba técnica - Todos los derechos reservados 
            {{ now()->year }}
        </footer>
        <hr>
        
        @livewireScripts
    </body>
</html>

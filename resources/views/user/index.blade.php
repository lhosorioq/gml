@extends('shared.app')

@section('gTitulo')
    Users list
@endsection

@section('gContent')

    @if ($users->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @foreach ($users as $user)
            <div class="p-2 w-80">
                <div class="p-1 bg-white rounded shadow-md">
                    <a href="{{ route('editar', $user ) }}" title="{{ $user->nombres }}">
                        <h2 class="text-center font-bold text-gray-800">{{ $user->nombres . ' ' . $user->apellidos }}</h2>
                        <p class="text-gray-600 text-sm">
                            Identidad: {{ $user->cedula }} <br>
                            Correo: {{ $user->email }} <br>
                            Categoria: <strong>{{ $user->categoria->name }}</strong> <br>
                            Pais: {{ $user->pais }} <br>
                            Dirección: {{ $user->direccion }} <br>
                            Celular: {{ $user->celular }} <br>
                        </p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $users->links('pagination::tailwind') }}
        </div>
    @else
        <p class="text-gray-600 text-center">
            Sin usuarios registrados.
        </p>
    @endif
@endsection

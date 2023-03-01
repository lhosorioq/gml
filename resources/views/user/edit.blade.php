@extends('shared.app')

@section('gTitulo')
    Edit User {{ $user->nombres }}
@endsection

@section('gContent')
    <div class="md:flex md:justify-center md:gap md:items-center">
        <div class="md:w-4/12">
            <img src="{{ asset('img/logoGML.png') }}" alt="Logo Empresarial">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-md shadow-xl">
            <form action="{{ route('update', $user ) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="nombres" class="mb-2 block text-gray-400">Nombres / Firts Name</label>
                    @error('nombres')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="nombres"
                        name="nombres"
                        type="text"
                        value="{{ @old('nombres', $user->nombres ) }}"
                        placeholder="Su nombre / firtsName"
                        class="border p-3 w-full rounded @error('nombres') border-red-500 rounded @enderror"
                    >
                    
                    <label for="apellidos" class="mb-2 block text-gray-400">Apellido / Last Name</label>
                    @error('apellidos')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="apellidos"
                        name="apellidos"
                        type="text"
                        value="{{ @old('apellidos', $user->apellidos ) }}"
                        placeholder="Su apellido / lastName"
                        class="border p-3 w-full rounded @error('apellidos') border-red-500 rounded @enderror"
                    >
                    <label for="cedula" class="mb-2 block text-gray-400">Cédula / DNI</label>
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="cedula"
                        name="cedula"
                        type="number"
                        value="{{ @old('cedula', $user->cedula ) }}"
                        placeholder="Su cedula / DNI"
                        class="border p-3 w-full rounded @error('cedula') border-red-500 rounded @enderror"
                    >
                    <label for="email" class="mb-2 block text-gray-400">Cuenta de correo / e-mail</label>
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        value="{{ @old('email', $user->email ) }}"
                        placeholder="Cuenta de correo / e-mail"
                        class="border p-3 w-full rounded @error('email') border-red-500 rounded @enderror"
                    >

                    <label for="categoria" class="mb-2 block text-gray-400">Categoria / Category</label>
                    <select 
                        id="countries" 
                        name="categoria"
                        value="{{ @old('categoria') }}"
                        class="border p-3 w-full rounded @error('categoria') border-red-500 rounded @enderror"
                    >
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}"
                                @if ( $user->categoria_id == $categoria->id )
                                    selected="selected"
                                @endif
                            >{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                    
                    <label for="pais" class="mb-2 block text-gray-400">Pais / country</label>
                    <select 
                        id="countries" 
                        name="pais"
                        class="border p-3 w-full rounded @error('pais') border-red-500 rounded @enderror"
                    >
                        @foreach ($paises as $pais)
                            <option
                                @if ( $user->pais == $pais->name->common )
                                    selected="selected"
                                @endif
                            >{{ $pais->name->common }}</option>
                        @endforeach
                    </select>
                    <label for="direccion" class="mb-2 block text-gray-400">Dirreccion / Address</label>
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="direccion"
                        name="direccion"
                        value="{{ @old('direccion', $user->direccion ) }}"
                        type="text"
                        placeholder="Dirreccion / Address"
                        class="border p-3 w-full rounded @error('direccion') border-red-500 rounded @enderror"
                    >
                    <label for="celular" class="mb-2 block text-gray-400">Numero celular / Cellphone Number</label>
                    @error('celular')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    <input 
                        id="celular"
                        name="celular"
                        value="{{ @old('celular', $user->celular ) }}"
                        type="number"
                        placeholder="Numero celular / Cellphone Number"
                        class="border p-3 w-full rounded @error('celular') border-red-500 rounded @enderror"
                    >
                    <input 
                        type="submit"
                        value="Editar Usuario / Edit User"
                        class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer w-full p-3 text-white rounded-lg mt-4"
                    >
                </div>
            </form>
        </div>
    </div>
@endsection

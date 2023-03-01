@extends('layouts.app')

@section('gTitulo')
    Users list in Table
@endsection

@section('gContent')

    <div class="bg-white-100 px-2 py-2 border-t border-gray-300 sm:px-4">
        <div class="flex bg-white px-3 py-3 sm:px-4">
            <input 
                type="text" 
                wire:model="buscar"
                class="form-input rounded-md shadow-sm p-3 block w-full" 
                placeholder="Buscar Usuarios"
            />
            <div class="form-input rounded-md shadow-sm p-3 block ml-6">
                <select wire:model="porPagina" class="out-line-none">
                    <option value="4">4 por página</option>
                    <option value="8">8 por página</option>
                    <option value="16">16 por página</option>
                    <option value="32">32 por página</option>
                </select>
            </div>
            @if( $buscar != '' )
                <div class="form-input rounded-md shadow-sm p-3 block ml-6">
                    <button wire:click="limpiar" class="form-input rounded-md shadow mt-1 ml-6 block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>
        
        @if ($users->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Identidad</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Nombre Completo /
                            Correo</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Pais / Dirección
                        </td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Categoria</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Celular</td>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-1 py-1 whitespace-nowrap">{{ $user->cedula }}</td>
                            <td class="px-1 py-1 whitespace-nowrap">
                                {{ $user->nombres . ' ' . $user->apellidos }} <br>
                                {{ $user->email }}
                            </td>
                            <td class="px-1 py-1 whitespace-nowrap">
                                {{ $user->pais }} <br>
                                {{ $user->direccion }}
                            </td>
                            <td class="px-1 py-1 whitespace-nowrap">{{ $user->categoria->name }}</td>
                            <td class="px-1 py-1 whitespace-nowrap">{{ $user->celular }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="bg-white px-2 py-2 border-t border-gray-300 sm:px-4">
                {{ $users->links('pagination::tailwind') }}
            </div>
        @else
            <div class="bg-white px-2 py-2 border-t border-gray-300 sm:px-4">
                No hay resultados para la busqueda realizada con la palabra {{ $buscar }}. <br>
                En la pagina {{ $page }} en la página {{ $porPagina }}
            </div>
        @endif
    </div>
@endsection

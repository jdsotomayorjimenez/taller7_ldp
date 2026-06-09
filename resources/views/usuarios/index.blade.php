@extends('layouts.plantilla')

@section('title', 'Gestión de Usuarios')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">
            Usuarios Registrados
        </h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Fecha de Registro</th>
                    </tr>
                </thead>

                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($usuarios as $usuario)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                {{ $usuario->id }}
                            </td>

                            <td class="py-3 px-6 text-left">
                                {{ $usuario->name }}
                            </td>

                            <td class="py-3 px-6 text-left">
                                {{ $usuario->email }}
                            </td>

                            <td class="py-3 px-6 text-left">
                                {{ $usuario->created_at->format('d/m/Y H:i') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
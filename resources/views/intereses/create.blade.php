@extends('layouts.plantilla')

@section('title', 'Crear Interés')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">
            Registrar Nuevo Interés
        </h2>

        <form action="{{ route('intereses.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Nombre del Interés
                </label>

                <input
                    type="text"
                    name="nombre"
                    id="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                    value="{{ old('nombre') }}"
                    required
                >

                @error('nombre')
                    <p class="text-red-500 text-xs italic">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    id="descripcion"
                    rows="3"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                >{{ old('descripcion') }}</textarea>
            </div>

            <button
                type="submit"
                class="bg-green-600 hover:bg-green-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Guardar Interés
            </button>
        </form>
    </div>
@endsection
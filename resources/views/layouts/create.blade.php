@extends('layouts.plantilla')

@section('title', 'Crear Persona')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">
            Registrar Nueva Persona
        </h2>

        <form action="{{ route('personas.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Nombre
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

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}"
                    required
                >

                @error('email')
                    <p class="text-red-500 text-xs italic">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Intereses
                </label>

                <div class="grid grid-cols-2 gap-2">
                    @foreach($intereses as $interes)
                        <label class="inline-flex items-center">
                            <input
                                type="checkbox"
                                name="intereses[]"
                                value="{{ $interes->id }}"
                                class="form-checkbox text-blue-600"
                                {{ in_array($interes->id, old('intereses', [])) ? 'checked' : '' }}
                            >

                            <span class="ml-2 text-gray-700">
                                {{ $interes->nombre }}
                            </span>
                        </label>
                    @endforeach
                </div>

                @error('intereses')
                    <p class="text-red-500 text-xs italic">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Guardar Persona
            </button>
        </form>
    </div>
@endsection
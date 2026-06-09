@extends('layouts.plantilla')

@section('title', 'Dashboard')

@section('content')
    <!-- Mensaje de bienvenida -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            ¡Bienvenido, {{ Auth::user()->name }}!
        </h1>

        <p class="text-gray-600 mt-2">
            Panel de control del sistema EjemploSeg
        </p>
    </div>

    <!-- Tarjetas de estadísticas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total de Personas -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">
                        Total de Personas
                    </p>

                    <p class="text-3xl font-bold text-gray-800 mt-2">
                        {{ $totalPersonas }}
                    </p>
                </div>

                <div class="text-blue-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Total de Intereses -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">
                        Total de Intereses
                    </p>

                    <p class="text-3xl font-bold text-gray-800 mt-2">
                        {{ $totalIntereses }}
                    </p>
                </div>

                <div class="text-green-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Total de Usuarios -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">
                        Usuarios Registrados
                    </p>

                    <p class="text-3xl font-bold text-gray-800 mt-2">
                        {{ $totalUsuarios }}
                    </p>
                </div>

                <div class="text-purple-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
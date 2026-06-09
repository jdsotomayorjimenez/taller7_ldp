<aside class="w-64 bg-white shadow-md flex-shrink-0 min-h-screen">
    <div class="p-4">
        <h3 class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-2">
            Navegación
        </h3>

        <ul class="space-y-2">
            <li>
                <a href="{{ route('intereses.create') }}"
                   class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 rounded transition">
                    Crear Interés
                </a>
            </li>

            <li>
                <a href="{{ route('personas.create') }}"
                   class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 rounded transition">
                    Crear Persona
                </a>
            </li>
        </ul>

        <h3 class="text-gray-500 text-xs font-semibold uppercase tracking-wider mt-6 mb-2">
            Seguridad
        </h3>

        <ul class="space-y-2">
            <li>
                <a href="{{ route('usuarios.index') }}"
                   class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 rounded transition">
                    Gestión de Usuarios
                </a>
            </li>
        </ul>
    </div>
</aside>
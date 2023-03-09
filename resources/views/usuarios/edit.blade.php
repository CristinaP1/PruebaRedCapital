<x-app-layout>
    <!-- Formulario -->
    <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
        @csrf
        {{method_field('PATCH')}}
        <!-- Contenedor del registro -->
        <div class="bg-white m-10 relative overflow-x-auto shadow-md sm:rounded-lg">
            <!-- Titulo del registro -->
            <div class="prose">
                <h3 class="m-5">Actualizar usuario</h3>
            </div>
            <hr>
            <!-- Primera fila del formulario -->
            <div class="m-5 grid grid-cols-3 gap-6">
                <!-- Label y inpurt del nombre -->
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{$usuario->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Label y inpurt del apellido -->
                <div>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{$usuario->apellido}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Label y inpurt del edad -->
                <div>
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" id="edad" value="{{$usuario->edad}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!--Segunda fila del formulario -->
            <div class="m-5 grid grid-cols-3 gap-6">
                <!-- Label y inpurt del correo -->
                <div>
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" value="{{$usuario->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Label y inpurt del rol -->
                <div>
                    <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                    <select id="rol" name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Seleccione rol</option>
                        <option value=1 {{$usuario->admin == 1 ? 'selected' : ''}}>Administrador</option>
                        <option value=0 {{$usuario->admin == 0 ? 'selected' : ''}}>Usuario</option>
                    </select>
                </div>
            </div>
            <!-- Boton para enviar datos actualizados -->
            <div class="mb-5">
                <button type="submit" class="m-5 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Actualizar') }}
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
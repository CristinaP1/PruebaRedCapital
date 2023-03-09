<x-app-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="bg-white m-10 relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="prose">
                <h3 class="m-5">Registro de usuarios</h3>
            </div>
            <hr>
            <div class="m-5 grid grid-cols-3 gap-6">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Apellido -->
                <div>
                    <x-input-label for="apellido" :value="__('Apellido')" />
                    <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
                    <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
                </div>

                <!-- Edad -->
                <div>
                    <x-input-label for="edad" :value="__('Edad')" />
                    <x-text-input id="edad" class="block mt-1 w-full" type="text" name="edad" :value="old('edad')" required autofocus autocomplete="edad" />
                    <x-input-error :messages="$errors->get('edad')" class="mt-2" />
                </div>
            </div>
            <div class="m-5 grid grid-cols-3 gap-6">
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Correo electronico')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="m-5 grid grid-cols-3 gap-6">
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Seleccione rol</option>
                        <option value="1">Administrador</option>
                        <option value="0">Usuario</option>
                    </select>
                </div>
            </div>
            <div class="mb-5">
                <button class="m-5 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Registrar') }}
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
<x-app-layout>
    <!-- Contenedor del listado -->
    <div class="m-10 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="flex justify-between mb-6">
            <!-- Titulo del listado -->
            <div class="prose">
                <h2>Listado Cotizaciones</h2>
            </div>
            <!-- Boton para agregar una nueva cotizacioon -->
            <a type="button" role="button" href="{{route('cotizaciones.create')}}" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Nuevo
            </a>
        </div>
        <!-- Tabla de cotizaciones -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-4000">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Número de cotización
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de emisión
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total bruto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad de productos
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre usuario creador
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cotizaciones as $cotizacion)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$cotizacion->id}}
                        </td>
                        <td class="px-6 py-4">
                            {{$cotizacion->fecha_emision}}
                        </td>
                        <td class="px-6 py-4">
                            {{$cotizacion->total_bruto}}
                        </td>
                        <td class="px-6 py-4">
                            {{$cotizacion->cotizaciones_d->sum('cantidad')}}
                        </td>
                        <td class="px-6 py-4">
                            {{$cotizacion->usuario->name}}
                            {{$cotizacion->usuario->apellido}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Paginacion de cotizaciones -->
            <div class="m-5 paginator">
                {{ $cotizaciones->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <!-- Formulario de creacion de cotizacion -->
    <form id="formCotizacion" action="{{route('cotizaciones.store') }}" method="POST">
        @csrf
        <!-- Se incluye la componente de formulario -->
        @include('cotizacion.form')
    </form>
</x-app-layout>
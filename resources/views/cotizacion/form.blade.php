<div class="bg-white m-10 relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="prose">
        <h3 class="m-5">Registro de cotización</h3>
    </div>
    <hr>
    <div class="m-5 grid grid-cols-3 gap-6">
        <div>
            <label for="ncotizacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Número de cotización
            </label>
            <input type="number" id="ncotizacion" value={{$numeroCotizacion}}
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
        </div>
        <div>
            <label for="femision" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Fecha de emisión
            </label>
            <input type="date" id="femision"  value={{$fechaActual}}
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        </div>
        <div class="max-w-md">
            <label for="tbruto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Total bruto
            </label>
            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    $
                </span>
                <input type="number" id="tbruto" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
            </div>
        </div>
    </div>

    <div class="m-5 p-5 bg-white border border-gray-200 rounded-lg shadow">
        <div class="prose">
            <h4 class="pb-5 m-0">Agregar productos</h4>
        </div>
        <dvi class="grid grid-cols-4 gap-6">
            <div>
                <label for="producto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Producto
                </label>
                <select id="producto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Seleccione producto</option>
                    @foreach($productos as $key => $producto)
                        <option value="{{$producto->sku}}"> {{$producto->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Cantidad
                </label>
                <input type="number" id="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            </div>
            <div>
                <label for="punitario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Precio unitario
                </label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        $
                    </span>
                    <input type="number" id="punitario" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                </div>
            </div>
            <div class="self-end">
                <button type="button" onclick="agregarProducto()"
                class="text-white bg-blue-500 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </dvi>
        <div>
            <div class="prose">
                <h4 class=py-5>Productos seleccionados</h4>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Producto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cantidad
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio unitario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pricio total
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody id="productosSelec">
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <button type="submit"
    class="m-5 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Enviar</button>
</div>

<script>
    var select = document.getElementById('producto');
    var sites = ({!! json_encode($productos->toArray()) !!});
    var numeroCotizacion = JSON.parse("{{ json_encode($numeroCotizacion) }}");
    var arreglo = [];
    var totalBruto = 0;
    let index = 0;

    const list = document.getElementById("productosSelec");

    function logValue() {
        document.getElementById("punitario").value= sites.find( e => e.sku == select.value).precio_unitario;
    }

    select.addEventListener('change', logValue, false);

    function agregarProducto(){
        var selectedCantidad = document.getElementById('cantidad').value;
        var selectedProducto = sites.find( e => e.sku == document.getElementById('producto').value);
        var selectedNombreProducto = selectedProducto.nombre
        var selectedPU = selectedProducto.precio_unitario
        var total = selectedPU * selectedCantidad

        list.innerHTML += `
        <tr id="tr-${index}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ${selectedNombreProducto}
                            </td>
                            <td class="px-6 py-4">
                                ${selectedCantidad}
                            </td>
                            <td class="px-6 py-4">
                                ${selectedPU}
                            </td>
                            <td class="px-6 py-4">
                                ${total}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="eliminarProducto(${index})">Elliminar</a>
                            </td>
                            </tr>
        
        `;
        arreglo.push({index, selectedCantidad, selectedNombreProducto, selectedPU, total})
        console.log(arreglo);
        index++;
        totalBruto += parseInt(total);
        document.getElementById('tbruto').value = totalBruto;

        document.getElementById('cantidad').value = '';
        document.getElementById('producto').value = '';
        document.getElementById('punitario').value = '';
    }

    function eliminarProducto(idProducto){
        arreglo = arreglo.filter((elemento) => elemento.index !== idProducto)
        tr = document.getElementById('tr-'+idProducto);
        padre = tr.parentNode;
		padre.removeChild(tr);
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#formCotizacion").submit(function(event) {
        event.preventDefault(); // evita que el formulario se envíe por defecto
        console.log("Enviado")

        // buscar fecha de emision
        var fechaEmision = document.getElementById('femision').value;

        $.ajax({
            type: "POST",
            url: "{{ route('cotizaciones.store') }}",
            data: {arreglo: arreglo, totalBruto: totalBruto, fechaEmision: fechaEmision},
            success: function(response) {
                console.log("Success")
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus)
                console.log(jqXHR)
                console.log(errorThrown)
                // aquí puedes manejar el error de la petición Ajax
            }
        });
    });


</script>

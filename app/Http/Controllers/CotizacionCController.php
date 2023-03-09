<?php

namespace App\Http\Controllers;

use App\Models\Cotizacion_c;
use App\Models\Cotizacion_d;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class CotizacionCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Se obtienen las cotizacion para ser paginadas de a 5*/
        $cotizaciones = Cotizacion_c::paginate(5);
        return view('cotizacion.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Se obtienen todas los productos para mostrarlos en el selector de producto */
        $productos = Producto::all();
        $fechaActual = date("Y-m-d");
        $numeroCotizacion = Cotizacion_c::select('id')->orderBy('id', 'desc')->first()->value('id');
        $numeroCotizacion = $numeroCotizacion + 1;
        return view('cotizacion.create', compact('productos', 'numeroCotizacion', 'fechaActual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arreglo = $request['arreglo'];

        /* Se valida los datos del la cotizacion */
        $validated = $request->validate([
            'femision' => 'required',
            'cantidad' => 'numeric',
        ]);


        try {
            //Se crea nueva cotizacion
            $cotizacion = new Cotizacion_c();
            $cotizacion->fecha_emision = $request['fechaEmision'];
            $cotizacion->total_bruto = $request['totalBruto'];
            $cotizacion->fecha_registro = date("Y-m-d");
            $cotizacion->usuario_id = auth()->id();
            /* Se guarda la cotizacion */
            $cotizacion->save();

            //Se crea nuevo detalle de cotizacion
            foreach ($arreglo as $key => $value) {
                $detalle = new Cotizacion_d();
                $detalle->cantidad = $value['selectedCantidad'];
                $detalle->precio_unitario = $value['selectedPU'];
                $detalle->fecha_registro = date("Y-m-d");
                $detalle->cotizacion_id = $cotizacion->id;
                $detalle->producto_sku = $request['sku'];

                $detalle->save();
            }
        } catch (\Throwable $th) {
            /* Si ocurre un error al ingresar una cotizacion arroja un mensaje de error */
            Log::info('Error en store de contralador de cotizacion');
            Log::error($th);
            return redirect()->route('cotizaciones.index')->with('success', 'La cotización ha sido creada exitosamente');
        }
        return redirect()->route('cotizaciones.index')->with('success', 'La cotización ha sido creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotizacion_c  $cotizacion_c
     * @return \Illuminate\Http\Response
     */
    public function show(Cotizacion_c $cotizacion_c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cotizacion_c  $cotizacion_c
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotizacion_c $cotizacion_c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotizacion_c  $cotizacion_c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacion_c $cotizacion_c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotizacion_c  $cotizacion_c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotizacion_c $cotizacion_c)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reportes.listado-reportes')->with([
            'reportes'-> Reporte::where('usuario_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('crear-reportes');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->merge(['user_id' => auth()->user()->id]);
        reporte:create($request->all());
    
        // $reporte = new Reporte();
        //$reporte->user_id = auth()->user()->id;
        //$reporte->descripcion = $request->input('descripcion');
        //$reporte->ubicacion = $request->input('ubicacion');
        //$reporte->fecha_inicio = $request->input('fecha_inicio');
         //$reporte->folio = $request->input('folio');
        //$reporte->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reporte $reporte)
    {
        //
    }
}

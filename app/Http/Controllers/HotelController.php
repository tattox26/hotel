<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\TipoHabitacion;
use App\Models\Acomodacion;
use App\Models\TipoAcomodacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hotel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required|string|unique:hotels',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'nit' => 'required|string|unique:hotels',
            'numero_habitaciones' => 'required|integer',
        ]);         

        try {            
            $hotel_id = Hotel::create($request->all());
            foreach ($request->habitacionTipos as $key => $value) {
                $tipo_habitacion_id = TipoHabitacion::where('nombre',$value['tipo'])->pluck('id')->first();            
                $acomodacion_id = Acomodacion::where('nombre',$value['acomodacion'])->pluck('id')->first();                
                $tipo = new TipoAcomodacion();
                $tipo->hotel_id = $hotel_id->id;
                $tipo->tipo_habitacion_id= $tipo_habitacion_id;
                $tipo->acomodacion_id = $acomodacion_id;
                $tipo->cantidad = $value['cantidad'];
                $tipo->save();
            }            
            return $hotel_id;
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Hubo un error, intente de nuevo'], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function acomodacion(){
        try {
            return Acomodacion::all();
        } catch (\Throwable $th) {
            return $th;
        }        
    }

    public function tipo_habitacion(){        
        try {
            return TipoHabitacion::all();
        } catch (\Throwable $th) {
            return $th;
        }
    }
}

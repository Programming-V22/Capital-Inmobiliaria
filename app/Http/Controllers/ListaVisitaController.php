<?php

namespace App\Http\Controllers;
use App\Models\inmueble;
use App\Models\clientes;
use App\Models\lista_visita;
use Illuminate\Http\Request;

class ListaVisitaController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitas = lista_visita::all();
        return view('visitas.index')->with('lista_visita',$visitas);
    }

//crear controllerr


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inmuebles= inmueble::all();
        $clientsss= clientes::all();

        return view('visitas.create',['inmueble'=>$inmuebles,'clientes'=>$clientsss,]);
    }

        //'clientes'=>$cliente
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $input = $request->all();
        lista_visita::create($input);
        return redirect('visitas')->with('flash_message', 'Visita Agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lista_visita  $lista_visita
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $visitas = lista_visita::find($id);
        return view('visitas.show')->with('lista_visita', $visitas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lista_visita  $lista_visita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Busca el registro de la tabla l_visita (where) el $id sea el que recibo en la petición.
        $inmuebles= inmueble::all();
        $clientsss= clientes::all();
        $visitas= lista_visita::find($id);
        return view('visitas.edit',['lista_visita'=>$visitas,'inmueble'=>$inmuebles,'clientes'=>$clientsss,]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lista_visita  $lista_visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $visitas=lista_visita::find($id);
        $input=$request->all();
        $visitas->update($input);
        return redirect('visitas')->with('flash_message', 'Visita Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lista_visita  $lista_visita
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        lista_visita::destroy($id);
        return redirect('visitas')->with('flash_message', 'Visita Eliminada!');
    }
}

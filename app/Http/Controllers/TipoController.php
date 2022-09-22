<?php

namespace App\Http\Controllers;
use App\Models\tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
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
        $tipos= tipo::all();
        return view('tipos.index')->with('tipo',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        tipo::create($input);
        return redirect('tipos')->with('flash_message', 'Cliente Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipos = tipo::find($id);
        return view('tipos.show')->with('tipo', $tipos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipos= tipo::find($id);
        return view('tipos.edit', compact('tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipos=tipo::find($id);
        $input = $request->all();
        $tipos->update($input);
        return redirect('tipos')->with('flash_message', 'Tipo de Vivienda Actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        tipo::destroy($id);
        return redirect('tipos')->with('flash_message', 'Tipo de Vivienda Eliminada!');
    }
}

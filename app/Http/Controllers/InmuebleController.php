<?php

namespace App\Http\Controllers;
use App\Models\tipo;
use App\Models\inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
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
        $inmuebles= inmueble::all();
        return view('inmuebles.index')->with('inmueble',$inmuebles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos= tipo::all();
        //$cliente=DB::connection('inmobiliaria_infinity')->table('cliente')->select('id','nombre')->get();

        //return view('visitas.create')->with('clientes',$clientsss);
        return view('inmuebles.create',['tipo'=>$tipos]);
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
        if($image=$request->file('portada')){
            $destinationPath = 'img/cargadas';
            $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['portada']="$profileImage";
        }
        inmueble::create($input);
        return redirect('inmuebles')->with('flash_message', 'Inmueble Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show($inmueble)
    {
        $tipos= tipo::all();
        $inmuebles = inmueble::find($inmueble);
        return view('inmuebles.show',['inmueble'=> $inmuebles,'tipo'=>$tipos,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit($inmueble)
    {
        $inmuebles= inmueble::find($inmueble);
        $tipos= tipo::all();

        return view('inmuebles.edit',['inmueble'=>$inmuebles,'tipo'=>$tipos,]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $inmuebles=inmueble::find($id);
        $input=$request->all();
        $inmuebles->update($input);
        return redirect('inmuebles')->with('flash_message', 'Visita Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy($inmueble)
    {
        inmueble::destroy($inmueble);
        return redirect('inmuebles')->with('flash_message', 'Inmueble Eliminado!');
    }
    public function showGallery()
    {
        $inmuebles= inmueble::all();
        return view('inmuebles.gallery')->with('inmuebles',$inmuebles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}

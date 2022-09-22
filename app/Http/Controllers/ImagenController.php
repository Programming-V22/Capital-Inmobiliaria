<?php

namespace App\Http\Controllers;
use App\Models\inmueble;
use App\Models\imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
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
        return view('inmuebles.gallery')->with('inmuebles',$inmuebles);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createid()
    {

        return view('imagenes.create');
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

        if($image=$request->file('nombre_img')){
            $destinationPath = 'img/cargadas';
            $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['nombre_img']="$profileImage";
        }

        imagen::create($input);
        return redirect('imagenes')->with('flash_message', 'Imagen Agregada!');






        //$nameImage= $request->image->getClientOriginalName();
        //$image= new imagen();
        //$image->image=$nameImage;




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagenes = imagen::where('id_inmueble',$id)->get();
        return view('imagenes.show')->with('imagenes',$imagenes);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $imagens= imagen::find($id);
        return view('imagenes.edit', compact('imagens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        imagen::destroy($id);
        return redirect('imagenes')->with('flash_message', 'Imagen Eliminada!');
    }
}

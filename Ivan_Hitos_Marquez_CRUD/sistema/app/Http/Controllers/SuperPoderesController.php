<?php

namespace App\Http\Controllers;

use App\Models\superPoderes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class SuperPoderesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['super_poderes']=superPoderes::paginate(5);
        return view('super_poderes.index',$datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('super_poderes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Tipo'=>'required|string|max:100',
            'AreaDeEffecto'=>'required|string|max:1000',
            'Consecuencias'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:1000',

        ];
        $mensaje=[
            'required'=>'El :attribute es necesario',

        ];
            $this->validate($request,$campos,$mensaje);



       // $datosHeroe = request()->all();
       $datosHeroe=request()->except('_token');
       
       superPoderes::insert($datosHeroe);
       
        //return response()->json($datosHeroe);
        return redirect('super_poderes')->with('mensaje','Superpoder agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\superPoderes  $superPoderes
     * @return \Illuminate\Http\Response
     */
    public function show(superPoderes $superPoderes)
    {
        // 
        

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\superPoderes  $superPoderes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $superPoderes=superPoderes::findOrFail($id);
        return view('super_poderes.edit',compact('superPoderes') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\superPoderes  $superPoderes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Tipo'=>'required|string|max:100',
            'AreaDeEffecto'=>'required|string|max:1000',
            'Consecuencias'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:1000',

        ];
        $mensaje=[
            'required'=>'El :attribute es necesario',

        ];
            $this->validate($request,$campos,$mensaje);

            $datosHeroe = request()->except(['_token','_method']);
    
            superPoderes::where('id','=',$id)->update($datosHeroe);
            $superPoderes=superPoderes::findOrFail($id);
            //return view('Heroe.edit', compact('Heroe') );
            return redirect('/super_poderes')->with('mensaje','Superpoder Editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\superPoderes  $superPoderes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
            superPoderes::destroy($id);
        return redirect('super_poderes')->with('mensaje','Superpoder borrado con éxito');
    }
}

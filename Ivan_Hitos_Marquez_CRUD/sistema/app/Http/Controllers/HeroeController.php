<?php

namespace App\Http\Controllers;

use App\Models\heroes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HeroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Heroes']=heroes::paginate(3);
        return view('heroes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('heroes.create');
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
            'IdentidadSecreta'=>'required|string|max:100',
            'Hobby'=>'required|string|max:1000',
            'Alineacion'=>'required|string|max:100',
            'Medio'=>'required|string|max:100',
            'NumeroDeMuertesAccidentales'=>'numeric',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];
        $mensaje=[
            'required'=>'El :attribute es necesario',
            'Foto.required'=>'la Foto es necesaria'

        ];

            $this->validate($request,$campos,$mensaje);



       // $datosHeroe = request()->all();
       $datosHeroe=request()->except('_token');

       if($request->hasFile('Foto')){
           $datosHeroe['Foto']=$request->file('Foto')->store('uploads','public');
       }
       
        heroes::insert($datosHeroe);
       
        //return response()->json($datosHeroe);
        return redirect('heroes')->with('mensaje','Heroe agregado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\heroes  $Heroe
     * @return \Illuminate\Http\Response
     */
    public function show(heroes $Heroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\heroes  $Heroe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Heroe=heroes::findOrFail($id);
        return view('heroes.edit',compact('Heroe') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\heroes  $Heroe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'IdentidadSecreta'=>'required|string|max:100',
            'Hobby'=>'required|string|max:1000',
            'Alineacion'=>'required|string|max:100',
            'Medio'=>'required|string|max:100',
            'NumeroDeMuertesAccidentales'=>'numeric',
            
           

        ];
        $mensaje=[
            'required'=>'El :attribute es necesario',
        ];
        if($request->hasFile('Foto')){
            $campos=[ 'Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'la Foto es tiene que ser jpeg,png,jpg'];

        }
            $this->validate($request,$campos,$mensaje);
        
        $datosHeroe = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $Heroe=heroes::findOrFail($id);

            Storage::delete('public/'.$Heroe->Foto);

            $datosHeroe['Foto']=$request->file('Foto')->store('uploads','public');
        }

        heroes::where('id','=',$id)->update($datosHeroe);
        $Heroe=heroes::findOrFail($id);
        //return view('Heroe.edit', compact('Heroe') );
        return redirect('heroes')->with('mensaje','Heroe Editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\heroes  $Heroe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Heroe=heroes::findOrFail($id);
        if(Storage::delete('public/'.$Heroe->Foto)){
            heroes::destroy($id);
        }

        
       
        return redirect('heroes')->with('mensaje','Heroe borrado con éxito');

    }
}
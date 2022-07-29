<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos a ocupar
use App\Models\Trabajador;
use App\Models\Puesto;
use App\Models\Municipio;
use App\Models\Genero;

class TrabajadorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-trabajador|crear-trabajador|editar-trabajador|borrar-trabajador', ['only' => ['index']]);
        $this->middleware('permission:crear-trabajador', ['only' => ['create','store']]);
        $this->middleware('permission:editar-trabajador', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-trabajador', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::paginate(5);
        return view('trabajadores.index', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $puestos = Puesto::pluck('nombre', 'nombre')->all();
        $municipios = Municipio::pluck('nombre', 'id')->all();
        $generos = Genero::get();
        return view('trabajadores.crear', compact('puestos','municipios','generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|unique:trabajadores,nombre',
            'puesto' => 'required',
            'telefono' => 'required|numeric|digits_between:10,10|unique:trabajadores,telefono',
            'genero' => 'required',
            'idMunicipio' => 'required'
        ]);

        Trabajador::create($request->all());

        return redirect()->route('trabajadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajador = Trabajador::find($id);
        return view('trabajadores.detalle', compact('trabajador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($trabajador)
    {
        $trabajador = Trabajador::find($trabajador);
        $puestos = Puesto::pluck('nombre', 'nombre')->all();
        $municipios = Municipio::pluck('nombre', 'id')->all();
        $generos = Genero::get();
        return view('trabajadores.editar', compact('trabajador','puestos','municipios','generos'));
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
        $this->validate($request, [
            'nombre' => 'required',
            'puesto' => 'required',
            'telefono' => 'required|numeric|digits_between:10,10',
            'genero' => 'required',
            'idMunicipio' => 'required'
        ]);
        
        $input = $request->all();
        $trabajador = Trabajador::find($id);
        $trabajador->update($input);

        return redirect()->route('trabajadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trabajador::find($id)->delete();
        return redirect()->route('trabajadores.index');
    }
}

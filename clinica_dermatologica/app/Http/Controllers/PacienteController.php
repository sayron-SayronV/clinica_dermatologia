<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:4000/GetpacientesEnc');
        $pacientes = $response->json();
        $pacientesArray = $pacientes[0];

        return view('dash.pacientes', compact('pacientesArray'));
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

        $response = Http::post('http://localhost:4000/InsertpacienteEnc', [
            'PRI_NOMBRE' => $request->get('prim_nombre'),
            'SEG_NOMBRE' => $request->get('seg_nombre'),
            'PRI_APELLIDO' => $request->get('prim_apellido'),
            'SEG_APELLIDO' => $request->get('seg_apellido'),
            'GENERO' => $request->get('genero'),
            'FECHA_NACIMIENTO' => $request->get('fech_nacimiento'),
            'EDAD' => $request->get('edad'),
            'TIPO_ID' => $request->get('tipo_id'),
            'NUMERO_ID' => $request->get('num_id_pac'),
            'ACTIVO_INACTIVO' => $request->get('estado'),
            'CORREO' => $request->get('correo_pac'),
            'TELEFONO_PAC' => $request->get('tel_pac'),
            'DIRECCION' => $request->get('direccion'),
            'DEPARTAMENTO' => $request->get('departamento'),
            'IDENTIFICACION' => $request->get('num_id_enc'),
            'NOM_ENCARGADO' => $request->get('nom_enc'),
            'TELEFONO' => $request->get('tel_enc'),
            'PARENTESCO' => $request->get('parentesco_enc'),
        ]);

        return redirect('/paciente')->with('agregado', 'ok');
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
    public function edit(Request $request, $id)
    {
        $paciente = $request->id;
        $response = Http::get('http://localhost:4000/GetpacientesEn/' . $paciente);
        $pacientes = $response->json();
        $pacientesArray = $pacientes[0][0];

        //dd($pacientesArray);

        return view('dash.editar_pacientes', compact('pacientesArray'));
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


        $cod_paciente = $request->id;
        $response = Http::put('http://localhost:4000/UpdatePacienteEnc', [
            'COD_PACIENTE' => $cod_paciente,
            'PRI_NOMBRE' => $request->get('prim_nombre'),
            'SEG_NOMBRE' => $request->get('seg_nombre'),
            'PRI_APELLIDO' => $request->get('prim_apellido'),
            'SEG_APELLIDO' => $request->get('seg_apellido'),
            'GENERO' => $request->get('genero'),
            'FECHA_NACIMIENTO' => $request->get('fech_nacimiento'),
            'EDAD' => $request->get('edad'),
            'TIPO_ID' => $request->get('tipo_id'),
            'NUMERO_ID' => $request->get('num_id_pac'),
            'ACTIVO_INACTIVO' => $request->get('estado'),
            'CORREO' => $request->get('correo_pac'),
            'TELEFONO_PAC' => $request->get('tel_pac'),
            'DIRECCION' => $request->get('direccion'),
            'DEPARTAMENTO' => $request->get('departamento'),
            'NOM_ENCARGADO' => $request->get('nom_enc'),
            'PARENTESCO' => $request->get('parentesco_enc'),
            'IDENTIFICACION' => $request->get('num_id_enc'),
            'TELEFONO' => $request->get('tel_enc'),

        ]);


        return redirect('/paciente')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $cod_paciente = $request->id;
        $response = Http::delete('http://localhost:4000/DELETEpacientesEnc/' . $cod_paciente);


        return redirect('/paciente')->with('eliminar', 'ok');
    }
}

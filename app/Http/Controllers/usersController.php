<?php

namespace App\Http\Controllers;


use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('usuario')->get();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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
        'nombre' => 'required',
        'apPaterno' => 'required',
        'nacimiento' => 'required|date',
        'email' => 'required|email',
        'contraseña' => 'required',]);



        DB::table('usuario')->insert([
            "Usuario_nombre" => $request->input('nombre'),
            "Usuario_apPaterno" => $request->input('apPaterno'),
            "Usuario_apMaterno" => $request->input('apMaterno'),
            "Usuario_fechaNacimiento" => $request->input('nacimiento'),
            "Usuario_correo" => $request->input('email'),
            "Usuario_contraseña" => $request->input('contraseña'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = DB::table('usuario')->where('Usuario_id', $id)->first();
        return view('usuarios.edit', compact('usuario'));
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
       $usuario = DB::table('usuario')->where('Usuario_id', $id)->update([
            "Usuario_nombre" => $request->input('nombre'),
            "Usuario_apPaterno" => $request->input('apPaterno'),
            "Usuario_apMaterno" => $request->input('apMaterno'),
            "Usuario_fechaNacimiento" => $request->input('nacimiento'),
            "Usuario_correo" => $request->input('email'),
            "Usuario_contraseña" => $request->input('contraseña'),
            "updated_at" => Carbon::now(),
       ]);

       return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('usuario')->where('Usuario_id', $id)->delete();
        return redirect()->route('usuarios.index');
    }
}

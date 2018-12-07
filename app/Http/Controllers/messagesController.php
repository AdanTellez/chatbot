<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class messagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = DB::table('mensaje')->get();

        return view('mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensajes.create');
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
        'titulo' => 'required',
        'mensaje' => 'required',
        'envio' => 'required|date']);



        DB::table('mensaje')->insert([
            "Mensaje_titulo" => $request->input('titulo'),
            "Mensaje_mensaje" => $request->input('mensaje'),
            "Mensaje_fecha" => $request->input('envio'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('mensajes.index');
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
        $usuario = DB::table('mensaje')->where('Mensaje_id', $id)->first();
        return view('mensajes.edit', compact('mensaje'));
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
       $usuario = DB::table('mensaje')->where('Mensaje_id', $id)->update([
            "Mensaje_titulo" => $request->input('titulo'),
            "Mensaje_mensaje" => $request->input('mensaje'),
            "Mensaje_estado" => $request->input('status'),
            "Mensaje_fecha" => $request->input('fecha'),
            "updated_at" => Carbon::now(),
       ]);

       return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('mensaje')->where('Mensaje_id', $id)->delete();
        return redirect()->route('mensajes.index');
    }
}

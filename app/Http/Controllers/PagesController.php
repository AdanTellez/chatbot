<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home()
   {
   	return view('home');
   }

   public function inicio()
   {
   	return view('inicio');
   }

   public function validar(Request $request)
   {
   	$this->validate($request, [
   		'correo' => 'required|email',
   		'contraseña' => 'required']);
   	return view('inicio',$request->all());
   }
}

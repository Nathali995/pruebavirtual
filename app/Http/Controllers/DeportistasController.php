<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deportistas;

class DeportistasController extends Controller
{
    //
	public function show($id) {
    $deportista = Deportistas::findOrFail($id);
    return view('deportista', ['deportista' => $deportista]);
  }
  public function index() {
    $deportistas = Deportistas::all();
    return view('principal', ['deportistas' => $deportistas]);
  }
}

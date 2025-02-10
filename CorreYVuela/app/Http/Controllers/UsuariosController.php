<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }


    public function iniciarSesion(){
        return view('iniciarSesion');
    }


    public function registrarse(){
        return view('resgistrarse');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $usuarios = usuarios::all();
    return view('index', compact('usuarios'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function mostrarInscripcion(string $dni)
    {
        $usuarios = usuarios::where('dni', $dni)->first();
        return view('mostrarInscripcion', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}

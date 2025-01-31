<?php

namespace App\Http\Controllers\api\V1;

use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Models\Usuarios;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuarios::all();
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
    public function store(StoreUsuariosRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'nombre' => 'required'
        ]);
        return Usuarios::create($request->all());
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuarios::find($id);
        return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuariosRequest $request, $id)
    {
        $usuario = Usuarios::find($id);
        return $usuario->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Usuarios::destroy($id);
    }
}

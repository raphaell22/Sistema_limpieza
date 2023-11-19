<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();

        return view('cliente.index',['cliente'=>$cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nombre' => 'Required|max:255',
            'apellido' => 'Required|max:255',
            'cedula' => 'Required|',
            'telefono' => 'Required|',
            'direccion' => 'Required|'
                ]);
                
                $cliente = new Cliente();
                $cliente->nombre = $request->input("nombre");
                $cliente->apellido = $request->input("apellido");
                $cliente->cedula_rif = $request->input("cedula");
                $cliente->telefono = $request->input("telefono");
                $cliente->direccion = $request->input("direccion");
                $cliente->save();

                return view('cliente.message',['msg'=>"registro guardado"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

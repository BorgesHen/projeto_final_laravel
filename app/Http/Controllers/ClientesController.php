<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all(); //::all() para pegar todas as informações da tabela
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'nome' => 'required|string|max:255',
             'telefone' => 'required|string|max:20',
             'email' => 'required|email|max:255|unique:clientes,email',
             'endereco' => 'required|string|max:255',
         ]);
 
         $cliente = new Cliente($validatedData);
         $cliente->save();
 
         return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
     }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:clientes,email,' . $cliente->id,
            'endereco' => 'required|string|max:255',
        ]);

        $cliente->update($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletar(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente excluido com sucesso!');
    }
}

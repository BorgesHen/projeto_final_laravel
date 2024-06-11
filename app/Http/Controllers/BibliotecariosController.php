<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibliotecario;

class BibliotecariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bibliotecarios = Bibliotecario::all(); //::all() para pegar todas as informações da tabela
        return view('bibliotecarios.index', compact('bibliotecarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bibliotecarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bibliotecarios = new Bibliotecario([
            'nome'=> $request->input('nome'),
            'secao'=>$request->input('secao'),
            'horario'=>$request->input('horario'),
        ]);
        $bibliotecarios->save();
        return redirect()->route('bibliotecarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bibliotecarios = Bibliotecario::findOrFail($id);
        return view('bibliotecarios.show', compact('bibliotecarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bibliotecarios = Bibliotecario::findOrFail($id);
        return view('bibliotecarios.edit', compact('bibliotecarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bibliotecarios = Bibliotecario::findOrFail($id);
        
        $bibliotecarios->nome = $request->input('nome');
        $bibliotecarios->horario = $request->input('horario');
        $bibliotecarios->secao = $request->input('secao');
                // Salva as alterações no autor
        $bibliotecarios->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('bibliotecarios.index')->with('success', 'Bibliotecario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bibliotecarios = Bibliotecario::findOrFail($id);
        $bibliotecarios->delete();

        return redirect()->route('bibliotecarios.index')->with('success', 'Bibliotecario excluido com sucesso!');
    }
}

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
        // Validação
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'secao' => 'required|string|max:255',
            'horario' => 'required|string|max:50',
        ]);

        // Cria um novo bibliotecário usando os dados validados
        $bibliotecario = new Bibliotecario($validatedData);
        $bibliotecario->save();

        return redirect()->route('bibliotecarios.index')->with('success', 'Bibliotecário criado com sucesso!');
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
        $bibliotecario = Bibliotecario::findOrFail($id);

        // Validação
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'secao' => 'required|string|max:255',
            'horario' => 'required|string|max:50',
        ]);

        // Atualiza o bibliotecário com os dados validados
        $bibliotecario->update($validatedData);

        return redirect()->route('bibliotecarios.index')->with('success', 'Bibliotecário atualizado com sucesso!');
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

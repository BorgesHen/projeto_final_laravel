<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livro = Livro::all(); //::all() para pegar todas as informações da tabela
        return view('livros.index', compact('livro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'dataLanc' => 'required|date',
        ]);

        // Cria um novo livro com os dados validados
        $livro = new Livro($validatedData);
        $livro->save();

        return redirect()->route('livro.index')->with('success', 'Livro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livro = Livro::findOrFail($id);

        // Validação
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'dataLanc' => 'required|date',
        ]);

        // Atualiza o livro com os dados validados
        $livro->update($validatedData);

        return redirect()->route('livro.index')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return redirect()->route('livro.index')->with('success', 'Livro deletado com sucesso!');
    }
}

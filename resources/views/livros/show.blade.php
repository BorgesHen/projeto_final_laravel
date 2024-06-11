<x-app-layout>
    <head>
    <link rel="stylesheet" href="{{ asset('css/livros/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Livros') }}
        </h2>
    </x-slot>
    <section class="livro-details">
      <div class="livro-content">
        <div class="livro-meta">
          <span class="livro-label">ID:</span>
          <span class="livro-info">{{ $livro->id }}</span>
        </div>
        <div class="livro-meta">
          <span class="cleinte-label">Titulo:</span>
          <span class="livro-info">{{ $livro->titulo }}</span>
        </div>
        <div class="livro-meta">
          <span class="livro-label">Autor:</span>
          <span class="livro-info">{{ $livro->autor }}</span>
        </div>
        <div class="livro-meta">
          <span class="livro-label">Gênero:</span>
          <span class="livro-info">{{ $livro->genero }}</span>
        </div>
        <div class="livro-meta">
          <span class="livro-label">Data de Lançamento:</span>
          <span class="livro-info">{{ $livro->dataLanc }}</span>
        </div>
      </div>
      <a href="{{ route('livro.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>

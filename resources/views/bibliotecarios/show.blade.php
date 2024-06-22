<x-app-layout>
    <head>
    <link rel="stylesheet" href="{{ asset('css/bibliotecarios/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bibliotecarios') }}
        </h2>
    </x-slot>
    <section class="bibliotecario-details">
      <div class="bibliotecario-content">
        <div class="bibliotecario-meta">
          <span class="bibliotecario-label">ID:</span>
          <span class="bibliotecario-info">{{ $bibliotecarios->id }}</span>
        </div>
        <div class="bibliotecario-meta">
          <span class="cleinte-label">Nome:</span>
          <span class="bibliotecario-info">{{ $bibliotecarios->nome }}</span>
        </div>
        <div class="bibliotecario-meta">
          <span class="bibliotecario-label">Seção:</span>
          <span class="bibliotecario-info">{{ $bibliotecarios->secao }}</span>
        </div>
        <div class="bibliotecario-meta">
          <span class="bibliotecario-label">Horário:</span>
          <span class="bibliotecario-info">{{ $bibliotecarios->horario }}</span>
        </div>
      </div>
      <a href="{{ route('bibliotecarios.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>

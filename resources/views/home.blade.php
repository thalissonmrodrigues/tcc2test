{{-- Layout Settings  --}}
@extends('layout')

@section('title_page', 'Início')
@section('icon_title')
  <i class="fa-solid fa-house"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <div class=" content-area home-page row">
    <div class="bg-indigo-100 blue col-md-5"><a href="{{ route('listagem.trabalhos') }}">Trabalhos <i class="fa-solid fa-file"></i></a></div>
    <div class='bg-green-100 col-md-5'><a href="{{ route('listagem.materias') }}">Materias <i class="fa-solid fa-book"></i></a></div>
    <div class="bg-gray-300 col-md-5"><a href="{{ route('listagem.professores') }}">Professores <i class="fa-solid fa-graduation-cap"></i></a></div>
    <div class="bg-blue-200 col-md-5"><a href="{{ route('listagem.alunos') }}">Alunos <i class="fa-solid fa-people-group"></i></a></div>
    <div class="bg-yellow-200 col-md-5"><a href="{{ route('listagem.salas') }}">Salas <i class="fa-solid fa-school"></i></a></div>
    <div class="bg-red-200 col-md-5 disabled"><a>Notas <i class="fa-solid fa-chart-column"></i></a></div>
    <div class="bg-purple-200 col-md-5"><a href="{{ route('configurações', ['user' => 1]) }}">Configurações <i class="fa-solid fa-gear"></i></a></div>
  </div>
@endsection
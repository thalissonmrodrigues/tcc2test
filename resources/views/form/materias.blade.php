@extends('layout')

@php
  $active_menu_header = 'materias';
@endphp

@section('title_page', 'Adicionar Matéria')
@section('icon_title')
  <i class="fa-solid fa-book"></i>
@endsection

@section('content')
  <form action="#" method="POST" class="row g-3 my-2 mx-auto form-adiciona">
    <div class="col-md-12 ps-0">
      <label class="form-label">
        Nome da matéria
        <input required type="text" class="form-control">
      </label>
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">Adicionar</button>
      <a href="{{ route('listagem.materias') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection
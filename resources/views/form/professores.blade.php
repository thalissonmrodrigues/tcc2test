@extends('layout')

@php
  $active_menu_header = 'professores';
@endphp

@section('title_page', 'Adicionar Professor')
@section('icon_title')
  <i class="fa-solid fa-graduation-cap"></i>
@endsection

@section('content')
  <form action="#" method="POST" class="row g-3 my-2 form-adiciona">
    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Nome
        <input required type="text" class="form-control">
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Sobrenome
        <input required type="text" class="form-control">
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Email
        <input required type="email" class="form-control">
      </label>
    </div>

     <div class="col-md-6 ps-0">
     <label class="form-label w-100">
        Senha
        <input required type="password" class="form-control">
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Matéria
        <select class="form-select">
          <option selected>Selecione a matéria</option>
          <option value="id_materia">Dispositivos Moveis</option>
          <option value="id_materia">Dispositivos Moveis</option>
          <option value="id_materia">Dispositivos Moveis</option>
        </select>
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Série
        <select class="form-select">
          <option selected>Selecione a série</option>
          <option value="8">8º</option>
          <option value="7">7º</option>
          <option value="6">6º</option>
        </select>
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Sigla
        <select class="form-select">
          <option selected>Selecione a sigla</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Período
        <select class="form-select">
          <option selected>Selecione o período</option>
          <option value="manha">Manhã</option>
          <option value="tarde">Tarde</option>
          <option value="noite">Noite</option>
        </select>
      </label>
    </div>

    <div class="col-12 ps-0">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox">
          Responsavél da sala
        </label>
      </div>
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">Adicionar</button>
      <a href="{{ route('listagem.professores') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection
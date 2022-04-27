@extends('layout')

@php
  $active_menu_header = 'trabalhos';
@endphp

@section('cta_route')
  {{ route('adiciona.trabalhos')}}
@endsection
@section('cta_btn', 'Adicionar Trabalho')
@section('title_page', 'Listagem de Trabalhos')
@section('icon_title')
  <i class="fa-solid fa-file"></i>
@endsection
@section('active_menu_header', 'trabalhos')

@section('content')
  <div class="row content-area">
    {{-- Filters area --}}
    <div class="filter-area d-none col-md-4">
      <form action="#" method="post" class="filters">
          <h3>Filtros</h3>

          <label>
            Status <br>
            <select class="form-select"  name="status">
              <option selected>Selecione o status</option>
              <option value="pendente">Pendente</option>
              <option value="entregue">Entregue</option>
              <option value="Atrasado">Atrasado</option>
            </select>
          </label>

          <label>
            Data de entrega <br>
            <input type="text" placeholder="DD/MM/YYYY" id="input-delivery-date" class="form-control" name="delivery-date">
          </label>

          <label>
            Materia <br>
            <select class="form-select" name="materia">
              <option selected>Selecione a materia</option>
              <option value="matematica">Matematica</option>
              <option value="portugues">Portugues</option>
              <option value="ciencias">Ciencias</option>
            </select>
          </label>

          <label>
            Série <br>
            <select class="form-select" name="materia">
              <option selected>Selecione a série</option>
              <option value="8">8º</option>
              <option value="7">7º</option>
              <option value="6">6º</option>
            </select>
          </label>

          <label>
            Sigla <br>
            <select class="form-select" name="materia">
              <option selected>Selecione a sigla</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </label>

          <br>
          <input type="submit" value="Filtrar">
      </form>
    </div>

    {{-- Job listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Sala</th>
            <th>Status</th>
            <th>Data de Entrega</th>
            <th>Materia</th>
            <th>Pontos</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('visualiza.trabalho', ['trabalhos' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('editar.trabalhos', ['trabalhos' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection


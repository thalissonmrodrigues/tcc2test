@extends('layout')

@php
  $active_menu_header = 'materias';
@endphp

@section('cta_route')
  {{ route('adiciona.materias')}}
@endsection
@section('cta_btn', 'Adicionar Matéria')
@section('title_page', 'Listagem de Matérias')
@section('icon_title')
  <i class="fa-solid fa-book"></i>
@endsection

@section('content')
  <div class="row content-area">
    {{-- Filters area --}}
    <div class="filter-area d-none col-md-4">
      <form action="#" method="post" class="filters">
          <h3>Filtros</h3>

          <label>
            Professor <br>
            <input type="text" placeholder="Digite o nome do professor" class="form-control" name="professor">
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
            Período <br>
            <select class="form-select" name="materia">
              <option selected>Selecione o período</option>
              <option value="manhã">Manhã</option>
              <option value="tarde">Tarde</option>
              <option value="noite">Noite</option>
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

    {{-- Subjects listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Nome da Materia</th>
            <th>Professor</th>
            <th>Email do Professor</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Trabalhos</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
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


@extends('layout')

@php
  $active_menu_header = 'professores';
@endphp

@section('cta_route')
  {{ route('adiciona.professores')}}
@endsection
@section('cta_btn', 'Adicionar Professor')
@section('title_page', 'Listagem de Professores')
@section('icon_title')
  <i class="fa-solid fa-graduation-cap"></i>
@endsection

@section('content')
  <div class="row content-area">
    {{-- Filters area --}}
    <div class="filter-area d-none col-md-4">
      <form action="#" method="post" class="filters">
          <h3>Filtros</h3>

          <label>
            RGM <br>
            <input type="text" placeholder="Digite o RGM do professor" class="form-control" name="professor">
          </label>

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

    {{-- Teachers listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Professor</th>
            <th>Email do Professor</th>
            <th>Materia</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
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


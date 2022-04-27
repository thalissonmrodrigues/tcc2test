{{-- Layout Settings  --}}
@extends('layout')

@section('cta_route')
  {{ route('adiciona.alunos')}}
@endsection
@section('cta_btn', 'Adicionar Aluno')
@section('title_page', 'Listagem de Alunos')
@section('icon_title')
  <i class="fa-solid fa-people-group"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters area --}}
    <div class="filter-area d-none col-md-4">
      <form action="#" method="post" class="filters">
          <h3>Filtros</h3>

          <label>
            RGM <br>
            <input type="text" placeholder="Digite o RGM do aluno" class="form-control" name="professor">
          </label>

          <label>
            Aluno <br>
            <input type="text" placeholder="Digite o nome do aluno" class="form-control" name="professor">
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

    {{-- Students listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Aluno</th>
            <th>Email do Aluno</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('editar.alunos', ['aluno' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

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


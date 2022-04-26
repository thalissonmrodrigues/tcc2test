@extends('layout')

@section('title_page', 'Trabalho')
@section('cta_route')
  {{ route('listagem.trabalhos')}}
@endsection
@section('cta_btn', 'Voltar')

@section('content')
  <div class="work-info-area d-flex justify-content-between row my-3">
    <div class="work-info col-md-5">
      <div class="row">
        <p><span>Nome: </span>Trabalho de conclusão de curso</p>
        <p class="col-md-4"><span>Status: </span>Pendente</p>
        <p class="col-md-8"><span class="span-break">Data de entrega: </span>20/10/2022</p>
        <p><span>Professor: </span>Eduardo Nascimento Rodrigues</p>
        <p><span>Materia: </span>Dispositivos moveis</p>
        <p><span>Periodo: </span>Tarde</p>
        <p><span>Sala: </span>8º A</p>
        <p><span>Pontos: </span>2.0</p>
      </div>

      <button class="btn btn-card-flip w-75 my-3 m-auto">
        Enviar Trabalho
      </button>
      <button class="btn btn-card-flip cancel w-75 my-3 m-auto d-none">
        Cancelar Envio
      </button>
    </div>

    <div class="card col-md-6">

      <div class="face front">
        <p>Descrição do Tabalho</p>
        <textarea disabled class="form-control">Descrição do trabalho</textarea>

        <p>Arquivos</p>
        <div class="files">
          <a href="#">Arquivo para baixar</a>
          <a href="#">Arquivo para baixar</a>
          <a href="#">Arquivo para baixar</a>
        </div>
      </div>

      <div class="face back d-none">
        <form action="#" method="POST" enctype="multipart/form">
          <label class="w-100">
            <p>Comentario <span>(opcional)</span></p>
            <textarea class="form-control" name="body">Descrição do trabalho</textarea>
          </label>

          <span class="upload-area">
            <input required class="input-file" type="file" name="file[]" multiple="multiple">
            <button type="button" class="btn-upload btn-outline-cyan btn">
              Selecionar Arquivo
              <i class="bi bi-cloud-arrow-up-fill"></i>
            </button>
            <span class="ps-2 file-name"></span>
          </span>

          <button type="submit" class="btn btn-outline-cyan">
            Enviar Trabalho
            <i class="bi bi-send-fill"></i>
          </button>
        </form>
      </div>

    </div>

    <div class="p-0">
      {{-- Work menu tabs --}}
      <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
          <a class="nav-link active" data-page="recebidos">Recebidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-page="corrigidos">Corrigidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-page="enviado">Enviado - Aluno</a>
        </li>
      </ul>

      <div class="row">
        <div class="content table-responsive">
          {{-- Recived listing --}}
          <table class="table mt-3">
            <thead>
              <tr>
                <th>RGM</th>
                <th>Aluno</th>
                <th>Email do Aluno</th>
                <th>Operações</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('correcao.trabalho', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('correcao.trabalho', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('correcao.trabalho', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('correcao.trabalho', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('correcao.trabalho', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          {{-- Sent listing --}}
          <table class="table mt-3 d-none">
            <thead>
              <tr>
                <th>RGM</th>
                <th>Aluno</th>
                <th>Email do Aluno</th>
                <th>Nota</th>
                <th>Operações</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table mt-3 d-none">
            <thead>
              <tr>
                <th>RGM</th>
                <th>Aluno</th>
                <th>Email do Aluno</th>
                <th>Nota</th>
                <th>Operações</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>20727674</td>
                <td>Thalisson Manso Rodrigues</td>
                <td>thalissonrodrigues@test.com</td>
                <td>1.5</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('visualiza.correcao', ['trabalhos' => 1, 'trabalho' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
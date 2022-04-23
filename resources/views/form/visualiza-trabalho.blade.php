@extends('layout')

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
          <p>Comentario <span>(opcional)</span></p>
          <textarea class="form-control" name="body">Descrição do trabalho</textarea>

          <p class="mb-0 mt-2">
            Selecionar Arquivo
            <i class="info-icon bi bi-info-circle-fill"></i>
            <i class="d-none file-info alert alert-info">Tipos aceito: .pdf .docx .odt</i>
          </p>

          <span class="d-flex align-items-center">
            <input required class="input-file" type="file" name="file">
            <button type="button" class="btn-upload btn-outline-cyan btn"><i class="bi bi-cloud-arrow-up-fill"></i></button>
            <span class="ps-2 file-name"></span>
          </span>

          <button type="submit" class="btn btn-outline-cyan">Enviar Trabalho <i class="bi bi-send-fill"></i></button>
        </form>
      </div>

    </div>


  </div>
@endsection
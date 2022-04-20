<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>NSA On-line</title>
</head>
<body>
  <header>
    <div class="container d-flex justify-content-between align-items-center">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container-fluid p-0">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-header" aria-controls="menu-header" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>

          <div class="collapse navbar-collapse" id="menu-header">
            <div class="navbar-nav">
              <a class="nav-link active" href="#">Home</a>
              <a class="nav-link" href="#">Trabalhos</a>
              <a class="nav-link" href="#">Notas</a>
              <a class="nav-link" href="#">Materias</a>
              <a class="nav-link" href="#">Professores</a>
              <a class="nav-link" href="#">Alunos</a>
              <a class="nav-link" href="#">Salas</a>
              <a class="nav-link config" href="#">Configurações</a>
              <a class="nav-link logout" href="#">Sair</a>
            </div>
          </div>

        </div>
      </nav>

      <div class="user-right-header">

        <div class="welcome">
          <span>Bem-Vindo</span>
          <span>nsaonline@tcc.com</span>
        </div>

        <div class="avatar">
          <i class="bi bi-person"></i>

          <div class="menu-avatar d-none">
            <a href="#">Configurações</a>
            <a class="logout" href="#">Sair</a>
          </div>
        </div>

      </div>
    </div>
  </header>

  <div class="sub-menu d-flex justify align-items-center">
    <div class="container">

      <div class="d-flex align-items-center">
        <div class="icon-area">
          <i class="bi bi-journals"></i>
        </div>

        <div class="title">
          <span>ADMINISTRAÇÃO</span>
          <span>Trabalhos</span>
        </div>
      </div>

      <div class="actions">
        <button type="button" class="btn-filter btn btn-outline">
          <i class="bi bi-funnel-fill"></i>
        </button>
        <button type="button" class="btn-add btn btn-outline"> Adicionar Trabalho</button>
      </div>
    </div>
  </div>

  <div class="container">

  </div>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

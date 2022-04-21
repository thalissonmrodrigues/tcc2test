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
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo-nsa.png') }}" alt="logo" width="70">
          </a>
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
    <div class="row content-area">
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

            <br>
            <input type="submit" value="Filtrar">
        </form>
      </div>

      <div class="content table-responsive">
        <table class="table mt-3">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Data de entrega</th>
              <th>Materia</th>
              <th>Pontos</th>
              <th>Operações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>Trabalho de conclusão de curso</td>
              <td>20/10/2022</td>
              <td>Dispositivos moveis</td>
              <td>2.0</td>
              <td>
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-operations btn-outline">ver mais</a>

                  <button type="button" class="btn btn-operations btn-outline btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Remover</a></li>
                  </ul>
                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 col-12 mb-0 text-muted">&copy; 2022 NSA on-line, Inc</p>

      <a href="#" class="col-md-4 col-12 d-flex align-items-center justify-content-center mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="{{ asset('img/logo-nsa.png') }}" alt="logo" width="70">
      </a>

      <ul class="nav col-md-4 col-12 justify-content-end">
        <div class="col row">
          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link px-2">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2">Trabalhos</a></li>

            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link px-2">Notas</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2">Materias</a></li>
            </ul>
          </div>
        </div>

        <div  class="col row">
          <div class="col col-xl-3">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link px-2">Salas</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2">Alunos</a></li>
            </ul>
          </div>

          <div class="col col-xl-9">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link px-2">Professores</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2">Configurações</a></li>
            </ul>
          </div>
        </div>

      </ul>
    </footer>
  </div>

  <script type="text/javascript" src="https://unpkg.com/imask"></script>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

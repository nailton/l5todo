      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">L5 ToDo</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
             <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projetos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/projects/create">Novo projeto</a></li>
                <li><a href="/projects">Meus projetos</a></li>
                <li class="divider"></li>
                <li><a href="/project/stats">Estatísticas</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tarefas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/tasks/create">Nova tarefa</a></li>
                <li><a href="/tasks">Minhas tarefas</a></li>
                <li class="divider"></li>
                <li><a href="/tasks/stats">Estatísticas</a></li>
              </ul>
            </li>

          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/profile">Perfil <span class="sr-only">(current)</span></a></li>
            <li><a href="/logout">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

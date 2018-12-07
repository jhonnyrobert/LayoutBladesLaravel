<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="material-icons">notifications</i>Notificações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="material-icons">home</i>Início</a>
                </li>
                @auth
                  <li class="nav-item">
                      <a class="nav-link" href="# {{-- {{route('logout')}} --}}"> {!!'<i class="material-icons">person</i>'.Auth::user()->name!!}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="# {{-- {{route('logout')}} --}}"><i class="material-icons">logout</i>Sair</a>
                  </li>
                @endauth 
                @guest
                  <li class="nav-item">
                      <a class="nav-link" href="# {{-- {{route('logout')}} --}}"><i class="material-icons">home</i>Entrar</a>
                  </li>
                @endguest
            <!-- your navbar here -->
            </ul>
        </div>
    </div>
</nav>
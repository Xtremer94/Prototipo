<header style="padding: 0; margin:0">
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" style="padding: 0; margin:0; " >
        <div class="container-fluid">
            
            <a class="navbar-brand" href="{{ route('home') }}" style="font-family: Franklin Gothic Medium;">
                DIGI-SOLUTIONS
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item {{ Request::is('/') ? 'li-active' : '' }}">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('client') ? 'li-active' : '' }}">
                    <a class="nav-link {{ Request::is('client') ? 'active' : '' }}" href="{{ route('client.index') }}">Gestionar clientes </a>
                </li>
                <li class="nav-item {{ Request::is('product') ? 'li-active' : '' }}">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}"  href="{{ route('product.index') }}">Gestionar productos </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

</header>

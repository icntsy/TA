<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #02af67">
    <div class="container">
        <a class="navbar-brand" href="/dokumentasi_api">DOKUMENTASI API</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/dokumentasi_api"><i class="fa-solid fa-folder-open"></i>
                        Integrasi</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i>LOGOUT</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

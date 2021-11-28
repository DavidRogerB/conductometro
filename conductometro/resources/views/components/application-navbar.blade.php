

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: rgb(164,127,3);
background: linear-gradient(97deg, rgba(164,127,3,1) 28%, rgba(253,228,45,1) 100%);">
    <div class="container-fluid" >
        <a class="navbar-brand" href="/">
            <img src="/images/logo2intento.png" width="150px" data-aos="flip-right"/></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link" :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sessão</a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Registe-se</a>
                        @endif
                    @endauth
                @endif



                {{-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a> --}}
            </div>
        </div><a href="tel:282352127" data-aos="fade-left" style="width: 200px">
            <i class="fas fa-phone-square-alt text-dark"></i><span>282352127</span>
        </a>
    </div>
</nav>


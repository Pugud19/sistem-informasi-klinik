<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Amreta<span class="text-warning">Net</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollTo" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollTo" href="#paket">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollTo" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ __('logout')}}">Logout</a>
            </li> --}}
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ __('login')}}">Login</a>
            </li>
            @else
            @if(Auth::user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ __('dashboard')}}">{{ __('Dashboard')}}</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout')}}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
            @else
            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout')}}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
            @endif
            @endguest

          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Mari Bergabung bersama Amreta!</h1>
            <p class="text-lg text-grey mb-5">Amreta merupakan penyedia layanan internet yang ramah di kantong dan sangat cocok digunakan di era seperti ini.Bergabunglah untuk solusi internet anda yang sangat baik dan cepat</p>
            <a href="#" class="btn btn-primary btn-split">Langganan <div class="fab"><i class="fa fa-wifi" aria-hidden="true"></i></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="{{ asset('img/bg-core/kumpul.png')}}" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

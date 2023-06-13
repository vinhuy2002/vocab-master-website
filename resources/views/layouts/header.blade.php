<nav class="navbar navbar-expand-lg primary-color-web">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-app.png') }}" style="width: 50px; height: 50px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vocabulary" style="color: white;">Vocabulary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/translate" style="color: white;">Translate</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link disabled text-muted" href="/bookmark" style="color: white;">Bookmark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-muted" href="/history" style="color: white;">History</a>
                    </li> --}}
                </ul>
                <ul class="navbar-nav ms-auto me-3">
                    @if (session()->has('name'))
                    <div class="dropdown">
                        <button class="btn custom-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Hello, {{ session('name') }}
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('adminManager') }}">Admin</a></li>
                          <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                      </div>


                    @else
                        <li class="nav-item">
                            <div style="padding: 8px;"><a class="nav-link" href="/login" style="color: white;">
                                    Login
                                </a></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register" style="color: white;">
                                <div class="custom-btn">
                                    Register
                                </div>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

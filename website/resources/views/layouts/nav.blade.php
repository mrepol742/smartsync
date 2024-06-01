<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">SmartSync</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() ==  '/' ? 'text-custom' : ''  }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() ==  'cart' ? 'text-custom' : ''  }}" aria-current="page" href="/cart">Cart</a>
                </li>

                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() ==  'login' ? 'text-custom' : ''  }}" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() ==  'register' ? 'text-custom' : ''  }}" href="/register">Register</a>
                </li>
                @else
                <div class="dropdown">
                    <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-regular fa-user"></i> {{ Auth::user()->username}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        {{-- Not Implemented as of now
                    @if(Auth::user()->email_verified_at)
                    <a class="dropdown-item" href="/email/verify">
                        <i class="fa-solid fa-paper-plane px-2"></i> {{ __('Verify Email') }}
                        </a>
                        @endif
                        !--}}

                        <a class="dropdown-item" href="/password/reset">
                            <i class="fa-solid fa-key px-2"></i>{{ __('Reset Password') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket px-2"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                @endif
            </ul>
        </div>
    </div>
</nav>
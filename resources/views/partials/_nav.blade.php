<!-- ==== Header menu ======== -->
<header class="navbar navbar-expand-md navbar-light bg-light">
    <a href="{{ route('index') }}" class="navbar-brand">
        <img src="{{ asset('images/titre.png') }}" alt="Logo du site">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#myCollapse"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="myCollapse">
        <nav>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('index') }}"
                        class="nav-link {{ route_active('index') }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('product.index') }}"
                        class="nav-link {{ route_active('product.index') }}">Products</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="nav-link">Category</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Providers</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Propos</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('cart_index') }}"
                        class="nav-link {{ route_active('cart_index') }}">Panier <span
                            class="badge bage-pill badge-dark"> {{ Cart::getContent()->count() }} </span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
               @guest

               <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>

                @else

                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                    data-toggle="dropdown">{{auth()->user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="{{ route('dashboard') }}" class="nav-link">Mes commandes</a></li>
                        <li class="dropdown-item"><a href="{{route('logout')}}" class="nav-link"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout')}}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                    </ul>
                </li>

                @endguest
            </ul>
        </nav>
        @if (Route::is('product.index'))
            <form action="" class="ml-auto">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search..." id="myInput">
                    <div class="input-group-append">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</header>
<!-- ======= End Header ========== -->

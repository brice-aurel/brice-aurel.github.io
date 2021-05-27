<!-- ==== Header menu ======== -->
<header class="navbar navbar-expand-md navbar-light bg-light">
  <a href="{{ route('index') }}" class="navbar-brand">
    <img src="{{ asset('images/titre.png') }}" alt="Logo du site">
  </a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#myCollapse"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="myCollapse">
    <nav>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ route('index') }}" class="nav-link {{ route_active('index') }}">Home</a></li>
        <li class="nav-item"><a href="{{ route('product.index') }}" class="nav-link {{ route_active('product.index') }}">Products</a></li>
        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#" class="">Category</a></li>
            <li class="dropdown-item"><a href="#" class="">Providers</a></li>
            <li class="dropdown-item"><a href="#" class="">Propos</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="{{ route('cart_index') }}" class="nav-link {{ route_active('cart_index')}}">Panier</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </nav>
    <form action="" class="ml-auto">
      <div class="input-group">
        <input type="search" name="search" class="form-control" placeholder="Search..." id="myInput">
        <div class="input-group-append">
          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</header>
<!-- ======= End Header ========== -->
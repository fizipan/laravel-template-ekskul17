<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="{{ route('product.index') }}">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="/about-us">About Us</a>
        </li>
      </ul>
    </div>

    @auth
    <div class="d-flex align-items-center">
       <div class="me-4">
        {{ Auth::user()->name }}
       </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" style="width: 100px;" class="btn btn-outline-primary">
                Logout
            </button>
        </form>
    </div>
    @else
     <div class="d-flex">
        <a href="{{ route('login') }}" style="width: 100px;" class="btn btn-primary me-2">
            Login
        </a>
        <a href="{{ route('register') }}" style="width: 100px;" class="btn btn-outline-primary">
            Register
        </a>
    </div>
    @endauth
  </div>
</nav>

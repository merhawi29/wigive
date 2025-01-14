

<nav class="navbar navbar-expand-lg navbar-dark bg-dark  d-lg-block fixed-top shadow  mb-5">
    <div class="container-fluid ">
      <button class="navbar-toggler  d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-auto" id="navbarToggleExternalContent" >
        <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('products') ? 'active' : ''  }}"  href="{{ url('/products') }}">Product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->is('carts') ? 'active' : '' }}"  href="{{ url('/carts') }}" tabindex="-1" aria-disabled="true">Cart</a>
          </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('Contact') ? 'active' : '' }}"  href="{{ url('/Contact') }}">Contact</a>
              </li>

        </ul>
        <form class="d-flex me-3">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @include('layouts.header')
        </div>
    </div>

</nav>


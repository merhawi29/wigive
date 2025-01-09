<!-- filepath: /d:/project/HCI/Farming-System/resources/views/products/action.blade.php -->
<x-app-layout>

    @include('layouts.navbar')

    <section class="py-5 overflow-hidden mt-5">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <div class="container-lg">
          <div class="row">
            <div class="col-md-12">

              <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                <h2 class="section-title">Category</h2>

                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn-success me-2">View All</a>
                  <div class="swiper-buttons">
                    <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                    <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

              <div class="category-carousel swiper">
                <div class="swiper-wrapper">
                  @foreach($categories as $category)
                    <a href="{{ route('carts.show', $category->id) }}" class="nav-link swiper-slide text-center">
                      <img src="{{ asset('images/' . $category->url) }}" class="rounded-circle" alt="{{ $category->name }}">
                      <h4 class="fs-6 mt-3 fw-normal category-title">{{ $category->name }}</h4>
                    </a>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="pb-5">
        <div class="container-lg">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header d-flex flex-wrap justify-content-between my-4">
                <h2 class="section-title">Products</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
                @foreach($producted as $product)
                <form action="{{ route('cart.add') }}" method="post">
                    @csrf
                  <div class="col">
                    <div class="product-item">
                      <figure>
                        <a href="{{ route('product.show', $product->id) }}" title="{{ $product->name }}">
                          <img src="{{ asset('Image/' . $product->url) }}" alt="{{ $product->name }}" class="tab-image rounded-circle img-fluid">
                        </a>
                      </figure>
                      <div class="d-flex flex-column text-center">
                        <h3 class="fs-6 fw-normal">{{ $product->name }}</h3>
                        <div class="d-flex justify-content-center align-items-center">
                          <span class="text-dark fw-semibold">${{ $product->price }}</span>
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="{{ $product->quantity }}" type="number"
                          class="form-control form-control-sm" style="width: 50px;" />

                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                        </div>
                        {{-- <div class="d-flex flex-row"> --}}

                          {{-- </div> --}}
                        <div class="button-area p-3 pt-0">

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <x-button type="submit" class="btn-success" text="Add to Cart" />
                            {{-- <button type="submit" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">Add  Cart</button> --}}
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('layouts.footer')
</x-app-layout>


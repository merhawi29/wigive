<x-app-layout>


    <section class="py-5 overflow-hidden">
        <div class="container-lg">
          <div class="row">
            <div class="col-md-12">

              <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                <h2 class="section-title">Category</h2>

                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn-primary me-2">View All</a>
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
                  @foreach($product as $category)
                    <a href="{{ route('carts.show', $category->id) }}" class="nav-link swiper-slide text-center">
                      <img src="{{ asset('images/' . $category->thumbnail) }}" class="rounded-circle" alt="{{ $category->name }}">
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

            <h2 class="section-title">Best selling products</h2>

            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary rounded-1">View All</a>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            @foreach($products as $product)
              <div class="col">
                <x-product-item :product="$product" />
              </div>
            @endforeach
          </div>
          <!-- / product-grid -->

        </div>
      </div>
    </div>
  </section>
</x-app-layout>





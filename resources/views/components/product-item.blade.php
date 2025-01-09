<div class="product-item">
    <figure>
      <a href="{{ route('carts.show', $product->id) }}" title="{{ $product->name }}">
        <img src="{{ asset('Image/' . $product->url) }}" alt="{{ $product->name }}" class="tab-image rounded-circle img-fluid">
      </a>
    </figure>
    <div class="d-flex flex-column text-center">
      <h3 class="fs-6 fw-normal">{{ $product->name }}</h3>
      <div>
        <span class="rating">
          @for($i = 0; $i < 5; $i++)
            <svg width="18" height="18" class="text-warning">
              <use xlink:href="#{{ $i < $product->rating ? 'star-full' : 'star-half' }}"></use>
            </svg>
          @endfor
        </span>
        <span>({{ $product->reviews_count }})</span>
      </div>
      <div class="d-flex justify-content-center align-items-center gap-2">
        <del>${{ $product->original_price }}</del>
        <span class="text-dark fw-semibold">${{ $product->discounted_price }}</span>
        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">{{ $product->discount_percentage }}% OFF</span>
        <span>Price : {{ $product->price }}</span>
      </div>
      <div class="button-area p-3 pt-0">
        <div class="row g-1 mt-2">
          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
        </div>
      </div>
    </div>
  </div>

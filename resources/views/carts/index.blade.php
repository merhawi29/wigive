<x-app-layout>

    @include('layouts.navbar')

<section class="h-100 h-custom mt-5">
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
    <div class="container h-100 py-5 ">

      <div class="row d-flex justify-content-center align-items-center h-100 mt-5"> ">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="h5">Shopping Bag</th>
                  <th scope="col">Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
            @foreach ($parsedCart as $item)

                  <th scope="row">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('Image/' . $item['url']) }}" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Thinking, Fast and Slow</p>
                        <p class="mb-0">Daniel Kahneman</p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">{{ $item['name'] }}</p>
                  </td>
                  <td class="align-middle">
                    <div class="d-flex flex-row">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
                      <p class="mb-0" style="font-weight: 500;">{{ $item['quantity'] }}</p>
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">{{ $item['price'] }}</p>
                  </td>
                  <td class="align-middle">
                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                  </td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>

          @if ($parsedCart)
            <div class="d-flex justify-content-end">
                <a href="{{ route('cart.discard') }}" >
                    <button type="button" class="btn btn-danger">Clear Cart</button>
                </a>
            </div>
            <div class="card shadow-2-strong mb-5 mb-lg-0 " style="border-radius: 16px;">
                <div class="card-body p-4 ">


          <div class="col-lg-4 col-xl-3 ">
            <div class="d-flex justify-content-between" style="font-weight: 500;">
              <p class="mb-2">Subtotal</p>
              <p class="mb-2">${{ $total }}</p>
            </div>
            <div class="d-flex justify-content-between" style="font-weight: 500;">
                <p class="mb-0">Shipping</p>
                <p class="mb-0">${{ $total ? 2.99 : 0 }}</p>
              </div>

              <hr class="my-4">



          </div>
          <div class="col">
            <div class="text-start mt-2 mt-sm-0">
                <a href="{{ route('payment') }}" class="btn btn-success">
                    <i class="mdi mdi-cart-outline me-1"></i> Continue </a>
            </div>
        </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>

</x-app-layout>

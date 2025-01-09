@extends('admin.body')
@section('content')
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>
                <div class="form-group">
                    <label for="url">Product Image</label>
                    <input type="file" name="url" class="form-control">
                    <img src="{{ asset('Image/' . $product->url) }}" alt="{{ $product->name }}" class="img-fluid mt-2" style="width: 150px;">
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>


@endsection



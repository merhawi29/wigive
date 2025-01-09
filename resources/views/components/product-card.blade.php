<!-- filepath: /d:/project/HCI/Farming-System/resources/views/components/product-card.blade.php -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        @foreach ($producted as $item)

        @endforeach
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="url">
            <input type="hidden" name="name" value="{{ $item->name }}">
            <input type="hidden" name="price" value="{{ $item->price }}">
            <input type="hidden" name="quantity" value="{{ $item->quantity }}">
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-success">Add product</button>
            </div>
        </form>
    </div>
</div>

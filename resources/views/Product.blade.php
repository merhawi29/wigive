{{-- @extends('layouts.all') --}}
<x-guest-layout>
    @include('layouts.navbar')
    <h1>Vegatables</h1>
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
<h1>Vegetables</h1>
<div class="card-group">
    <x-product-card
        image="Image/Vagatables/fresh-vega.jpg"
        name="Fresh-vegetables"
        price="100"
        quantity="3"
    />
    <x-product-card
        image="Image/Vagatables/images.jpg"
        name="vegetabels"
        price="237"
        quantity="7"
    />
    <x-product-card
        image="Image/Vagatables/canned-vega.jpg"
        name="canned-vegetables"
        price="300"
        quantity="5"
    />
</div>
    <h1>furit</h1>
<div class="card-group">
    <x-product-card
        image="Image/Furit/canned-furit.jpg"
        name="canned-fruit"
        price="300"
        quantity="5"
    />
    <x-product-card
        image="Image/Furit/dried furit.jpg"
        name="dried-fruit"
        price="300"
        quantity="5"
    />
    <x-product-card
        image="Image/Furit/fruitfreshdirect.jpg"
        name="fruitfreshdirect"
        price="300"
        quantity="5"
    />
</div>
    <h1>Eggs</h1>
<div class="card-group">
    <x-product-card
        image="Image/eggs/xlarge.jpg"
        name="xlarge"
        price="16"
        quantity="5"
    />
    <x-product-card
        image="Image/eggs/large.jpg"
        name="large"
        price="16"
        quantity="5"
    />
    <x-product-card
        image="Image/eggs/medium.jpg"
        name="medium"
        price="16"
        quantity="5"
    />
</div>
    <h1>Kitchen</h1>
<div class="card-group">
    <x-product-card
        image="Image/Kitchen/dessert.jpg"
        name="dessert"
        price="160"
        quantity="2"
    />
    <x-product-card
        image="Image/Kitchen/hamburger.jpg"
        name="hamburger"
        price="160"
        quantity="2"
    />
    <x-product-card
        image="Image/Kitchen/sausager.jpg"
        name="sausager"
        price="160"
        quantity="2"
    />
    <x-product-card
        image="Image/Kitchen/toast.jpg"
        name="toast"
        price="160"
        quantity="2"
    />
</div>
    <h1>Beef</h1>
<div class="card-group">
    <x-product-card
        image="Image/beef/beef.jpg"
        name="beef"
        price="200"
        quantity="3"
    />
    <x-product-card
        image="Image/beef/bone-in beef.jpg"
        name="bone-in beef"
        price="200"
        quantity="3"
    />
    <x-product-card
        image="Image/beef/boneless.jpg"
        name="boneless"
        price="200"
        quantity="3"
    />
    <x-product-card
        image="Image/beef/offal.jpg"
        name="offal"
        price="200"
        quantity="3"
    />
</div>
    <h1>Special</h1>
<div class="card-group">
    <x-product-card
        image="Image/special/executive-food.jpg"
        name="food"
        price="500"
        quantity="6"
    />
    <x-product-card
        image="Image/special/executive-fruit.jpg"
        name="fruit"
        price="500"
        quantity="6"
    />
    <x-product-card
        image="Image/special/executive-meat.jpg"
        name="meat"
        price="500"
        quantity="6"
    />
    <x-product-card
        image="Image/special/executive-vegetables.jpg"
        name="vegetables"
        price="500"
        quantity="6"
    />
    <x-product-card
        image="Image/fish/fish.jpg"
        name="fish"
        price="200"
        quantity="3"
    />
</div>


    {{-- @include('layouts.footer') --}}

</x-guest-layout>


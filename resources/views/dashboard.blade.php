<x-app-layout>
    <x-slot name="header">

    </x-slot>

<div class="container text-center">
    <h1>Products</h1>

    <div class="row">

        @foreach ($products as $product)


        <div class="card col-4 mb-3 p-1">
            <img class="card-img-top" src="{{asset('image/gggg.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-body text-center">
                <a href="{{ route('addCart', $product->id) }}" class="card-link">Add to cart</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

</x-app-layout>

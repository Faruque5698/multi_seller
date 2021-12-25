<x-app-layout>
    <x-slot name="header">
        Cart
    </x-slot>

<div class="container text-center">
    <h1>Cart</h1>


    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quiantity</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>

                    <input type="number" value="{{$item->quantity}}" >
                </td>
                <td><a href="">Delete</a>||<a href=""></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>






    </div>
</div>

</x-app-layout>

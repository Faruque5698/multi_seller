<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id){
        $product = Product::find($id);
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect('allCart');

    }

    public function index(){
        $cartItems = \Cart::Session(auth()->id())->getContent();
        return view('cart.index',[
            'cartItems'=>$cartItems
        ]);
    }
}

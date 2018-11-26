<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Session;

class BuyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $cart =  Session::has('cart') ? Session::get('cart') : new Cart();
        return view('buy.index', ['products' => $products, 'cart' => $cart]);
    }

    public function cart()
    {
        $cart =  Session::has('cart') ? Session::get('cart') : new Cart();
        return view('buy.cart', ['cart' => $cart]);
    }

    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $cart =  Session::has('cart') ? Session::get('cart') : new Cart();
        $cart->add($product, $product->id);
        Session::put('cart', $cart);
        Session::save();
        return redirect()->route('buy');
    }

    public function deleteFromCart(Request $request, $id){
        $cart =  Session::get('cart');
        $cart->delete($id);
        Session::put('cart', $cart);
        Session::save();
        return redirect()->route('cart');
    }
}

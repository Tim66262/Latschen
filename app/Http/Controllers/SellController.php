<?php

namespace App\Http\Controllers;

use Mail;
use helpers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SellController extends Controller
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
        return view('sell.index');
    }


    public function addProduct(Request $request) 
    { 
        //Mayby make this stuff dynamic
        if(count($request->all()) == 6){
            $path=$request->file('imgUpload1')->store('public');
            $product = new \App\Product([
                'name' => $request->get('shoesname'),
                'seller_id' => Auth::user()->id,
                'quality' => $request->get('shoesquality'),
                'cardboard' => $request->get('shoescardboard') == 'Ja' ? 1 : 0,
                'price' => $request->get('shoesprice'),
                'imagePath' => Storage::url($path)
            ]);
            $product->save();
        }
        helpers::addProductRequest($product);
        return redirect()->route('buy');
    }
}

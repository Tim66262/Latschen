@extends('layouts.app')

@section('navbar-items')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i> Warenkorb</a>
    </li>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kaufen</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" align="center">
                <h3>Oh, du willst Schuhe kaufen!?</h3>
            </div>
        </div>
        <div class="row justify-content-center">
                @foreach($products as $product)
                    <div class="card" style="width: 18rem; float: left; margin: 25px;">
                        <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}.- | {{ $product->users->name }}</p>
                            @if($product->cardboard != 0)
                                <p class="card-text">{{ $product->quality }} | Mit Verpackug</p>
                            @else
                            <p class="card-text">{{ $product->quality }} | Ohne Verpackung</p>
                            @endif
                            @if(!in_array($product, $cart->items))
                                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-primary">Zum Warenkorb hinzufügen</a>
                            @else
                                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-danger disabled">Schon im Warenkorb</a>
                            @endif
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('navbar-items')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/buy') }}">Kaufen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Warenkorb</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" align="center">
                <h3>Das ist dein Warenkorb</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($cart->items as $product)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    {{ $product->name }} | {{ $product->quality }} | {{ $product->users->name }}
                                </div>
                                <div class="col-md-2">
                                    {{ $product->price }}.-
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('deleteFromCart', ['id' => $product->id]) }}"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    Versandkosten <i class="fas fa-info-circle" title="Sowohl Käufer wie auch Verkäufer müssen jeweils 7.- für den Versand bezahlen. Damit wird gewährleistet, dass niemand betrogen wird" data-toggle="tooltip"></i>
                                </div>
                                <div class="col-md-2">
                                    7.-
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
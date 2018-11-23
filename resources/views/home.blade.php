@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" align="center">
            <h4>Was möchtest du tun {{ Auth::user()->name }}?</h4>
        </div>
        <div class="col-md-8" align="center">
            <a role="buton" class="btn btn-primary" href="{{ url('/buy') }}">Kaufen</a>
            <a role="buton" class="btn btn-secondary" href="{{ url('/sell') }}">Verkaufen</a>
        </div>
    </div>
</div>
@endsection

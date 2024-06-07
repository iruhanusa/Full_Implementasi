@extends('layouts.master')
@section('title', 'Detail Product')

@section('content')
<div class="container w-100 mt-lg-5 mb-lg-3 d-flex justify-content-center">
    <form method="POST" action="{{ route('dashboard.products.progress-transaction',['id' => $product->id])}}" class="col-md-10 offset-1 rounded my-lg-3 px-6 py-6 me-3" style="border: 3px solid black">
        @csrf
        <h2 class="fw-bold d-flex justify-content-center">Detail Produk</h2>
        <div class="container w-100 mt-lg-5 mb-lg-3 d-flex justify-content-center">
            <img class="w-100" src="{{ asset($product->image) }}">
            <div class="container">
                <h2 class="fw-bold">{{ $product->name }}</h2>
                <div class="container d-flex justify-content-around">
                    <p>Stok : {{ $product->stock }}</p>
                    <p class="rounded px-3 py-1 bg-primary w-50 mx-auto">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
                <div class="container">
                    <p>Kondisi : {{ $product->condition }}</p>
                    <p>{{ $product->weight }} gr</p>
                </div>
                <p> Deskripsi : {{ $product->description }}</p>
            </div>
        </div>
        <button class="btn btn-lg btn-success w-100" type="submit">Checkout</button>
    </form>
    
</div>
@endsection
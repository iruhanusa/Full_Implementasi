@extends('layouts.master')
@section('title', 'Invoice Product')

@section('content')
<div class="container mt-lg-4 mb-lg-3 d-flex justify-content-center">
    <h1 class="fw-bold text-center">Invoice Transaksi</h1>
    <h4 class="fw-bold"> Detail Transaksi</h4>
    <br>
    <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-center" >
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>No. Invoice</p>
            <p>{{$transaction->no_invoice}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Admin Fee</p>
            <p>Rp. {{$transaction->admin_fee}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Kode Unik</p>
            <p>{{$transaction->id}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Total</p>
            <p>{{$transaction->total}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Metode Pembayaran</p>
            <p> VA BRI</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Status</p>
            <p class="rounded px-3 py-1 bg-danger w-50 mx-auto">Unpaid</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Tanggal Kadaluarsa</p>
            <p>{{ $transaction->updated_at->addYear()->format('Y-m-d H:i:s') }}</p>
        </div>
    </div>
    <h4 class="fw-bold"> Detail Produk yang dibeli</h4>
    <br>
    <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-center">
        <img src="{{ asset($transaction->product->image) }}">
        <div class="container">
            <h2 class="fw-bold">{{ $transaction->product->name }}</h2>
            <div class="container d-flex justify-content-around">
                <p>Stok : {{ $transaction->product->stock }}</p>
                <p class="rounded px-3 py-1 bg-primary w-50 mx-auto">Rp. {{ number_format($transaction->product->price, 0, ',', '.') }}</p>
            </div>
            <div class="container">
                <p>Kondisi : {{ $transaction->product->condition }}</p>
                <p>{{ $transaction->product->weight }} gr</p>
            </div>
        </div>
    </div>
    <h4 class="fw-bold"> Data Pembeli</h4>
    <br>
    <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-center">
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Nama</p>
            <p>{{$transaction->user->name}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Email</p>
            <p>{{$transaction->user->email}}</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Handphone</p>
            <p>-</p>
        </div>
        <div class="container mt-lg-4 mb-lg-3 d-flex justify-content-around">
            <p>Alamat</p>
            <p>{{$transaction->user->address}}</p>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', 'Profile Page')

@section('content')
    <div class="container w-75 mt-lg-5 mb-lg-3 d-flex justify-content-center">
        <div class="col-md-5 offset-1 rounded my-lg-5 px-3 py-3 me-3" style="border: 3px solid black">
            <h3 class="fw-bold text-center">Halaman Dashboard User</h3>
            <div class="d-flex justify-content-between">
                <div class="w-50">
                    <p class="fw-bold">Nama Akun</p>
                    <p class="fw-bold">Email</p>
                    <p class="fw-bold">Gender</p>
                    <p class="fw-bold">Umur</p>
                    <p class="fw-bold">Tanggal Lahir</p>
                    <p class="fw-bold">Alamat</p>
                </div>
                <div>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->gender }}</p>
                    <p>{{ \Carbon\Carbon::parse($user->birth)->age }} tahun</p>
                    <p>{{ \Carbon\Carbon::parse($user->birth)->format('d-m-Y') }}</p>
                    <p>{{ $user->address }}</p>
                </div>
            </div>
            <div class="container w-75 mt-lg-5 mb-lg-3 d-flex justify-content-center">
                <a href="#" class="btn btn-md btn-warning fw-bold my-auto me-1">Export Data</a>
                <a href="{{ route('login') }}" class="btn btn-md btn-danger fw-bold my-auto me-1">Logout</a>
            </div>
        </div>
    </div>
@endsection

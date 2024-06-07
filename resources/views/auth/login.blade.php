@extends('layouts.master')
@section('title', 'Login Page')

@section('content')

    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded pt-3 pb-3">
            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-4">
                        
                        <!-- Error message -->
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card bg-white w-100">
                            <div class="card-body">
                                <h4 class="text-center fw-bold">Halaman Login Pengguna</h4>
                                <form action="{{ route('login.authenticate') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" placeholder="Masukkan Email Kamu" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" required placeholder="Masukkan Password Kamu">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <p>Belum punya akun? <b><u><a href="{{ route('register') }}">Daftar Sekarang</a></u></b></p>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                    </div>
                                    <p class="text-center mt-3">atau</p>
                                    <div class="d-flex justify-content-center mt-2">
                                        <a href="{{ route('login_google') }}" class="btn btn-sm btn-primary">
                                            <img src="https://clipground.com/images/google-logo-clipart-transparent.png" alt="" width="27px">
                                            Login Google
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

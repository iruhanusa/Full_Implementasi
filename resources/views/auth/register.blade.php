@extends('layouts.master')
@section('title', 'Register Page')

@section('content')
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded pt-3 pb-3">
        
            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-4">

                        <!-- error message -->
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card bg-white w-100">
                            <h4 class="text-center fw-bold mt-4">Halaman Registrasi User</h4>
                        
                            <div class="card-body">
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Lengkap Kamu" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Kamu" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password Kamu" required>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Password Kamu" required>
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                                            <option selected disabled>Pilih Jenis Kelamin Kamu</option>
                                            <option value="male">Laki-Laki</option>
                                            <option value="female">Perempuan</option>
                                        </select>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Masukkan Umur Kamu" required>
                                        @error('age')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" required>
                                        @error('dob')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" placeholder="Masukkan Alamat Kamu" required></textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                            <option selected disabled>Select Role</option>
                                            <option value="superadmin">SuperAdmin</option>
                                            <option value="user">User</option>
                                        </select>
                                        @error('role')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <button type="submit" class="btn btn-lg btn-primary w-100">Register</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@extends('utils.layouts.main')
@include('utils.layouts.title')

@section('content')
    <div class="formregister col-md-6 offset-md-3">
        <div class="row">
            <div class="text-center">
                <img class="oppoimg" src="{{ $oppopath }}" alt="{{ $oppopath }}">
            </div>
            <div class="card">
                <div class="card-body">
                    <label>REGISTER</label>
                    <hr>

                    <form action="/register" method="POST">
                        {{-- Security & Create Token --}}
                        @csrf

                        <div class="form">
                            <label>Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form">
                            <label>Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" name="username" placeholder="Username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form">
                            <label>Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn btn-login btn-block btn-success">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tanyaakun text-center">
                Sudah punya akun? <a href="/">Silahkan Login</a>
            </div>
        </div>
    </div>
@endsection

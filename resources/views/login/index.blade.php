@extends('utils.layouts.main')
@include('utils.layouts.title')

@section('content')
    <div class="formlogin col-md-6 offset-md-3">
        <div class="row">
            <div class="text-center">
                <img class="oppoimg" src="{{ $oppopath }}" alt="{{ $oppopath }}">
            </div>
            <div class="card">
                <div class="card-body">
                    <label>LOGIN</label>
                    <hr>

                    <form action="/" method="post">
                        {{-- Security & Create Token --}}
                        @csrf

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
                            <button class="btn btn-login btn-block btn-success">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tanyaakun text-center">
                Belum punya akun? <a href="/register">Silahkan Register</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('utils.common.sweetalert')
@endsection

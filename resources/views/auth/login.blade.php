@extends('layouts.auth')
@include('global.import')
@section('container')
<div class="main-wrapper w-100 vh-100 d-flex align-items-sm-start align-items-lg-center justify-content-center">
    <form method="POST" action="{{ route('auth.login') }}" id="login-form" class="main-form row d-flex flex-column justify-content-center align-items-center g-3 start mt-sm-4 col-12">
        <div class="d-flex justify-content-center mt-4">
            <h2>Noor Course</h2>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="Email">
            <label for="floatingInputEmail">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Ingatkan Saya di Perangkat ini
                </label>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button  type="submit" class="btn btn-primary" id="login-form-button">Login</button>
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            <p>Belum punya akun?</p>
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center g-12 start">
            <div class="d-flex justify-content-center">
                <a type="button" href="{{ url('/register') }}" class="btn btn-secondary">Daftar</a>
            </div>
        </div>
    </form>
</div>
@endsection

{{-- <div class="main-form row d-flex flex-column justify-content-center align-items-center g-3 start mt-sm-4 col-12">

    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('auth.login') }}" id="login-form">
            <div class="d-flex justify-content-center mt-4">
                <h2>Noor Course</h2>
            </div>
            <div form-floating>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div form-floating>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <p>Belum punya akun?</p>
            </div>

            {{-- <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputEmail" name="email"
                    placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Ingatkan Saya di Perangkat ini
                </label>
            </div> --}}

            {{-- <button class="w-100 btn btn-primary" type="submit" id="login-form-button">Masuk</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>

</div> --}}


@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush

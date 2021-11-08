@extends('master')
@section('content')
    <div class="container" style="margin-top: 100px;">
        <h2 style="text-align: center;">Login</h2>
        <form class="form-auth-small" action="/postlogin" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="signin-email" class="control-label sr-only">Email address</label>
                <input name="email" type="email" class="form-control" id="signin-email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="signin-password" class="control-label sr-only">Password</label>
                <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Login</button>
        </form>
        <p style="margin-top: 20px">Belum punya akun? <a href="/registrasi">Daftar Disini</a></p>
    </div>
@endsection
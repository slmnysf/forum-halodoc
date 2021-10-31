@extends('master')
@section('content')
    <div class="container" style="margin-top: 100px;">
        <h2 style="text-align: center;">Pendaftaran Akun</h2>
        <form class="form-auth-small" action="/postregis" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="regis-name" class="control-label sr-only">Nama</label>
                <input name="name" type="text" class="form-control" id="regis-name" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="regis-email" class="control-label sr-only">Email address</label>
                <input name="email" type="email" class="form-control" id="regis-email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="regis-password" class="control-label sr-only">Password</label>
                <input name="password" type="password" class="form-control" id="regis-password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Daftar</button>
        </form>
</body>
</html>
@endsection
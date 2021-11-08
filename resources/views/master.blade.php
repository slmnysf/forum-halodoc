<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Hal, initial-scale=1.0">
    <title>Halodoc</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <header>
        <div class="header" style="font-family:nunito">
            <div class="header-left">
                <ul class="header-list">
                    <li><img class="logo" src="https://www.halodoc.com/assets/header-footer/halodoc-logo.webp" height="26" width="142"></li>
                    <li><a href="/beranda" style="color: black; text-decoration: none;">Beranda</a></li>
                    <li><a target="_blank" href="https://www.halodoc.com/artikel" style="color: black; text-decoration: none;">Artikel</a></li>
                    <li><a target="_blank" href="https://www.halodoc.com/aplikasi-halodoc" style="color: black; text-decoration: none;">Aplikasi</a></li>
                    <li><a href="#" style="color: black; text-decoration: none;">Riwayat</a></li>
                    <li><a href="/diskusi" style="color: black; text-decoration: none;">Diskusi</a></li>
                    <li><a href="/checkup" style="color: black; text-decoration: none;">Self Check-up</a></li>
                </ul>
            </div>
            @if (!Auth::guest())
            <div class="header-right">
                <p style="padding-right:20px; padding-top:7px">Halo, {{ auth()->user()->name }}</p>
                <button type="button" class="btn btn-outline-danger"><a href="/logout" style="color: black; text-decoration: none;">LOGOUT</a></button>
            </div>
            @else
            <div class="header-right">
                <button type="button" class="btn btn-outline-danger"><a href="/login" style="color: black; text-decoration: none;">LOGIN</a></button>
            </div>
            @endif
        </div>
    </header>
    <hr>
@yield('content')
</body>
</html>
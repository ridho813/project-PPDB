<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    </head>
    <body class="antialiased">
<div class="container">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
        <div class="d-flex flex-row-reverse">
            @if (Route::has('login'))
            @auth
            <div class="p-2"><a href="{{ url('/home') }}" class="btn btn-success">Home</a></div>
            @else
            <div class="p-2"><a href="{{ route('login') }}" class="btn btn-success">Log in</a></div>
            @if (Route::has('register'))
            <div class="p-2"><a href="{{ route('register') }}" class="btn btn-outline-success">Register</a></div>
            @endif
            @endauth       
            @endif
        </div>
            </nav>
            <div class="jumbotron ">
                <h1 class="display-4">Selamat Datang Calon Siswa Baru</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead text-center">
                    <a class="btn btn-success btn-lg" href="#" role="button">Daftar Sekarang</a>
                </p>
            </div>
        </div>
        <section>
            <div class="container bg-success p-3" style="height: 300px">
                <h2 class="text-white text-center">Portal Berita</h2>
            </div>
        </section>
        <section>
            <div class="container p-3" style="height: 300px">
                <h2 class="text-success text-center">Kontak Kami</h2>
            </div>
        </section>
        
        <footer>
            <div class="container bg-dark">

                <div class="card bg-dark">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>

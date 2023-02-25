<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Website Kelas 12 Multimedia 3, Angkatan SMKN 5 Malang 2022. Berisi kenangan semasa sekolah" />
    <title>XII MM3 | Daftar Nama</title>

    <link rel="shortcut icon" href="{{ asset('home/img/Lamp.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/transisi.css') }}" />

    <style>
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

    </style>

</head>

<body data-barba="wrapper">
    <div class="loading-load">
        <h1>Loading</h1>
        <video id="slide-video" preload="auto" loop muted autoplay>
            <source src="img/loading.webm" type='video/webm' />
            <source src="img/loading.gif" type='video/gif' />
        </video>
    </div>
    <div class="barba-transition"></div>
    <main data-barba="container" data-barba-namespace="name">
        <section id="hero-top"></section>
        <a href="javascript:void(0);" onclick="smoothScroll('#socialmedia')"><button id="myBtn" title="Top">&uarr;</button></a>
        <section id="socialmedia" class="dissmised">
            <span class="close">x</span>
            <div class="bg-sosial">
                <p class="text-center t-sos">Ini website kelas, kepo Instagram kita ? kunjungi <span class="link-sos"><a
                            class="link-sos1" href="">link ini </a></span></p>
            </div>
        </section>

        @include('daftar.index')

        @include('home.footer')
    </main>

    <script src="{{ asset('home/app/js/mdb.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/barba.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/gsap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/solid.min.js') }}"></script>
    <script src="{{ asset('home/app/js/slick.min.js') }}"></script>
    <script src="{{ asset('home/app/app.js') }}" type="module"></script>
</body>

</html>

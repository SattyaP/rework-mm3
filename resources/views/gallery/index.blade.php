<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Website Kelas 12 Multimedia 3, Angkatan SMKN 5 Malang 2022. Berisi kenangan semasa sekolah" />
    <title>XII MM3 | Gallery</title>

    <link rel="shortcut icon" href="{{ asset('home/img/Lamp.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/transisi.css') }}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/app/js/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/app/js/slick.css') }}" />

    <style>
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        .gallery-hero {
            justify-content: center;
            display: flex;
            z-index: 1;
            position: relative;
            height: 600px;
            overflow: hidden;
            background-image: url('{{ asset('home/img/gallery/c-1.webp') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            animation: change 30s infinite;
        }
        .gallery-hero::after {
            content: "";
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            pointer-events: none;
        }
        @keyframes change {
            12.5% {
                background-image: url('{{ asset('home/img/gallery/c-2.webp') }}');
            }

            20% {}

            25% {
                background-image: url('{{ asset('home/img/gallery/c-3.webp') }}');
            }

            32.5% {}

            37.5% {
                background-image: url('{{ asset('home/img/gallery/c-4.webp') }}');
            }

            45% {}

            50% {
                background-image: url('{{ asset('home/img/gallery/c-5.webp') }}');
            }

            57.5% {}

            62.5% {
                background-image: url('{{ asset('home/img/gallery/c-6.webp') }}');
            }

            70% {}

            75% {
                background-image: url('{{ asset('home/img/gallery/c-7.webp') }}');
            }

            82.5% {}

            87.5% {
                background-image: url('{{ asset('home/img/gallery/c-8.webp') }}');
            }

            95% {}

            /* ulang awal */
            100% {
                background-image: url('{{ asset('home/img/gallery/c-1.webp') }}');
            }
        }

    </style>

</head>

<body data-barba="wrapper">
    <div class="loading-load">
        <h1>Loading</h1>
        <video id="slide-video" preload="auto" loop muted autoplay>
            <source src="{{ asset('home/img/loading.webm') }}" type="video/webm" />
            <source src="{{ asset('home/img/loading.gif') }}" type="video/gif" />
        </video>
    </div>
    <div class="barba-transition"></div>

    <main data-barba="container" data-barba-namespace="home">
        <section id="hero-top"></section>
        <a href="javascript:void(0);" onclick="smoothScroll('#socialmedia')"><button id="myBtn"
                title="Top">&uarr;</button></a>

        @include('home.header')
        @include('home.navbar')
        @include('gallery.hero')
        @include('gallery.opening')
        @include('gallery.event')
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Website Kelas 12 Multimedia 3, Angkatan SMKN 5 Malang 2022. Berisi kenangan semasa sekolah" />
    <title>XII MM3 | Class Of Cohesiveness</title>

    <link rel="preload" href="{{ asset('home/img/section2.webp')}}" as="image" />
    <link rel="preload" href="{{ asset('home/img/hero-pict.webp' )}}" as="image" />
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
        @include('home.hero')
        @include('home.opening')
        @include('home.utama')
        <!-- hr -->
        <div class="container">
            <div class="hr-om my-5"></div>
        </div>
        @include('home.turu')
        @include('home.blog')
        @include('home.name')
        @include('home.footer')

        @yield('content')

        <!-- particles -->
        <web-particles id="tsparticles" options='{
            "fps_limit":60,
            "interactivity":{
            "detectsOn":"canvas",
            "events":{
                "onClick":{
                    "enable":true,
                    "mode":"push"},
                "onHover":{
                    "enable":false,
                    "mode":"repulse"
                },
                "resize":true
            },
            "modes":{
                "push":{"particles_nb":4},
                "repulse":{
                    "distance":200,
                    "duration":0.4
                }
            }
            },
            "particles":{
            "color":{
                "value":"#f8ce36"
            },
            "links":{
                "color":"#f8ce36",
                "distance":150,
                "enable":true,
                "opacity":0.8,
                "width":2
            },
            "move":{
                "bounce":false,
                "direction":"inside",
                "enable":true,
                "outMode":"out",
                "random":true,
                "speed":2,
                "straight":false
            },
            "number":{
                "density":{
                    "enable":true,
                    "area":7
                },
                "value":1
            },
            "opacity":{
                "value":0.5
            },
            "shape":{
                "type":"line"
            },
            "size":{
                "random":true,
                "value":5
            }
            },
            "detectRetina":true
            }'>
        </web-particles>
    </main>

    <script src="{{ asset('home/app/utils/particles/tsparticles.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/mdb.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/barba.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/gsap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('home/app/js/solid.min.js') }}"></script>
    <script src="{{ asset('home/app/js/slick.min.js') }}"></script>
    <script src="{{ asset('home/app/app.js') }}" type="module"></script>
    <script src="{{ asset('home/app/utils/particles/web-particles.min.js') }}" type="module"></script>
</body>

</html>

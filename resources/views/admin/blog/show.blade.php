<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Website Kelas 12 Multimedia 3, Angkatan SMKN 5 Malang 2022. Berisi kenangan semasa sekolah" />
    <title>{{ $blog->title }}</title>

    <link rel="shortcut icon" href="{{ asset('home/img/Lamp.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/transisi.css') }}" />

</head>

<body data-barba="wrapper">
    <div class="barba-transition"></div>
    <main data-barba="container" data-barba-namespace="show">
        <section id="hero-top"></section>
        <a href="javascript:void(0);" onclick="smoothScroll('#socialmedia')"><button id="myBtn"
                title="Top">&uarr;</button></a>
        <!-- Social-media -->
        <section id="socialmedia" class="dissmised">
            <span class="close">x</span>
            <div class="bg-sosial">
                <p class="text-center t-sos">
                    Ini website kelas, kepo Instagram kita ? kunjungi <span class="link-sos"><a class="link-sos1"
                            href="https://www.instagram.com/twlve3.me/" target="_blank">link ini </a></span>
                </p>
            </div>
        </section>

        @include('home.navbar')

        <div class="container mt-4 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a  data-barba-transition="left" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a data-barba-transition="left" href="/blog">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./tag">{{ $blog->tag->name }}</a></li>
                </ol>
            </nav>
        </div>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="title">{{ $blog->title }}</h3>
                        <div class="timestamp">{{ $blog->created_at}}</div>
                            </span>
                            <img class="img-fluid img-show" src="{{ Storage::url($blog->image, $blog->id)}}" alt="image-article">
                            <article class="isi-article">{!! $blog->article !!}</article>
                    </div>
                        <div class="col-lg-3">
                            <div class="ads">Ads</div>
                            <h4 class="title-populer">Article Terpopuler</h4>
                            <div class="card-populer mb-3">
                                <h5>Ditangkap di Maluku, Satu Debt Collector yang...</h5>
                            </div>
                            <div class="card-populer mb-3">
                                <h5>Ditangkap di Maluku, Satu Debt Collector yang...</h5>
                            </div>
                                <div class="card-populer mb-3">
                                    <h5>Ditangkap di Maluku, Satu Debt Collector yang...</h5>
                                </div>
                        </div>
                    </div>

                    <h3 class="tag-jir">Tag : <span style="background-color: #ffc700; padding: 5px 10px;
                        text-align: center;
                        color: #fff;
                        font-size: 12px;
                        margin-left: 10px;
                        ">{{ $blog->tag->name }}</span></>
                </div>
            </div>
        </section>

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
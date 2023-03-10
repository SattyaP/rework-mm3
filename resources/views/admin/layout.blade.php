<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="data kelas">
    <title>BJIR BISA MASUK</title>

    <link rel="stylesheet" href="{{ asset('admin/css/all-bs.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/sb-admin-2.min.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.partials.header')

                @yield('content')
            </div>
        </div>
</body>


<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.easing.min.js') }}"></script>
<script src="https://kit.fontawesome.com/97c59dbe97.js" crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

@yield('js')
<script src="{{ asset('admin/js/admin.layout.script.js') }}"></script>

</html>

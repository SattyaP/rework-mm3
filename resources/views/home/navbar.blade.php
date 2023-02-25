<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top hide">
    <div class="container">
        <a href="#"><img class="logo" width="170px" height="51px" src="{{ asset('home/img/logo.png') }}" alt="Lamp Logo" /></a>

        <ul class="">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li class="t-nav"><a data-barba-transition="top" href="/" class="t-nav" onclick='smoothScroll("#hero-top")'>Home</a></li>
                <div class="b-bottom"></div>
                <li class="t-nav"><a href="javascript:void(0);" class="t-nav" onclick='smoothScroll("#utama")'>About Us</a></li>
                <div class="b-bottom"></div>
                <li class="t-nav"><a href="school.html" data-barba-transition="top" class="t-nav">School</a></li>
                <div class="b-bottom"></div>
                <li class="t-nav"><a href="./gallery" data-barba-transition="bottom" class="t-nav">Gallery</a></li>
                <div class="b-bottom"></div>
            </div>
        </ul>
    </div>
</nav>
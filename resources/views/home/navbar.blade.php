 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg sticky-top hide">
     <div class="container">
         <a href="#"><img class="logo" width="170px" height="51px" src="{{ asset('home/img/logo.png') }}"
                 alt="Lamp Logo" /></a>

         <ul class="">
             <button class="menu-hamburger m-0" aria-label="Main Menu">
                 <svg class="icon-nav" width="30" height="30" viewBox="0 0 100 100">
                     <path class="line line1"
                         d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                     <path class="line line2" d="M 20,50 H 80" />
                     <path class="line line3"
                         d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                 </svg>
             </button>
             <div class="menu">
                 <li class="t-nav"><a href="/" data-barba-transition="left" class="t-nav">Home</a></li>
                 <div class="b-bottom"></div>
                 <li class="t-nav"><a href="javascript:void(0);" class="t-nav" onclick='smoothScroll("#utama")'>About
                         Us</a></li>
                 <div class="b-bottom"></div>
                 <li class="t-nav"><a href="/student" data-barba-transition="top" class="t-nav">Student</a></li>
                 <div class="b-bottom"></div>
                 <li class="t-nav"><a href="/gallery" data-barba-transition="bottom" class="t-nav">Gallery</a></li>
                 <div class="b-bottom"></div>
             </div>
         </ul>
     </div>
 </nav>

 <!-- sidebar -->
 <div class="d-flex position-fixed w-100 end-0 bg-sidebar sidebar flex-column">
     <div class="sidebar-title container text-black d-flex align-items-center justify-content-between ">
         <button class="menu-hamburger m-0" aria-label="Main Menu">
             <svg width="35" height="35" viewBox="0 0 100 100">
                 <path class="line line1"
                     d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                 <path class="line line2" d="M 20,50 H 80" />
                 <path class="line line3"
                     d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
             </svg>
         </button>
     </div>
     <div class="bg-sidebar flex-grow-1">
         <ul class="list-unstyled p-3">
             <li><a href="/">Home</a></li>
             <div class="b-bottom"></div>
             <li><a data-barba-transition="left" href="/gallery">Gallery</a></li>
             <div class="b-bottom"></div>
             <li><a data-barba-transition="left" href="/daftar-nama">Student</a></li>
             <div class="b-bottom"></div>
         </ul>
     </div>
 </div>

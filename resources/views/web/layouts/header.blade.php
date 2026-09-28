<header class="site-header">

    <div class="header-top">
        <div class="container">
            <ul class="top-info">

                <li>
                    <i class="fa-solid fa-phone" aria-hidden="true"></i>
                    <a href="#">Admission Enquiry: +91 70501 74723</a>
                </li>

                <li>
                    <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                    <a href="#">ranchiyoga@gmail.com</a>
                </li>

                <li>
                    <i class="fa-solid fa-headset" aria-hidden="true"></i>
                    <a href="#">Helpline: 0651-2562221</a>
                </li>

            </ul>
        </div>
    </div>


    <div class="header-main">

        <div class="header-main__background" aria-hidden="true"></div>

        <div class="container">

            <div class="header-main-wrapper">

                <a class="header-logo" href="#" aria-label="Home">
                    <img src="{{ asset('asset/web/layouts/header/header.webp') }}" class="header-logo"
                        alt="School of Yoga">
                </a>


                <div class="header-actions">

                    <img src="{{ asset('asset/web/layouts/header/estd.png') }}" class="header-estd" alt="Established">

                    <img src="{{ asset('asset/web/layouts/header/naac.webp') }}" class="header-naac" alt="NAAC">

                    <button class="header-bar" id="menuToggle" aria-label="Open navigation menu" aria-controls="navbar"
                        aria-expanded="false" type="button">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</header>


<nav class="header-navbar" id="navbar" aria-label="Main navigation">

    <div class="container">

        <ul class="navbar-menu">

            <!-- Home -->
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>


            <!-- About -->
            <li>
                <a href="{{ route('about') }}">About Us</a>
            </li>
            <!-- Administration -->
            <li class="nav-dropdown">

                <a href="#" aria-haspopup="true">
                    ADMINISTRATION
                    <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                </a>

                <ul class="nav-dropdown-menu">


                    <li>
                        <a href="{{ route('vc') }}">Vice-Chancellor</a>
                    </li>

                    <li>
                        <a href="{{ route('director') }}">Director</a>
                    </li>

                    <li>
                        <a href="{{ route('coordinater') }}">Coordinator</a>
                    </li>

                </ul>

            </li>


            <li class="nav-dropdown">

                <a href="#" aria-haspopup="true">
                    Faculties
                    <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                </a>

                <ul class="nav-dropdown-menu">

                    <li>
                        <a href="#">Teaching Faculties</a>
                    </li>

                    <li>
                        <a href="#">Non Teaching Faculties</a>
                    </li>
                </ul>

            </li>


            <!-- Academics -->
            <li class="nav-dropdown">

                <a href="#" aria-haspopup="true">
                    Academics
                    <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                </a>

                <ul class="nav-dropdown-menu">

                    <li>
                        <a href="{{ route('syllabus') }}">Syllabus</a>
                    </li>

                    <li>
                        <a href="#">Programme and Course</a>
                    </li>

                    <li>
                        <a href="#">Fee Structure</a>
                    </li>


                     <li>
                        <a href="#">Admission</a>
                    </li>

                </ul>

            </li>


            <!-- Admissions -->
            {{-- <li>
                <a href="#">Admission</a>
            </li> --}}




            <!-- Examination -->
            <li>
                <a href="{{ route('exam') }}">Examination</a>
            </li>


            <!-- Gallery -->
            <li class="nav-dropdown">

                <a href="#" aria-haspopup="true">
                    ACTIVITIES
                    <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                </a>

                <ul class="nav-dropdown-menu">

                    <li>
                        <a href="{{route('achievements')}}">Achievements</a>
                    </li>

                    <li>
                        <a href="{{route('media')}}">press & media</a>
                    </li>

                     <li>
                        <a href="{{route('seminars')}}">workshop & seminars</a>
                    </li>


                    <li>
                        <a href="#">publications</a>
                    </li>


                </ul>

            </li>


            <!-- Alumni -->
            <li>
                <a href="#">Alumni</a>
            </li>

            <!-- Contact -->
            <li>
                <a href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
    </div>

</nav>

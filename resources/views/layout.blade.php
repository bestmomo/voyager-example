<!DOCTYPE HTML>
<html>
    <head>
        <title>Voyager</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="/assets/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        @yield('css')
    </head>
    <body>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <main id="main">
                        <div class="inner">

                            <!-- Headers -->
                                <header id="header">
                                    <a href="{{ url('/') }}" class="logo"><strong>Voyager</strong></a>
                                </header>
                                
                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>@yield('header')</h2>
                                    </header>
                                    @yield('content')
                                </section>

                        </div>
                    </main>

                <!-- Sidebar -->
                    <div id="sidebar">
                        <div class="inner">

                            <!-- Menu -->
                                <nav id="menu">
                                    <header class="major">
                                        <h2>Menu</h2>
                                    </header>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Homepage</a></li>
                                        {!! Menu::display('main', 'menu') !!}
                                        @if (Auth::guest())
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Register</a></li>
                                        @else
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>

                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Get in touch</h2>
                                    </header>
                                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="contact">
                                        <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
                                        <li class="fa-phone">(000) 000-0000</li>
                                        <li class="fa-home">1234 Somewhere Road #8254<br />
                                        Nashville, TN 00000-0000</li>
                                    </ul>
                                </section>

                            <!-- Footer -->
                                <footer id="footer">
                                    <p class="copyright">Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                                </footer>

                        </div>
                    </div>

            </div>

        <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
            <script src="/assets/js/skel.min.js"></script>
            <script src="/assets/js/util.js"></script>
            @yield('scripts')
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="/assets/js/main.js"></script>

    </body>
</html>
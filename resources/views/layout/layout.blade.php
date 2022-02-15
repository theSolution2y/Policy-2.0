<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title  -->
    <title>
        @yield('title')
    </title>
    <!-- css  -->
    <link rel="stylesheet" href="{{asset('frontend')}}/layout.css">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{asset('icons')}}/css/all.css">
    <!-- external css link -->
    @yield('css_script')
    <!-- external js link  -->
    @yield('js_script')
</head>
<body>
    <!-- main container  -->
    <main class="mainCont">
        <!-- header  -->
        <header id="header">
            <div class="logo">
                <img src="" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#plans">LIC Plans & Features</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#help">Help</a></li>
                </ul>
            </nav>
        </header>
        <!-- section container  -->
        <section id="secCont">
            @yield('content')
        </section>
        <!-- footer  -->
        <footer id="footer">
            <div class="socialIcon">
                <ul>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- copyright related text  -->
            <div class="text">
                Copyright
            </div>
        </footer>

    </main>
</body>
</html>
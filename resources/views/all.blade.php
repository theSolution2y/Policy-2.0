<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{asset('frontend')}}/home.css">

        <title>licUk</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">licUttarakhand</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#menud" class="nav__link">Policy</a></li>
                        <li class="nav__item"><a href="#gallary" class="nav__link">Reviews</a></li>
                        <li class="nav__item"><a href="/contactus" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Ensure</h1>
                        <h2 class="home__subtitle">Insure your future with us.</h2>
                        <a href="#policy" class="button">View Policy</a>
                    </div>
    
                    <img src="{{asset('imgs/policyhome.jpg')}}" alt="" class="home__img">
                </div>
            </section>
            
           
            
            <!--========== Policy ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Confused</span>
                <h2 class="section-title">Here's a list for you</h2>
                
                <div class="menu__container bd-grid">
                    @foreach ($cat as $data)
                    <div class="menu__content">
                        <img src="{{asset('imgs/')}}/{{$data['image']}}" alt="" class="menu__img">
                        <h3 class="menu__name">{{$data->title}}</h3>
                        {{-- <span class="menu__detail"></span> --}}
                        {{-- <span class="menu__preci">$22.00</span> --}}
                        <a href="{{url('contactus/'.$data->id)}}" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
               
                    @endforeach
                </div>
               
            </section>






             <!--========== ABOUT ==========-->
             <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial"><br></h2>
                        <p class="about__description"></p>
                        <a href="#menu" class="button">Connect</a>
                    </div>

                    <img src="{{asset('imgs/policyhome.jpg')}}" alt="" class="about__img">
                </div>
            </section>


            <!--===== APP =======-->
            {{-- <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">App</span>
                        <h2 class="section-title app__initial">App is aviable</h2>
                        <p class="app__description">Find our application and download it, you can make reservations, food orders, see your deliveries on the way and much more.</p>
                        <div class="app__stores">
                            <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                            <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                        </div>
                    </div>

                    <img src="assets/img/movil-app.png" alt="" class="app__img">
                </div>
            </section> --}}

            <!--========== CONTACT US ==========-->
            {{-- <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
                    </div>

                    <div class="contact__button">
                        <a href="#" class="button">Contact us now</a>
                    </div>
                </div>
            </section> --}}
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">licUttarakhand</a>
                    <span class="footer__description">Insurance Consultant</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Others</h3>
                    <ul>
                        <li><a href="vishalcomputermart.com" class="footer__link">vcsMart</a></li>
                        
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">LIC</a></li>
                        <li><a href="#" class="footer__link">Insure</a></li>
                        
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>A-12/5</li>
                        <li>Race Course Road</li>
                        <li>Dharampur Chowk , Dehradun</li>
                        <li>gmail.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2022 licUttarakhand. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="{{asset('frontend')}}/app.js" defer></script>
    </body>
</html>
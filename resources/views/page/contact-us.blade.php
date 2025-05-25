<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nata Praja - Contact Us</title>
    <link rel="icon" href="{{asset('resources/img/Favicon.ico')}}" type="image/x-icon">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/f1934f818b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_outward" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_left_alt" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    <!-- icon -->
    @vite (['resources/scss/style.scss', 'resources/js/app.js'])<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->

    <div class="overlay">
        <div class="loader">
            <svg class="loading-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370.88 317.35"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M191.57,46.46C139.28-32.77,1.05,2.07,3.53,114.18v93.7c0,13.54,12.44,19.89,24.78,19.89,12,0,25-6.58,25-19.79.06-20.47.4-76.16.17-94-.79-64.19,98.79-71.93,108.46-5.47l.34,184.1c0,13.83,11.78,21.05,24.88,21.22s24.91-7.38,24.91-21.25V189.77a98.88,98.88,0,0,0,155.31-81.2C367.38,14.87,249.44-25.13,191.57,46.46Zm2.66,243.89c0,3.89-3.67,5.73-7.14,5.73s-7.08-1.81-7.08-5.66l-.26-141.16a118.48,118.48,0,0,0,14.48,24.86ZM268.5,189.68c-114.91-.94-59.37-144.13-159.44-148.91-39.7-1.9-73.84,34.44-73.35,73.45.38,30-.25,59.91-.2,89.86,0,4-3.47,5.92-7.13,5.92-3.44,0-7-1.81-7-5.66V113.75c-.65-29.12,9.83-56.2,33.31-74.14a91.2,91.2,0,0,1,71.68-16.86c94.43,20.46,48.22,144.73,143.07,149.84,33.61,1.81,63.54-28.18,62.93-62.93-1.23-70.66-95-87.56-120.59-23.53L201.07,63C251.45-.53,346.32,28.86,349.61,108.57A81.1,81.1,0,0,1,268.5,189.68Zm-43.61-80a44.5,44.5,0,1,1,44.5,44.5A44.5,44.5,0,0,1,224.89,109.66Z" style="fill:#fff;stroke:#154122;stroke-miterlimit:10;stroke-width:7px;fill-rule:evenodd"/></g></g></svg>
        </div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
     
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->

    {{-- Header --}}
    <header id="#header" class="header">
        <nav class="navbig">
            <div class="navbig__wrapper flxcenter-vertical-spcbtwn">
                <div class="navbig-left logo-medium">
                <a href="{{'/'}}"><img src="{{ asset('resources/img/LOGO NPS GREEN.png') }}" alt="NPS Logo" class="logo" id="logoBig2"></a> 
                </div>
                <ul class="navbig-center nav-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('layanan')}}" class="horizontal-slide" data-replace="Services"><span>Services</span></a></li>
                    <li><a href="{{route('aboutUs')}}" class="horizontal-slide" data-replace="About"><span>About</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="horizontal-slide" data-replace="Insight"><span>Insight</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('artikel') }}">Artikel</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li> <!-- Ganti dengan route yang sesuai -->
                        </ul>
                    </li>
                    <li><a href="{{route('faq')}}" class="horizontal-slide" data-replace="FAQ"><span>FAQ</span></a></li>
                </ul>
                <ul class="navbig-right cta-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('karir')}}" class="horizontal-slide" data-replace="Career" style="color: rgb(15, 41, 22);"><span>Career</span></a></li>
                    <a href="{{route('contact')}}" class="button-cta-2">CONTACT</a>
                </ul>
            </div>
        </nav>
        <nav class="navmobile">
            <div class="navbig-left logo-medium">
                <a href="/"><img src="{{ asset('resources/img/LOGO NPS GREEN.png') }}" alt="NPS Logo" class="logo" id="logoMobile2"></a> 
            </div>
            <div class="hamburger-menu antimainstream" id="hamburger">
                <a class="button-cta-1" style="color: rgb(15, 41, 22);">Menu</a>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <ul>
                    <li><a href="{{route('layanan')}}">Services</a></li>
                    <li><a href="{{route('aboutUs')}}">About</a></li>
                    <li><a href="{{route('artikel')}}">Article</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('karir')}}">Career</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    {{-- Header --}}
    
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb__wrapper">
            <a href="/" class="breadcrumb__icon"><i class="fa-solid fa-house"></i></a>
            <div class="breadcrumb__icon2">></div>
            <div class="breadcrumb__info">
                <a href="{{route('contact')}}">Contact Us</a>
            </div>
        </div>
     </div>
    <!-- breadcrumb -->

    <main class="main-content main-container">
    <!-- Main -->
        <section id="scrolltop" class="page-cover">
            <div class="page-cover__wrapper">
                <img src="{{ asset('resources/img/contactusCover.png') }}" alt="" class="page-cover-img" loading="lazy">
                <div class="page-cover__overlay">
                    <div class="page-cover__overlay-top">
                        <div class="sub-title">Contact us</div>
                        <h2>Get in Touch.</h2>
                    </div>
                    <a href="#location" class="page-cover__overlay-bot">
                        <h2>Location</h2>
                        <div class="page-cover__icon"><i class="fi fi-ts-arrow-up-right"></i></div>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="contact-section">
                <div class="contact-left">
                    <div class="contact-form-container">
                        <h2>Send a Message</h2>
                        <p>Tell us what you’re looking for — a project, a partnership, a career or just a conversation. We’re ready to listen and collaborate.</p>
                        <form class="contact-form" action="/contact" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="input-border-bot" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" class="input-border-bot" name="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="interest">Interested In</label>
                                    <select id="interest" name="interest">
                                        <option label="About Us" value="About Us">About Us</option>
                                        <option label="Services" value="Services">Services</option>
                                        <option label="Career" value="Career">Career</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" class="input-border-bot" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="input-border-bot" name="message" rows="4" required></textarea>
                            </div>
                            <button class="contact-us__button" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="contact-right">
                    <div class="contact-right-contact content-right-item">
                        <h2 class="content-right-head">Call Us</h2>
                        <div class="contact-second-list">
                            <i class="fi fi-tr-phone-call"></i>
                            <p>(0274) 6000 027</p>
                        </div>
                    </div>
                    <div class="contact-right-alamat content-right-item">
                        <h2 class="content-right-head">Visit Us</h2>
                        <div class="contact-second-list">
                            <i class="fi fi-tr-plane-departure"></i>
                            <p>Kledokan RT 01/ RW 07, Umbulmartani, Kec. Ngemplak, Kab Sleman, Daerah Istimewa Yogyakarta</p>
                        </div>
                    </div>
                    {{-- <div class="contact-right-livechat content-right-item">
                        <h2 class="content-right-head">Live Chat</h2>
                        <a class="contact-second-list contact-second-list-massage">
                            <i class="fi fi-tr-messages"></i>
                            <div>Start Chat</div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </section>

        <section id="location" class="maps">
            <div class="maps__wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.0641610396683!2d110.41491467446797!3d-7.676251792340606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f8a08d980dd%3A0x5c6ace23b98e0274!2sPT.NATA%20PRAJA%20SOLUSINDO!5e0!3m2!1sid!2sid!4v1733241392251!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    <!-- Main -->
    </main>

    <!-- Footer -->
        <footer class="footer">
            <div class="footer__containerdesktop desktop__footer flx2col-spcbtwn">
                <div class="footer__left">
                    <h2>#Jadi yang kamu butuhkan.</h2>
                    <div class="profil-deskription">
                        <div class="footer__logo">
                            <div class="footer__contenttoplogo">
                                <img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="" class="logowhite">
                            </div>
                            <div class="footer__logotype">NATA PRAJA</div>
                        </div>
                        <div class="logo-caption">
                            "PT Nata Praja Solusindo adalah perusahaan yang berorientasi pada pelanggan. Kami
                            memahami bahwa setiap klien memiliki kebutuhan yang beragam, oleh karena itu kami
                            menawarkan solusi yang disesuaikan dengan kebutuhan spesifik masing-masing klien."
                        </div>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer-right-top">
                        <div class="footer-nav-company footer-nav-wrapper">
                            <ul class="footer-nav-head">Company</ul>
                            <ul class="footer-nav-list">
                                <li><a href="/" class="footer-nav-items">Home</a></li>
                                <li><a href="{{route('aboutUs')}}" class="footer-nav-items">About us</a></li>
                                <li><a href="{{route('artikel')}}" class="footer-nav-items">Article</a></li>
                                <li><a href="{{route('faq')}}" class="footer-nav-items">FAQ</a></li>
                                <li><a href="{{route('gallery')}}" class="footer-nav-items">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-work footer-nav-wrapper">
                            <ul class="footer-nav-head">Work</ul>
                            <ul class="footer-nav-list">
                                <li><a href="{{route('layanan')}}" class="footer-nav-items">Services</a></li>
                                <li><a href="{{route('contact')}}" class="footer-nav-items">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-social footer-nav-wrapper">
                            <ul class="footer-nav-head">Social</ul>
                            <ul class="footer-nav-list">
                                <li><a href="https://www.instagram.com/ptnataprajasolusindo/" target="_blank" class="footer-nav-items">Instagram</a></li>
                                <li><a href="https://www.linkedin.com/company/nata-praja-solusindo" target="_blank" class="footer-nav-items">Linkedln</a></li>
                                <li><a href="https://www.facebook.com/nataprajasolusindo.NPS" target="_blank" class="footer-nav-items">Facebook</a></li>
                                <li><a href="https://www.youtube.com/@NPSJogja" target="_blank" class="footer-nav-items">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right-bottom">
                        <div class="footer-nav-info">
                            <ul class="footer-address">Kledokan RT 01/ RW 07, Umbulmartani, Kec. Ngemplak, Kab Sleman, Daerah Istimewa Yogyakarta</ul>
                            <span class="line"></span>
                            <ul class="contact">
                                <li>(0274) 6000 027</li>
                                <li>nps@natapraja.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__containermobile">
                <div class="footer-mobile-one">
                    <div class="footer__logo">
                        <div class="footer__contenttoplogo">
                            <img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="" class="logowhite">
                        </div>
                        <div class="footer__logotype">NATA PRAJA</div>
                    </div>
                </div>
                <div class="footer-mobile-two">
                    <div class="footer-nav-company footer-nav-wrapper">
                        <ul class="footer-nav-head">Company</ul>
                        <ul class="footer-nav-list">
                            <li><a href="/index.html" class="footer-nav-items">Home</a></li>
                            <li><a href="{{route('aboutUs')}}" class="footer-nav-items">About us</a></li>
                            <li><a href="{{route('artikel')}}" class="footer-nav-items">Article</a></li>
                            <li><a href="{{route('faq')}}" class="footer-nav-items">FAQ</a></li>
                            <li><a href="{{route('gallery')}}" class="footer-nav-items">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav-work footer-nav-wrapper">
                        <ul class="footer-nav-head">Work</ul>
                        <ul class="footer-nav-list">
                            <li><a href="{{route('layanan')}}" class="footer-nav-items">Services</a></li>
                            <li><a href="{{route('contact')}}" class="footer-nav-items">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-mobile-three">
                    <div class="h2-wrapper">
                        <h2 class="footer-mobile-three-h2">#Jadi yang kamu butuhkan.</h2>
                    </div>
                </div>
                <div class="footer-mobile-four">
                    <div class="footer-navmobile-social">
                        <ul class="footer-nav-head">Social</ul>
                        <ul class="footer-navmobile-list">
                            <li><a href="https://www.instagram.com/ptnataprajasolusindo/" target="_blank" class="footer-navmobile-items">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/company/nata-praja-solusindo" target="_blank" class="footer-nav-items">Linkedln</a></li>
                            <li><a href="https://www.facebook.com/nataprajasolusindo.NPS" target="_blank" class="footer-nav-items">Facebook</a></li>
                            <li><a href="https://www.youtube.com/@NPSJogja" target="_blank" class="footer-nav-items">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-mobile-five">
                    <div class="copyright footer-nav-head">&copy 2024, Nata Praja, All Rights Reserved.</div>
                    <a href="#hero" class="scrolltop">
                        <p>Back to top</p>
                        <i class="fa-solid fa-arrow-up"></i>
                    <a>
                </div>
            </div>
        </footer>
    <!-- Footer -->
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>
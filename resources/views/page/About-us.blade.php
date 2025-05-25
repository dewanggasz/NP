<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nata Praja - About Us</title>
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
    @vite (['resources/scss/style.scss', 'resources/js/app.js'])
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
                <button id="toggle-dark">
                        <i data-lucide="moon"></i>
                    </button>
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
                <a href="{{route('aboutUs')}}">About</a>
            </div>
        </div>
     </div>
    <!-- breadcrumb -->

    <main class="main-content main-container">
        <section id="scrolltop" class="page-cover">
            <div class="page-cover__wrapper">
                <img src="{{asset('resources/img/page cover/aboutus_Cover.png')}}" alt="" class="page-cover-img" loading="lazy">
                <div class="page-cover__overlay">
                    <div class="page-cover__overlay-top">
                        <div class="sub-title">About Us</div>
                        <h2>Who We Are?</h2>
                    </div>
                    <a href="#scrollcontent" class="page-cover__overlay-bot scroll-link">
                        <h2>Our Story</h2>
                        <div class="page-cover__icon"><i class="fi fi-ts-arrow-up-right"></i></div>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- BREAK -->
        <section id="scrollcontent" class="aboutus-break">
            <div class="aboutus-break__top-wrapper">
                <h2 class="aboutus-break__content">
                    In an increasingly complex business world, personalized solutions are key.
                </h2>
            </div>
            <div class="aboutus-break__top-wrapper">
                <h2 class="aboutus-break__content">
                    Operations evolve, but the mission remains unchanged — businesses need efficient 
                    and tailored strategies to thrive. At PT Nata Praja Solusindo, we bring clarity, 
                    expertise, and the right tools to help you connect people, processes, and technology 
                    to achieve your goals.
                </h2>
            </div>
        </section>
        <!-- BREAK -->

         <!-- About-us-card -->
         <section class="aboutus-card">
            <div class="aboutus-card__wrapper">
                <div class="aboutuscard-items aboutus-card-one">
                    <div class="aboutuscard-items-top">
                        <h2>2+</h2>
                    </div>
                    <div class="aboutuscard-items-bottom">
                        <div class="list-icon"></div>
                        <p>Years of Trusted Expertise, Empowering Businesses Every Day</p>
                    </div>
                </div>
                <div class="aboutuscard-items aboutus-card-two">
                    <div class="aboutuscard-items-top">
                        <h2>5+</h2>
                    </div>
                    <div class="aboutuscard-items-bottom">
                        <div class="list-icon"></div>
                        <p>Clients Thriving with Our Tailored Solutions and Dedication</p>
                    </div>
                </div>
                <div class="aboutuscard-items aboutus-card-three">
                    <div class="aboutuscard-items-top">
                        <h2>200+</h2>
                    </div>
                    <div class="aboutuscard-items-bottom">
                        <div class="list-icon"></div>
                        <p>Professionals Driving Innovation and Excellence in Every Project</p>
                    </div>
                </div>
                <div class="aboutuscard-items aboutus-card-five">
                    <div class="aboutuscard-items-top aboutuscard-items-top-iso">
                        <h2>ISO</h2>
                        <div>-</div>
                        <img src="{{asset('resources/img/isoHijau.png')}}" alt="VRC International"
                        onmouseover="this.src='{{asset('resources/img/ISO.png')}}'" onmouseout="this.src='{{asset('resources/img/isoHijau.png')}}'">
                    </div>
                    <div class="aboutuscard-items-bottom">
                        <div class="list-icon"></div>
                        <p>Certified, Ensuring Top-Notch Data Security and Privacy</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-us-card -->
        
        <!-- OUR STORY -->
        <section class="ourstory">
            <div class="ourstory__wrapper">
                <div class="ourstory__top">
                    <div class="sub-title">Our story</div>
                    <h2 class="ourstory-header">PT Nata Praja Solusindo delivers value to clients by providing tailored outsourcing solutions, helping them optimize operations, enhance productivity, and achieve their business goals with precision.</h2>
                    <div class="ourstory-paragraph">
                        <p>From trusted call centers to advanced IT support, we empower businesses to navigate challenges, innovate, and thrive in competitive markets.</p>
                        <p>Our expertise, combined with cutting-edge technology and a client-first mindset, ensures that every solution is designed to meet the unique needs of our partners.</p>
                    </div>
                </div>
                <div class="ourstory__bottom">
                    <div class="ourstory__bottom-img-wrapper">
                        <img src="{{ asset('resources/img/tentangPage/team11.png') }}" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <!-- OUR STORY -->
        

        <!-- OUR-VALUE -->
         <section class="our-value">

            <div class="our-value__heading">
                <div class="our-value-heading-items">
                    <div class="sub-title">Our-value</div>
                    <h2>Upholding Excellence in Every Service We Provide</h2>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-item active">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Customer-Oriented</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                        We understand that every client has unique needs; therefore, we offer solutions tailored to their specific requirements.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Efficient and Effective</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                        We focus on providing efficient and effective services to meet customer needs, ensuring optimal results with operational efficiency.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Advanced Technology</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                        Supported by advanced information technology systems, we ensure efficiency and accuracy in every process we undertake.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Dedicated Team</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                        Our team consists of highly experienced and dedicated professionals, committed to delivering the best service to our clients.
                        </p>
                    </div>
                </div>
            </div>
         </section>
        <!-- OUR-VALUE -->

        <section class="about-us__team">
            <div class="about-us__team-wrapper">
                <div class="about-us__team-heading">
                    <div class="sub-title">People</div>
                    <h2>Our team is skilled and dedicated, delivering solutions with precision, integrity, and unwavering commitment.</h2>
                </div>
                <div class="about-us__team-content">
                    <div class="about-us__team-content-komisaris">
                        <div class="about-us__team-content-title">
                            <h3>Board of Commissioner</h3>
                        </div>
                        <div class="about-us__team-content-card">
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/landingPage/Team/harnoko.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Harnoko Martono</h3>
                                    <p class="about-us__team-card-title">Komisaris Utama</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/landingPage/Team/budiyana.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Budiyana</h3>
                                    <p class="about-us__team-card-title">Komisaris</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/landingPage/Team/reza.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Reza M Thamrin</h3>
                                    <p class="about-us__team-card-title">Komisaris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us__team-content-management">
                        <div class="about-us__team-content-title">
                            <h3>Team of Management</h3>
                        </div>
                        <div class="about-us__team-content-card">
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/landingPage/Team/pakRizal.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Rizal Moch Ganjar</h3>
                                    <p class="about-us__team-card-title">CEO</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team3.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Laudi Fajar Prihatmoko</h3>
                                    <p class="about-us__team-card-title">Manager</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team2.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Atikah Nur Awanis</h3>
                                    <p class="about-us__team-card-title">HRD</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team6.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Hanifah Nur Aini</h3>
                                    <p class="about-us__team-card-title">Finance</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team9.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Aulia</h3>
                                    <p class="about-us__team-card-title">Finance Intern</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team12.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Pungky Suryo</h3>
                                    <p class="about-us__team-card-title">General Affair</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team8.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Dewi Asiyah</h3>
                                    <p class="about-us__team-card-title">QA & Trainer</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team10.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Arga Putra Fani</h3>
                                    <p class="about-us__team-card-title">Supervisior</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team1.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Cadipa Sidiq</h3>
                                    <p class="about-us__team-card-title">IT Leader</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team7.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Fathur</h3>
                                    <p class="about-us__team-card-title">Staff IT</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team5.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Indra</h3>
                                    <p class="about-us__team-card-title">Staff IT</p>
                                </div>
                            </div>
                            <div class="about-us__team-card">
                                <div class="about-us__team-card-img">
                                    <img src="{{ asset('resources/img/tentangPage/team4.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="about-us__team-card-info">
                                    <h3 class="about-us__team-card-name">Dewangga Surya</h3>
                                    <p class="about-us__team-card-title">Creative Intern</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <script>
        function toggleAccordion(header) {
        const item = header.parentElement;
        const accordion = item.parentElement;

            // Close all items except the one clicked
            Array.from(accordion.children).forEach((child) => {
                if (child !== item) {
                child.classList.remove('active');
                }
            });

        // Toggle the clicked item
        item.classList.toggle('active');
        }
    </script>

    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</body>
</html>
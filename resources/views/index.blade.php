<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nata Praja - Best BPO in Town</title>
    <link rel="icon" href="{{asset('resources/img/Favicon.ico')}}" type="image/x-icon">
    <meta name="description" content="PT Nata Praja Solusindo adalah perusahaan BPO terpercaya yang menyediakan layanan call center, manajemen SDM, dan sistem CRM unggulan di Indonesia.">
    <meta name="keywords" content="BPO Indonesia, perusahaan call center, outsourcing Indonesia, Nata Praja, layanan CRM">
    <meta name="author" content="PT Nata Praja Solusindo">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/f1934f818b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_outward" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_left_alt" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- icon -->
    @vite (['resources/scss/style.scss', 'resources/js/app.js', 'resources/js/header.js', 'resources/js/client.js', 'resources/js/swiper.js'])
</head>
<body>
    @yield('content')
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

    <header id="#header" class="header">
        <nav class="navbigIndex">
            <div class="navbig__wrapper flxcenter-vertical-spcbtwn">
                <div class="navbig-left logo-medium">
                    <a href="{{'/'}}"><img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="NPS Logo" class="logo" id="logoBigIndex"></a> 
                </div>
                <ul class="navbig-center nav-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('layanan')}}" class="horizontal-slide" data-replace="Services"><span>Services</span></a></li>
                    <li><a href="{{route('aboutUs')}}" class="horizontal-slide" data-replace="About"><span>About</span></a></li>
                    <li class="dropdownIndex">
                        <a href="#" class="horizontal-slide" data-replace="Insight"><span>Insight</span></a>
                        <ul class="dropdown-menuIndex">
                            <li><a href="{{ route('artikel') }}">Artikel</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li> <!-- Ganti dengan route yang sesuai -->
                        </ul>
                    </li>
                    <li><a href="{{route('faq')}}" class="horizontal-slide" data-replace="FAQ"><span>FAQ</span></a></li>
                    {{-- <button id="toggle-dark">
                        <i data-lucide="moon"></i>
                    </button> --}}
                </ul>
                <ul class="navbig-right cta-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('karir')}}" class="horizontal-slide" data-replace="Career"><span>Career</span></a></li>
                    <a href="{{route('contact')}}" class="button-cta-1">CONTACT</a>
                </ul>
            </div>
        </nav>
        <nav class="navmobile">
            <div class="navbig-left logo-medium">
                <a href="/"><img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="NPS Logo" class="logo" id="logoMobileIndex"></a> 
            </div>
            <div class="hamburger-menu antimainstream" id="hamburger">
                <a class="button-cta-1">Menu</a>
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

    <main class="landing-page grnd-overlay-slide">
        <section id="hero" class="hero flxcenter-vertical-horizontal">
            @if ($setting && $setting->hero_video_path)
                <video class="hero__video" autoplay loop muted playsinline>
                    <source src="{{ asset('storage/' . $setting->hero_video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @elseif ($setting && $setting->hero_image_path)
                <img class="hero__image" src="{{ asset('storage/' . $setting->hero_image_path) }}" alt="Hero Image">
            @else
                <p>No hero media uploaded.</p>
            @endif
            <div class="hero__caption">
                <h2 class="hero-title" id="hero-title">NataPraja<sup>&reg</sup> Your Trusted Partner for Intelligent Outsourcing Solutions.</h2>
            </div>
        </section>

        <section  class="content overlay-slide">
            <!--ABOUT-US-->
            <div class="about-us container-100vh">
                <div class="about-us__wrapper flx2col-spcbtwn">
                    <div class="about-us__left flx2row">
                        <div class="sub-title about-us-subtitle">Operating across the Indonesia</div>
                        <div class="about-us-headline">
                            <h2>Helping businesses optimize operations by delivering tailored outsourcing solutions that drive growth and efficiency.</h2>
                        </div>
                        <div class="about-us__btn">
                            <a href="{{route('aboutUs')}}" class="about-us__button">
                                <div class="about-us__button__left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                                <div class="about-us__button__right">About us</div>
                            </a>
                        </div>
                    </div>
                    <div class="about-us__right">
                        <div class="about-us__right-content">
                            <ul class="about-us-list flx2row">
                                <li class="about-us-items">
                                    <div class="about-us-items-head">2+</div>
                                    <div class="about-us-items-caption">Years of Trusted Expertise, Empowering Businesses Every Day</div>
                                </li>
                                <li class="about-us-items">
                                    <div class="about-us-items-head">5+</div>
                                    <div class="about-us-items-caption"> Clients Thriving with Our Tailored Solutions and Dedication</div>
                                </li>
                                <li class="about-us-items">
                                    <div class="about-us-items-head">200+</div>
                                    <div class="about-us-items-caption">Professionals Driving Innovation and Excellence in Every Project</div>
                                </li>
                                <li class="about-us-items">
                                    <div class="about-us-items-head">
                                        <div>ISO</div>
                                        <div>-</div>
                                        <img src="{{asset('resources/img/isoHijau.png')}}" alt="VRC International"
                                        onmouseover="this.src='{{asset('resources/img/ISO.png')}}'" onmouseout="this.src='{{asset('resources/img/isoHijau.png')}}'">
                                    </div>
                                    <div class="about-us-items-caption">Certified, Ensuring Top-Notch Data Security and Privacy</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--ABOUT-US-->

            <!--CLIENT-->
            <div class="client ">
                <div class="client__wrapper clw-lp-anmt">
                    <div class="client__container clc-lp-anmt">
                        @foreach ($clientLogos as $logo)
                            <div class="client__slide hover1">
                                <img src="{{ asset('storage/' . $logo->logo_path) }}" alt="{{ $logo->logo_name }}" height="30px">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
           <!--CLIENT-->

           <!--OUR-SERVICE-->
            <div class="services">
                <div class="services__wrapper flx2col-spcbtwn">
                    <div class="services__left">
                        <div class="services-img-wrapper">
                            <img src="{{asset('resources/img/landingPage/Services/callCenter.png')}}" alt="" data-index="1" class="active">
                            <img src="{{asset('resources/img/landingPage/Services/validation.jpg')}}" alt="" data-index="2">
                            <img src="{{asset('resources/img/landingPage/Services/dataEntry.jpg')}}" alt="" data-index="3">
                            <img src="{{asset('resources/img/landingPage/Services/telemarketing.jpg')}}" alt="" data-index="4">
                            <img src="{{asset('resources/img/landingPage/Services/liveChat.jpg')}}" alt="" data-index="5">
                            <img src="{{asset('resources/img/landingPage/Services/deskCollection.jpg')}}" alt="" data-index="6">
                            <img src="{{asset('resources/img/landingPage/Services/kyc.jpg')}}" alt="" data-index="7">
                        </div>
                    </div>
                    <div class="services__right flx2row">
                            <div class="sub-title services__subtitle">DISCOVER OUR SERVICE</div>
                            <div class="services-headline">
                                <h2>A discreet adviser that consistently delivers <span class="higtlight">quality advice</span> across the full transaction life cycle.</h2>
                            </div>
                            <div class="services-list-overlay"></div>
                            <div class="services-list-wrapper scrolly-container">
                                <ul class="services-list">
                                    <li class="services-item flex">
                                        <a href="{{route('callcenter')}}" class="s-one flex" data-index="1">
                                            <div class="services-item-name">
                                                <div class="services-number">01</div>
                                                <div class="services-name">Call Center</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('verification-validation')}}" class="s-two flex" data-index="2">
                                            <div class="services-item-name">
                                                <div class="services-number">02</div>
                                                <div class="services-name">Verification & Validation</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('dataentry')}}" class=" s-three flex" data-index="3">
                                            <div class="services-item-name">
                                                <div class="services-number">03</div>
                                                <div class="services-name">Data Entry</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('telemarketing')}}" class="s-four flex" data-index="4">
                                            <div class="services-item-name">
                                                <div class="services-number">04</div>
                                                <div class="services-name">Telemarketing</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('livechat')}}" class=" s-five flex" data-index="5">
                                            <div class="services-item-name">
                                                <div class="services-number">05</div>
                                                <div class="services-name">Live Chat</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('deskcollection')}}" class="s-six flex" data-index="6">
                                            <div class="services-item-name">
                                                <div class="services-number">06</div>
                                                <div class="services-name">Desk Collection</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services-item">
                                        <a href="{{route('kyc')}}" class="flex" data-index="7">
                                            <div class="services-item-name">
                                                <div class="services-number">07</div>
                                                <div class="services-name">Verifikasi/KYC</div>
                                            </div>
                                            <div class="services-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            {{-- SERVICE MOBILE --}}
            <div class="services-mobile">
                <div class="services-mobile__wrapper-mobile flx2row">
                    <div class="services-mobile__left-mobile">
                        <div class="services-img-wrapper-mobile">
                            <img src="{{asset('resources/img/landingPage/Services/callCenter.png')}}" alt="" data-index="1" class="active">
                            <img src="{{asset('resources/img/landingPage/Services/validation.jpg')}}" alt="" data-index="2">
                            <img src="{{asset('resources/img/landingPage/Services/dataEntry.jpg')}}" alt="" data-index="3">
                            <img src="{{asset('resources/img/landingPage/Services/telemarketing.jpg')}}" alt="" data-index="4">
                            <img src="{{asset('resources/img/landingPage/Services/liveChat.jpg')}}" alt="" data-index="5">
                            <img src="{{asset('resources/img/landingPage/Services/deskCollection.jpg')}}" alt="" data-index="6">
                            <img src="{{asset('resources/img/landingPage/Services/kyc.jpg')}}" alt="" data-index="7">
                        </div>
                    </div>
                    <div class="services-mobile__right-mobile flx2row">
                            <div class="sub-title">DISCOVER OUR SERVICE</div>
                            <div class="services-headline">
                                <h2>A discreet adviser that consistently delivers quality advice across the full transaction life cycle.</h2>
                            </div>
                            <div class="services-list-wrapper-mobile">
                                <ul class="services-list-mobile">
                                    <li class="services-item flex">
                                        <a href="{{route('callcenter')}}" class="s-one flex" data-index="1">
                                            <div class="services-number">01</div>
                                            <div class="services-name">Call Center</div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('verification-validation')}}" class="s-two flex" data-index="2">
                                            <div class="services-number">02</div>
                                            <div class="services-name">Verification & Validation</div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('dataentry')}}" class=" s-three flex" data-index="3">
                                            <div class="services-number">03</div>
                                            <div class="services-name">Data Entry</div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('telemarketing')}}" class="s-four flex" data-index="4">
                                            <div class="services-number">04</div>
                                            <div class="services-name">Telemarketing</div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('livechat')}}" class=" s-five flex" data-index="5">
                                            <div class="services-number">05</div>
                                            <div class="services-name">Live Chat</div>
                                        </a>
                                    </li>
                                    <li class="services-item flex">
                                        <a href="{{route('deskcollection')}}" class="s-six flex" data-index="6">
                                            <div class="services-number">06</div>
                                            <div class="services-name">Desk Collection</div>
                                        </a>
                                    </li>
                                    <li class="services-item">
                                        <a href="{{route('kyc')}}" class="flex" data-index="7">
                                            <div class="services-number">07</div>
                                            <div class="services-name">Verifikasi/KYC</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            {{-- SERVICE MOBILE --}}
            
            <!--OUR-SERVICE-->
            
            {{-- <!-- Testi -->
             <div class="team">
                <div class="team__wrapper">
                    <div class="team__heading flxcenter-vertical-spcbtwn">
                        <div class="team__head">
                            <div class="sub-title">TESTIMONIAL</div>
                            <h2>Client Voices.</h2>
                        </div>
                        <p class="team__caption">Authentic stories and honest feedback from our trusted partners who have experienced real impact, growth, and collaboration through our solutions across industries and project scales.</p>
                    </div>
                    <ul class="team__slider">
                        <li class="team_person">
                            <img src="{{ asset('resources/img/testi1.jpeg') }}" alt="" loading="lazy" width="300" height="300">
                            <div class="team_personTesti">"Kami telah bekerja sama dengan Nata Praja sejak Maret 2023 dalam layanan call center khusus asuransi. Dibandingkan dengan BPO lain yang pernah kami gunakan, Nata Praja memberikan transparansi data yang luar biasa. Kami bisa memantau data real-time, baik panggilan masuk maupun terabaikan. Selama bekerja sama, pengalaman kami sangat positif. Sertiap permintaan kami sebagai klien selalu cepat diakomodasi oleh tim Nata Praja."</div>
                            <div class="team_personInfo">
                                <h3 class="person-name">Apriani Kartina</h3>
                                <p class="person-position">Head Department of Customer Service & Case Monitoring</p>
                            </div>
                        </li>

                    </ul>
                </div>
             </div>
            <!-- Testi --> --}}

            <!-- Testi -->
             <div class="team">
                <div class="team__wrapper">
                    <div class="team__heading flxcenter-vertical-spcbtwn">
                        <div class="team__head">
                            <div class="sub-title">TESTIMONIAL</div>
                            <h2>Client Voices.</h2>
                        </div>
                        <p class="team__caption">Authentic stories and honest feedback from our trusted partners who have experienced real impact, growth, and collaboration through our solutions across industries and project scales.</p>
                    </div>
                    <!-- Slider main container -->
                    <div class="swiper">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-slideTop">
                                    <img src="{{ asset('resources/img/quote1.png') }}" alt="" style="width: 100px">
                                </div>
                                <div class="swiper-slideMid">
                                    <p class="quoteSwipe">
                                        "Kami telah bekerja sama dengan Nata Praja sejak Maret 2023 dalam layanan call center khusus asuransi. Dibandingkan dengan BPO lain yang pernah kami gunakan, Nata Praja memberikan transparansi data yang luar biasa. Kami bisa memantau data real-time, baik panggilan masuk maupun terabaikan. Selama bekerja sama, pengalaman kami sangat positif. Sertiap permintaan kami sebagai klien selalu cepat diakomodasi oleh tim Nata Praja."
                                    </p>
                                </div>
                                <div class="swiper-slideBot">
                                    <div class="swiper-slideBotLeft">
                                       <h2 class="nameSwiper">Apriani Kartina</h2> 
                                       <p class="positionSwiper">Head Department of Customer Service & Case Monitoring</p> 
                                    </div>
                                    <div class="swiper-slideBotRight">
                                        <img src="{{ asset('resources/img/quote2.png') }}" alt="" style="width: 100px">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slideTop">
                                    <img src="{{ asset('resources/img/quote1.png') }}" alt="" style="width: 100px">
                                </div>
                                <div class="swiper-slideMid">
                                    <p class="quoteSwipe">
                                        "Kami telah bekerja sama dengan Nata Praja sejak Maret 2023 dalam layanan call center khusus asuransi. Dibandingkan dengan BPO lain yang pernah kami gunakan, Nata Praja memberikan transparansi data yang luar biasa. Kami bisa memantau data real-time, baik panggilan masuk maupun terabaikan. Selama bekerja sama, pengalaman kami sangat positif. Sertiap permintaan kami sebagai klien selalu cepat diakomodasi oleh tim Nata Praja."
                                    </p>
                                </div>
                                <div class="swiper-slideBot">
                                    <div class="swiper-slideBotLeft">
                                       <h2 class="nameSwiper">Kartina</h2> 
                                       <p class="positionSwiper">Head Department of Customer Service & Case Monitoring</p> 
                                    </div>
                                    <div class="swiper-slideBotRight">
                                        <img src="{{ asset('resources/img/quote2.png') }}" alt="" style="width: 100px">
                                    </div>
                                </div>
                            </div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
             </div>
            <!-- Testi -->

            <!-- CTA -->
             <div class="cta">
                <div class="cta__container">
                    <div class="cta__partners cta__card">
                        <div class="cta-card-head">
                            <div class="cta-head-left">NPS</div>
                            <div class="cta-head-right">Partners</div>
                        </div>
                        <div class="cta-card-content">
                            <h2>Intrested partnering with Nata Praja?</h2>
                            <p>We’re more than just a BPO company—we’re your growth partner. From managing your customer interactions to optimizing your backend operations, we tailor our services to match your goals.</p>
                        </div>
                        <div class="cta-card-button-wrapper">
                            <a href="{{route('contact')}}" class="cta-card-button">
                                <h3>Let's connect</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cta__careers cta__card">
                        <div class="cta-card-head">
                            <div class="cta-head-left">NPS</div>
                            <div class="cta-head-right">Careers</div>
                        </div>
                        <div class="cta-card-content">
                            <h2>Build the future with Nata Praja?</h2>
                            <p>Your journey begins with one decision—to grow. At Nata Praja, we provide a supportive environment where you can sharpen your skills, discover your strengths, and take charge of your career. Join us and turn ambition into action.</p>
                        </div>
                        <div class="cta-card-button-wrapper">
                            <a href="{{route('karir')}}" class="cta-card-button button-carrers">
                                <h3>See the oportunity</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
             </div>
            <!-- CTA -->

            <!-- Artikel -->
            <div class="article carousel-container">
                <!-- Header Section -->
                <div class="carousel-header">
                    <div class="article-head-left">
                        <div class="sub-title articleSubtitle">COMPANY ARTICLE</div>
                        <h2>Latest Article</h2>
                    </div>
                    <div class="controls controls-desktop">
                        <a href="{{route('artikel')}}" class="view-more">View More</a>
                        <button id="prevMobile" class="arrow arrow-artikel left" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
                        <button id="nextMobile" class="arrow arrow-artikel right" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
              
                <!-- Carousel Wrapper -->
                <div class="carousel-wrapper">
                    <div class="carousel">
                        @foreach ($articles as $article)
                            <a href="{{ route('artikel.show', ['slug' => $article->slug]) }}" class="carousel-item">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="artikelCover" class="image-carousel-wrapper" loading="lazy">
                                <div class="artikel-info">
                                    <p class="category">ARTIKEL</p>
                                    <p class="date">{{ \Carbon\Carbon::parse($article->created_at)->format('d F Y') }}</p>
                                </div>
                                <h3>{{ Str::limit($article->title, 130, '...') }}</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
              
                <!-- Mobile Controls -->
                <div class="carousel-controls mobile mobile-arrow">
                    <div class="view-more"><a href="{{route('artikel')}}">View More</a></div>
                    <div class="controls">
                        <button id="prevMobile" class="arrow arrow-artikel left" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
                        <button id="nextMobile" class="arrow arrow-artikel right" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
              </div>
            <!-- Artikel -->

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
        </section>
    </main>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
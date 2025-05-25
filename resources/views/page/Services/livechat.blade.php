<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nata Praja - Live Chat</title>
    <link rel="icon" href="{{asset('resources/img/Favicon.ico')}}" type="image/x-icon">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/f1934f818b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_outward" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_left_alt" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-straight/css/uicons-thin-straight.css'>
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
                <ul class="navbig-center nav-list flxcenter-vertical-spcbtwn" style="color: rgb(15, 41, 22);">
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
                <a href="/"><h1 style="color: rgb(15, 41, 22) !important;">NPS</h1></a> 
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
                    <li><a href="{{route('contact')}}">CONTACT</a></li>
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
                <a href="{{route('layanan')}}">Our Services</a>
            </div>
            <div class="breadcrumb__icon2">></div>
            <div class="breadcrumb__info">
                <a href="{{route('livechat')}}">Live Chat</a>
            </div>
        </div>
     </div>
    <!-- breadcrumb -->

    <!-- Main -->
     <main class="main-content main-container our-service-container">

        <section id="scrolltop" class="page-cover">
            <div class="page-cover__wrapper">
                <img src="{{asset('resources/img/services/5.jpg')}}" alt="" class="page-cover-img" loading="lazy">
                <div class="page-cover__overlay">
                    <div class="page-cover__overlay-top">
                        <div class="sub-title">Our service</div>
                        <h2>Live Chat</h2>
                    </div>
                    <a href="#serviceFeatures" class="page-cover__overlay-bot scroll-link">
                        <h2>Introduction to Live Chat Service</h2>
                        <div class="page-cover__icon"><i class="fi fi-ts-arrow-up-right"></i></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- OUR STORY -->
        <section class="servicesContent">
            <section class="ourstory">
                <div class="ourstory__wrapper">
                    <div class="ourstory__top">
                        <div class="sub-title">Live Chat</div>
                        <h2 class="ourstory-header">Enhance Customer Satisfaction with Real-Time Live Chat Support Services</h2>
                        <div class="ourstory-paragraph">
                            <p>PT Nata Praja Solusindo provides exceptional Live Chat support services designed to offer instant, efficient, and personalized assistance to your customers. Our Live Chat agents are trained to handle multiple queries simultaneously, providing real-time solutions while ensuring a seamless customer experience.</p>
                            <p>With Live Chat, your business can engage customers proactively, answer inquiries instantly, and resolve issues without long wait times. This service not only improves customer satisfaction but also boosts operational efficiency by handling multiple conversations at once. Let us help your business stay connected with customers in a fast-paced digital environment while maintaining a professional and empathetic tone.</p>
                        </div>
                    </div>
                    <div class="ourstory__bottom">
                        <div class="ourstory__bottom-img-wrapper">
                            <img src="{{asset('resources/img/landingPage/Services/liveChat.jpg')}}" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </section>
            <!-- OUR STORY -->
        </section>

        <!-- OUR-VALUE -->
        <section id="serviceFeatures" class="our-value">
            <div class="our-value__heading">
                <div class="our-value-heading-items">
                    <div class="sub-title">Features</div>
                    <h2>Nata Praja<br>Live Chat<br>Service</h2>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-item active">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Key Features of Our Live Chat Service</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <ol>
                            <li><strong>Real-Time Interaction:</strong> Provide immediate responses to customer queries, enhancing their experience.</li>
                            <li><strong>Multi-Session Handling:</strong> Handle multiple customer interactions simultaneously, increasing operational efficiency.</li>
                            <li><strong>Custom Chat Scripts:</strong> Develop tailored chat scripts that align with your brand voice and customer needs.</li>
                            <li><strong>Proactive Engagement:</strong> Initiate chats with customers to offer assistance and boost engagement.</li>
                            <li><strong>24/7 Availability:</strong> Ensure round-the-clock support to meet the demands of global customers.</li>
                        </ol>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Value Proposition</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <ol>
                            <li><strong>Professional Chat Agents:</strong> Our agents are skilled in delivering quick and accurate responses while maintaining a friendly tone.</li>
                            <li><strong>Enhanced Efficiency:</strong> Handle multiple customer conversations simultaneously, saving time and resources.</li>
                            <li><strong>Technology Integration:</strong> Seamlessly integrate our Live Chat system into your website or app for smooth communication.</li>
                            <li><strong>Data Security:</strong> Maintain the confidentiality of customer information through secure chat platforms.</li>
                        </ol>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Use Cases</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <ol>
                            <li><strong>Customer Support:</strong> Resolve customer inquiries and issues instantly without long wait times.</li>
                            <li><strong>Sales Assistance:</strong> Guide potential customers through product selections or purchasing processes.</li>
                            <li><strong>Technical Support:</strong> Provide step-by-step troubleshooting for technical issues via chat.</li>
                            <li><strong>Feedback Collection:</strong> Gather customer feedback or surveys during or after a chat session.</li>
                        </ol>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3>Benefits for Clients</h3>
                        <span class="arrow"></span>
                    </div>
                    <div class="accordion-content">
                        <ol>
                            <li><strong>Improved Customer Experience:</strong> Provide immediate support that enhances customer satisfaction and loyalty.</li>
                            <li><strong>Increased Conversion Rates:</strong> Convert website visitors into customers by addressing their queries in real-time.</li>
                            <li><strong>Cost-Effective Support:</strong> Reduce costs compared to traditional call center services while maintaining high service quality.</li>
                            <li><strong>Actionable Insights:</strong> Collect valuable data on customer behavior and preferences through chat logs.</li>
                        </ol>
                    </div>
                </div>
            </div>
         </section>
        <!-- OUR-VALUE -->

        <!--CLIENT-->
        <section class="our-service-client">
            <div class="client ">
                <div class="client__wrapper">
                    <div class="client__container">
                        @foreach ($clientLogos as $logo)
                        <div class="client__slide hover1">
                            <img src="{{ asset('storage/' . $logo->logo_path) }}" alt="{{ $logo->logo_name }}" height="30px">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--CLIENT-->

        <!-- service-card -->
        <section id="serviceF" class="servicecard-container">
            <div class="servicecard-container__wrapper">
                <div class="servicecard-heading">
                    <div class="sub-title">what we serve</div>
                    <h2 class="servicecard-header">Explore our services and discover how we can help your business operate smarter</h2>
                </div>
                <div class="servicecard-wrapper">
                    <div class="servicecard-wrapper-top">
                        <a href="{{route('callcenter')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Call Center</h3>
                                    <p>Professional customer support to handle inquiries, resolve issues, and ensure client satisfaction efficiently.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('dataentry')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Data Entry</h3>
                                    <p>Streamlined data management to enhance efficiency and ensure critical information is readily available for decision-making.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('verification-validation')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Verification & Validation</h3>
                                    <p>Secure and accurate data verification to minimize fraud risks and ensure compliance with industry standards.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('telemarketing')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Telemarketing</h3>
                                    <p>Targeted campaigns to expand market reach, increase sales, and understand customer needs effectively.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="servicecard-wrapper-bot">
                        <a href="{{route('livechat')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Live Chat</h3>
                                    <p>Real-time assistance for instant customer support and improved engagement without long waiting times.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('deskcollection')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Desk Collection</h3>
                                    <p>Effective debt collection through negotiations and reminders, ensuring smooth payment processes.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('kyc')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>KYC (Know Your Customer)</h3>
                                    <p>Comprehensive customer identity verification to meet regulatory standards and prevent financial crimes.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
         </section>
        <!-- service-card -->

    </main>
    <!-- Main -->

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
                            <li><a href="" class="footer-nav-items">Instagram</a></li>
                            <li><a href="" class="footer-nav-items">Linkedln</a></li>
                            <li><a href="" class="footer-nav-items">Facebook</a></li>
                            <li><a href="" class="footer-nav-items">Youtube</a></li>
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
                        <img src="./assets/resources/img/LOGO NPS WHITE.png" alt="" class="logowhite">
                    </div>
                    <div class="footer__logotype">NATA PRAJA</div>
                </div>
            </div>
            <div class="footer-mobile-two">
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
                        <li><a href="" class="footer-navmobile-items">Instagram</a></li>
                        <li><a href="" class="footer-nav-items">Linkedln</a></li>
                        <li><a href="" class="footer-nav-items">Facebook</a></li>
                        <li><a href="" class="footer-nav-items">Youtube</a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    @vite (['resources/scss/style.scss', 'resources/js/app.js'])
</body>
</html>   
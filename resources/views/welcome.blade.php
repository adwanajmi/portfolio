<!DOCTYPE html>
<html lang="en">
<style>
    @media (max-width: 767px) {

        div.spotify {
            position: fixed;
            width: 90%;
            bottom: 0;
            z-index: auto;
            display: flex;
            justify-content: center;
        }
    }

    div.spotify {
        position: fixed;
        width: 90%;
        bottom: 0;
        z-index: auto;
        display: flex;
        justify-content: center;
    }
</style>


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon" />
    <title>Adwa Najmi</title>
    <meta name="description" content="Hey There, so this is my Portfolio. Have a look at it.">
    <meta name="author" content="Adwa Najmi">

    <!-- Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheet
============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="/vendor/font-awesome/css/all.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="/vendor/owl.carousel/assets/owl.carousel.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="/vendor/magnific-popup/magnific-popup.min.css" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />

    <script src="https://kit.fontawesome.com/f2b831a8bf.js" crossorigin="anonymous"></script>




</head>

<body class="side-header" data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-offset="1">

    <!-- Preloader -->
    {{-- <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Document Wrapper
    =============================== -->
    <div id="main-wrapper">
        <!-- Header ============================ -->
        <header id="header" class="sticky-top">
            <div class="container px-lg-5">

                <div class="spotify">

                    {{-- <iframe style="border-radius:12px;"
                        src="https://open.spotify.com/embed/track/1AJuDhb8wqV4gU5Ts6Htl5?utm_source=generator&theme=0"
                        height="80" frameBorder="0" allowfullscreen data-auto-play="true"
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy">
                    </iframe> --}}
                    <iframe draggable style="border-radius:12px;"
                        src="https://open.spotify.com/embed/track/2gpWyfu7eZ01zzncHpxOtA?utm_source=generator"
                        height="80" frameBorder="0" allowfullscreen data-auto-play="true"
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy">
                    </iframe>

                </div>
            </div>
            <!-- Navbar -->
            <nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-dark border-bottom-0">
                <div class="container-fluid position-relative h-100 flex-lg-column ps-3 px-lg-3 pt-lg-3 pb-lg-2">

                    <!-- Logo -->
                    <a href="/" class="mb-lg-auto mt-lg-4">
                        <span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
                            <img class="img-fluid rounded-pill d-block" src="images/Adwa.gif" title="I'm Adwa"
                                alt="">
                        </span>
                        <h1 class="text-5 text-white text-center mb-0 d-lg-block fa-bounce">Adwa Najmi</h1>
                    </a>
                    <!-- Logo End -->

                    <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
                        <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3">
                            <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Project</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Testimonial</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                            {{-- <li>
                                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                <div class="elfsight-app-b5f35f33-4cfd-4aae-a88d-7e8b90d158b6"></div>
                            </li> --}}

                        </ul>
                    </div>
                    <ul class="social-icons social-icons-muted social-icons-sm mt-lg-auto ms-auto ms-lg-0 d-flex">
                        <li class="social-icons-facebook fa-spin"><a data-bs-toggle="tooltip" title="Facebook"
                                href="http://www.facebook.com/foreverchamp/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icons-twitter fa-flip"><a data-bs-toggle="tooltip" title="Twitter"
                                href="http://www.twitter.com/adwanajmi/" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-instagram fa-bounce"><a data-bs-toggle="tooltip" title="Instagram"
                                data-bs-placement="top" href="http://www.instagram.com/adwanajmi/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-github fa-fade"><a data-bs-toggle="tooltip" title="GitHub"
                                data-bs-placement="top" href="http://www.github.com/adwanajmi/" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                        <li class="social-icons-whatsapp fa-beat"><a data-bs-toggle="tooltip" title="Whatsapp"
                                data-bs-placement="top" href="http://www.wasap.my/601121324249/" target="_blank"><i
                                    class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#header-nav"><span></span><span></span><span></span></button>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>
        <!-- Header End -->

        <!-- Content ============================================= -->
        <div id="content" role="main">

            <!-- Intro  ============================================= -->
            <section id="home">
                <div class="hero-wrap">
                    <div class="hero-mask opacity-8 bg-dark"></div>
                    <div class="hero-bg parallax" style="background-image:url('images/Adwa.gif');"></div>
                    <div class="hero-content section d-flex min-vh-100">
                        <div class="container my-auto">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="typed-strings">
                                        <p>I'm Adwa Najmi</p>
                                        <p>I'm a Programmer...</p>
                                        <p>I'm a Laravel Developer...</p>
                                        <p>I'm a Web System Developer...</p>
                                        <p>I'm a Software Developer...</p>
                                        <p>I'm a Software Engineer...</p>
                                    </div>
                                    <p class="text-7 fw-500 text-white mb-2 mb-md-3">Hello World,</p>
                                    <h2 class="text-16 fw-600 text-white mb-2 mb-md-3"><span class="typed"></span>
                                    </h2>
                                    <p class="text-5 text-light mb-4">based in Kuala Lumpur, Malaysia.</p>
                                    <a href="#contact"
                                        class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Contact
                                        Me</a>

                                </div>


                            </div>
                        </div>
                        <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span
                                class="animated"><i class="fa fa-chevron-down"></i></span></a>
                    </div>
                </div>

            </section>

            <!-- Intro end -->

            <!-- About ============================================= -->
            <section id="about" class="section bg-dark-2"
                style="background-image:url('images/download1.jpeg'); background-size: cover;">
                <div class="container px-lg-5">

                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-muted opacity-5 text-uppercase fw-600 w-100 mb-0">About</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            About Me<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <div class="row gy-5">
                        <div class="row mx-0 text-center">
                            <div class="col">
                                <img class="img-fluid rounded-pill" src="images/adwa.webp" title="AdwaNajmi"
                                    alt="" style="max-width: 250px">
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8 text-center text-lg-start">
                            <h2 class="text-7 text-white fw-600 mb-3">I'm <span class="text-primary">Adwa
                                    Najmi,</span> a Software Engineer</h2>
                            <p class="text-white-50">who is seeking to find the opportunity to work
                                in a fun and challenging working environment that
                                will encourage me to improve and learn new skill as well as be motivated by the company
                                to do my best for the company
                                advancement in the software engineering industry.</p>
                            {{-- <p class="text-white-50">Delivering work within time and budget which meets client’s
                                requirements is our moto. Lorem Ipsum has been the industry's standard dummy text ever
                                when an unknown printer took a galley.</p> --}}
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="ps-lg-4">
                                <ul class="list-style-2 list-style-light text-light">
                                    <li><span class="fw-600 me-2">Name:</span>Muhammad Adwa Najmi Bin Rosmadi</li>
                                    <li><span class="fw-600 me-2">Age:</span>26</li>
                                    <li><span class="fw-600 me-2">
                                            Contact:</span><a href="https://www.wasap.my/601121324249">
                                            +601121324249</a></li>
                                    <li><span class="fw-600 me-2">Email:</span><a
                                            href="mailto:adwaaa@live.com">adwaaa@live.com</a></li>
                                    <li class="border-0"><span class="fw-600 me-2">From:</span>Wangsa Maju, KL
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="brands-grid separator-border separator-border-light mt-5">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="featured-box text-center">
                                    <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0"
                                            data-to="16">16</span>+</h4>
                                    <p class="text-light mb-0">Months Experience</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="featured-box text-center">
                                    <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0"
                                            data-to="5">5</span>+</h4>
                                    <p class="text-light mb-0">Projects Done</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- About end -->

            <!-- Services ============================================= -->
            <section id="services" class="section bg-dark-2"
                style="background-image:url('images/wallpaper.jpeg'); background-size: cover;">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-white-50 opacity-5 text-uppercase fw-600 w-100 mb-0">Services</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">What
                            I Do?<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="featured-box style-3 mb-5">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fa-solid fa-laptop-code fa-beat"></i></div>
                                        <h3 class="text-white">Front-end Development</h3>
                                        <p class="text-white-50 mb-0">I would usually use the basic from Laravel which
                                            is blade file, including HTML, CSS, and jQuery. I also have an experience on
                                            Angular framework</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box style-3 mb-5">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fa-solid fa-code fa-beat"></i></div>
                                        <h3 class="text-white">Back-end development</h3>
                                        <p class="text-white-50 mb-0">I use PHP language in Laravel
                                            framework in most of my projects. At the same time, I would love to try a
                                            new language too</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box style-3 mb-5">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fa-solid fa-mobile-retro fa-beat"></i> </div>
                                        <h3 class="text-white">Mobile Development</h3>
                                        <p class="text-white-50 mb-0">I have an experience working with Flutter and
                                            Ionic during my studies.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box style-3 mb-5">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fa-solid fa-sitemap fa-beat"></i> </div>
                                        <h3 class="text-white">Database</h3>
                                        <p class="text-white-50 mb-0">Currently Im only using MySQL database. However,
                                            I do have a basic experience on Oracle and Firebase too
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="featured-box style-3 mb-5 mb-md-0">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fas fa-chart-area fa-beat"></i> </div>
                                        <h3 class="text-white">Business Analysis</h3>
                                        <p class="text-white-50 mb-0">I have an experience working with Flutter and
                                            Ionic during my studies at University.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box style-3 mb-0">
                                        <div class="featured-box-icon text-primary bg-dark-1 shadow-sm rounded"> <i
                                                class="fas fa-bullhorn fa-beat"></i> </div>
                                        <h3 class="text-white">SEO Marketing</h3>
                                        <p class="text-white-50 mb-0">Lisque persius interesset his et, in quot quidam
                                            persequeris vim, ad mea essent possim iriure.</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services end -->

            <!-- Resume ============================================= -->
            <section id="resume" class="section bg-dark-1">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-muted opacity-5 text-uppercase fw-600 w-100 mb-0">Summary</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            My Resume<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <div class="row gx-5">
                        <!-- My Education -->
                        <div class="col-md-6">
                            <h2 class="text-6 text-white fw-600 mb-4">My Education</h2>

                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-primary text-2 fw-400">2017 - 2020</p>
                                <h3 class="text-5 text-white">Bachelor of Software Engineering with Honor</h3>
                                <a class="text-primary" href="https://www.unikl.edu.my/">Unikl Malaysian Institute of
                                    Information Technology</a>
                                <li class="text-white-50 mb-0">Graduated with CGPA 2.94</li>
                                <li class="text-white-50 mb-0">Developed a mobile application system for my FYP which
                                    called as Gogolf.

                                </li>
                                <li class="text-white-50 mb-0">The targeted user is for the golfer that playing golf to
                                    make the booking process easier</li>

                            </div>
                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-primary text-2 fw-400">2014 - 2017</p>
                                <h3 class="text-5 text-white">Diploma in Software Engineering</h3>
                                <a class="text-primary" href="https://www.mmu.edu.my/">Multimedia University</a>
                                <li class="text-white-50 mb-0">Graduated with CGPA 3.1</li>
                                <li class="text-white-50 mb-0">Developed a mobile application system for my FYP which
                                    called as Health Fitness</li>
                                <li class="text-white-50 mb-0">The mobile application can calculate their BMI, and show
                                    the workout routine for those that are new into the gym sport.</li>

                            </div>
                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-primary text-2 fw-400">2012 - 2013</p>
                                <h3 class="text-5 text-white">Electrical Engineering (SPM)</h3>
                                <a class="text-primary">SM Teknik Gombak</a>
                                <li class="text-white-50 mb-0">Sijil Pelajaran Malaysia</li>
                            </div>

                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-primary text-2 fw-400">2009 - 2011</p>
                                <h3 class="text-5 text-white">PMR</h3>
                                <a class="text-primary" href="https://www.smktmelawati.edu.my/">SMK Taman Melawati</a>
                                <li class="text-white-50 mb-0">Penilaian Menengah Rendah</li>
                            </div>
                        </div>

                        <!-- My Experience -->
                        <div class="col-md-6">
                            <h2 class="text-6 text-white fw-600 mb-4">My Work Experience</h2>

                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-success text-2 fw-400">January 2022 - Present</p>
                                <h3 class="text-5 text-white">Software Engineer</h3>
                                <a class="text-primary" href="https://pipeline.com.my">Pipeline Network Sdn Bhd</a>
                                <li class="text-white-50 mb-0">Developed 2 prototype website for:-
                                    <ul>
                                        <li class="text-white-50 mb-0">MBPJ Sistem Kutipan</li>
                                        <li class="text-white-50 mb-0">MAIWP - Sistem Pengurusan
                                            Sumber </li>
                                    </ul>
                                </li>

                                <li class="text-white-50 mb-0">The website is basically to show to the client and
                                    demonstrate the system flow structure for client to get better picture before
                                    proceed to main project</li>
                                <li class="text-white-50 mb-0">Currently handling eMAS-RMK12 project for government
                                    website using Laravel framework.

                                </li>

                            </div>
                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-success text-2 fw-400">January 2021 - May 2021</p>
                                <h3 class="text-5 text-white">IT Technical Sale Executive</h3>
                                <a class="text-primary" href="http://qowiglobal.com/">Qowi Global Sdn Bhd</a>
                                <li class="text-white-50 mb-0">Sourcing tender from E-Perolehan System.

                                </li>
                                <li class="text-white-50 mb-0">Meeting with clients virtually and during sales visits.
                                </li>
                                <li class="text-white-50 mb-0">Demonstrating and presenting products. Negotiating
                                    contracts and packages.

                                </li>
                            </div>
                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-success text-2 fw-400">March 2020 - November 2020</p>
                                <h3 class="text-5 text-white">Internship Programme - Web Developer</h3>
                                <a class="text-primary" href="https://tnbgenco.com.my/">TNB Headquarters - Degree</a>
                                <li class="text-white-50 mb-0">Able to develop a website for Genco Academy Department
                                    by
                                    using Laravel system.</li>
                                <li class="text-white-50 mb-0">Improving technological skills like the GUI provided
                                    functions to add user, department, learning management system and view history at
                                    the website.</li>

                            </div>
                            <div class="bg-dark rounded p-4 mb-4">
                                <p class="badge bg-success text-2 fw-400">November 2016 - March 2017</p>
                                <h3 class="text-5 text-white">Internship Programme - Web Developer</h3>
                                <a class="text-primary" href="https://tnbgenco.com.my/">Malaysia My 2nd Home -
                                    Diploma</a>
                                <li class="text-white-50 mb-0">Maintained the website system using WordPress</li>
                                <li class="text-white-50 mb-0">Edit and update some content </li>

                            </div>
                        </div>
                    </div>

                    <a href="/resume.pdf" class="btn btn-primary rounded-pill text-dark">Download My
                        Resume</a>
                </div>
            </section>

            <section id="skill" class="section bg-dark-2"
                style="background-image:url('images/download3.jpeg'); background-size: cover;">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-muted opacity-5 text-uppercase fw-600 w-100 mb-0">Skills</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            My Skills<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <!-- My Skills -->
                    <h2 class="text-6 text-white fw-600 mt-4 mb-4">My Skills</h2>
                    <div class="row gx-5">
                        <div class="col-md-6">
                            <p class="text-light fw-500 text-start mb-2">Web Design <span class="float-end">80%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-light fw-500 text-start mb-2">HTML/CSS <span class="float-end">75%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-light fw-500 text-start mb-2">JavaScript <span class="float-end">50%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-light fw-500 text-start mb-2">Laravel <span class="float-end">70%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-light fw-500 text-start mb-2">PHP <span class="float-end">75%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-light fw-500 text-start mb-2">Bootstrap <span class="float-end">69%</span>
                            </p>
                            <div class="progress progress-sm bg-dark mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 69%" aria-valuenow="69"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- Resume end -->

            <!-- Portfolio ============================================= -->
            <section id="portfolio" class="section bg-dark-2"
                style="background-image:url('images/download4.jpeg'); background-size: cover;">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Project</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            My Work<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <!-- Filter Menu -->
                    <ul class="portfolio-menu nav nav-tabs nav-light justify-content-center border-bottom-0 mb-5">
                        <li class="nav-item"> <a data-filter="*" class="nav-link active" href="">All</a>
                        </li>
                        <li class="nav-item"> <a data-filter=".project" href="" class="nav-link">Project</a>
                        </li>
                        <li class="nav-item"> <a data-filter=".fyp" href="" class="nav-link">Final Year
                                Project</a>
                        </li>
                        <li class="nav-item"> <a data-filter=".intern" href=""
                                class="nav-link">Internship</a>
                        </li>
                    </ul>
                    <!-- Filter Menu end -->
                    <div class="portfolio popup-ajax-gallery">
                        <div class="row portfolio-filter g-4">
                            <div class="col-sm-6 col-lg-4 intern">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/tnb.jpeg" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="projek/tnb.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">TNB Headquarters</h5>
                                                <span class="text-light">Genco Academy</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 project">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/rmk12.png" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="projek/emas.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">EPU - RMK12</h5>
                                                <span class="text-light">Developed a website from scratch</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 fyp">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/gogolf.png" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="projek/gogolf.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">Gogolf Mobile Application</h5>
                                                <span class="text-light">Final Year Project during Degree</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 intern">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/mm2h.png" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="ajax/portfolio-ajax-project-dark-4.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">Malaysia My Second Home</h5>
                                                <span class="text-light">Maintaining the website using wordpress</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 project">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/mbpj.jpeg" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="projek/mbpj.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">MBPJ - E-Sistem Kutipan</h5>
                                                <span class="text-light">Created a prototype website to show and
                                                    demonstrate to client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 project">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/maiwp.jpeg" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="projek/maiwp.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">MAIWP</h5>
                                                <span class="text-light">Sistem Pengurusan Sumber</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 fyp">
                                <div class="portfolio-box rounded">
                                    <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                            src="images/projects/gym.webp" alt="">
                                        <div class="portfolio-overlay"> <a class="popup-ajax stretched-link"
                                                href="ajax/portfolio-ajax-project-dark-7.html"></a>
                                            <div class="portfolio-overlay-details">
                                                <h5 class="text-white fw-400">Health Fitness Mobile Application</h5>
                                                <span class="text-light">Final Year Project during Diploma</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio end -->

            <!-- Testimonial ============================================= -->
            <section id="testimonial" class="section bg-dark-1"
                style="background-image:url('images/download2.jpeg'); background-size: cover;">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-muted opacity-2 text-uppercase fw-600 w-100 mb-0">References</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            Supervisor<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <div class="owl-carousel owl-light owl-theme" data-loop="true" data-nav="false"
                        data-autoplay="false" data-margin="25" data-stagepadding="0" data-slideby="1"
                        data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2">
                        <div class="item">
                            <div class="bg-dark rounded p-5">
                                <div class="d-flex align-items-center mt-auto mb-4"> <img
                                        class="img-fluid rounded-circle d-inline-block w-auto"
                                        src="images/testimonial/azmi.jpg" alt="">
                                    <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Azmi
                                            Awi</strong> <span class="text-white-50 fw-500">Chief Officer at TNB
                                            HQ</span>
                                    </p>
                                </div>
                                <p class="text-light mb-4">“Only trying it out since a few days. But up to now
                                    excellent. Seems to work flawlessly. priced simply dummy text of the printing
                                    and
                                    typesetting industry.”</p>
                                <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-dark rounded p-5">
                                <div class="d-flex align-items-center mt-auto mb-4"> <img
                                        class="img-fluid rounded-circle d-inline-block w-auto"
                                        src="images/testimonial/wan.jpg" alt="">
                                    <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Wan
                                            Huzairi</strong>
                                        <span class="text-white-50 fw-500">Senior PHP Developer at Pipeline
                                            Network</span>
                                    </p>
                                </div>
                                <p class="text-light mb-4">"Easy to use, reasonably priced simply dummy text of the
                                    printing and typesetting industry. Quidam lisque persius interesset his et, in
                                    quot
                                    quidam possim iriure.”</p>
                                <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-dark rounded p-5">
                                <div class="d-flex align-items-center mt-auto mb-4"> <img
                                        class="img-fluid rounded-circle d-inline-block w-auto"
                                        src="images/testimonial/fatimah.jpg" alt="">
                                    <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Dr Fatimah</strong>
                                        <span class="text-white-50 fw-500">Lecturer from Multimedia University</span>
                                    </p>
                                </div>
                                <p class="text-light mb-4">“I am happy Working with printing and typesetting
                                    industry.
                                    Quidam lisque persius interesset his et, in quot quidam persequeris essent
                                    possim
                                    iriure.”</p>
                                <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-dark rounded p-5">
                                <div class="d-flex align-items-center mt-auto mb-4"> <img
                                        class="img-fluid rounded-circle d-inline-block w-auto"
                                        src="images/testimonial/juliana.jpg" alt="">
                                    <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Dr Juliana</strong>
                                        <span class="text-white-50 fw-500">Lecturer from UNIKL</span>
                                    </p>
                                </div>
                                <p class="text-light mb-4">“I have used them twice now. Good rates, very efficient
                                    service and priced simply dummy text of the printing and typesetting industry
                                    quidam
                                    interesset his et. Excellent.”</p>
                                <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-dark rounded p-5">
                                <div class="d-flex align-items-center mt-auto mb-4"> <img
                                        class="img-fluid rounded-circle d-inline-block w-auto"
                                        src="images/testimonial/farra.jpg" alt="">
                                    <p class="ms-3 mb-0"><strong class="d-block text-white fw-600">Farra
                                            Natasya</strong>
                                        <span class="text-white-50 fw-500">Groupmate</span>
                                    </p>
                                </div>
                                <p class="text-light mb-4">“Such an excellence person and very detail oriented person”
                                </p>
                                <span class="text-2 text-primary"> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial end -->

            <!-- Contact Me ============================================= -->
            <section id="contact" class="section bg-dark-2"
                style="background-image:url('images/download5.jpeg'); background-size: cover;">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-white-50 opacity-5 text-uppercase fw-600 w-100 mb-0">Contact</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            Contact Me<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->
                    <div class="row gy-5">
                        {{-- <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-start">
                            <h2 class="mb-3 text-5 text-white text-uppercase">Address</h2>
                            <p class="text-3 text-light mb-4">4th Floor, Plot No.22,<br>
                                145 Murphy Canyon Rd.<br>
                                San Diego CA 2028 </p>
                            <p class="text-3 text-light mb-1"><span class="text-primary text-4 me-2"><i
                                        class="fas fa-phone"></i></span>(060) 444 434 444</p>
                            <p class="text-3 text-light mb-1"><span class="text-primary text-4 me-2"><i
                                        class="fas fa-fax"></i></span>(060) 555 545 555</p>
                            <p class="text-3 text-light mb-4"><span class="text-primary text-4 me-2"><i
                                        class="fas fa-envelope"></i></span>chat@simone.com</p>
                            <h2 class="mb-3 text-5 text-white text-uppercase">Follow Me</h2>
                            <ul
                                class="social-icons social-icons-muted justify-content-center justify-content-md-start">
                                <li class="social-icons-dribbble"><a data-bs-toggle="tooltip"
                                        href="http://www.dribbble.com/harnishdesign/" target="_blank"
                                        title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                <li class="social-icons-twitter"><a data-bs-toggle="tooltip"
                                        href="https://twitter.com/harnishdesign/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-facebook"><a data-bs-toggle="tooltip"
                                        href="http://www.facebook.com/harnishdesign/" target="_blank"
                                        title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-google"><a data-bs-toggle="tooltip"
                                        href="http://www.google.com/" target="_blank" title="Google"><i
                                            class="fab fa-google"></i></a></li>
                                <li class="social-icons-github"><a data-bs-toggle="tooltip"
                                        href="http://www.github.com/" target="_blank" title="GitHub"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div> --}}
                        <div class="col-md-8 col-xl-9 order-0 order-md-1">

                            <form class="form-dark" action="/contact_me" method="post">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-xl-4">
                                        <input name="name" type="text" class="form-control" required
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-4">
                                        <input name="email" type="email" class="form-control" required
                                            placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-4">
                                        <input name="subjek" type="text" class="form-control" required
                                            placeholder="Subject">
                                    </div>
                                    <div class="col">
                                        <textarea name="mesej" type="text" class="form-control" rows="5" required placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <p class="text-center mt-4 mb-0">
                                    <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex"
                                        type="submit">Send Message</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Me end -->

        </div>
        <!-- Content end -->

        <!-- Footer ============================================= -->
        <footer id="footer" class="section footer-dark bg-dark-1"
            style="background-image:url('images/banner.png'); background-size: cover; background-attachment: fixed;background-repeat: no-repeat;">
            <div class="container px-lg-5">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <p class="mb-3 mb-lg-0">Copyright © {{ date('Y') }} <a href="#" class="fw-500">Adwa
                                Najmi</a>. All
                            Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul
                            class="nav nav-separator nav-separator-light justify-content-center justify-content-lg-end">
                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#terms-policy" href="#">Terms & Policy</a></li>
                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#disclaimer" href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top ============================================= -->
    <a id="back-to-top" class="rounded-circle" data-bs-toggle="tooltip" title="Back to Top"
        href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

    <!-- Terms & Policy Modal ================================== -->
    <div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark-2 text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title text-white">Terms & Policy</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <p>Last updated: 2022-12-01</p>

                    <h3 class="text-white mb-3 mt-4 mt-4">Terms of Use</h3>

                    <h5 class="text-white text-4 mt-4">1. Introduction – Welcome to my Portfolio (“Company”, “we”,
                        “our”,
                        “us”)! </h5>
                    <p>These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at
                        https://adwanajmi.herokuapp.com (together or individually “Service”) operated by me.</p>
                    <p>Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard
                        and disclose information that results from your use of our web pages.</p>
                    <p>Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You
                        acknowledge that you have read and understood Agreements, and agree to be bound of them.</p>
                    <p>If you do not agree with (or cannot comply with) Agreements, then you may not use the Service,
                        but please let us know by emailing at adwaaa@live.com so we can try to find a solution. These
                        Terms apply to all visitors, users and others who wish to access or use Service.</p>
                    <h5 class="text-white text-4 mt-4">2. Communication</h5>
                    <p>By using our Service, you agree to subscribe to newsletters, marketing or promotional materials
                        and other information we may send. However, you may opt out of receiving any, or all, of these
                        communications from us by following the unsubscribe link or by emailing at adwaaa@live.com.</p>
                    <h5 class="text-white text-4 mt-4">3. Purchases</h5>
                    <p>If you wish to purchase any product or service made available through Service (“Purchase”), you
                        may be asked to supply certain information relevant to your Purchase including but not limited
                        to, your credit or debit card number, the expiration date of your card, your billing address,
                        and your shipping information.</p>
                    <p>You represent and warrant that: (i) you have the legal right to use any card(s) or other payment
                        method(s) in connection with any Purchase; and that (ii) the information you supply to us is
                        true, correct and complete.</p>
                    <p>We may employ the use of third party services for the purpose of facilitating payment and the
                        completion of Purchases. By submitting your information, you grant us the right to provide the
                        information to these third parties subject to our Privacy Policy.</p>
                    <p>We reserve the right to refuse or cancel your order at any time for reasons including but not
                        limited to: product or service availability, errors in the description or price of the product
                        or service, error in your order or other reasons.</p>
                    <p>We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal
                        transaction is suspected.
                    </p>
                    <h5 class="text-white text-4 mt-4">4. Refund</h5>
                    <p>We issue refunds for Contracts within 30 days of the original purchase of the Contract.

                    </p>
                    <h3 class="text-white mb-3 mt-4">Copyright Policy</h3>
                    <p>We respect the intellectual property rights of others. It is our policy to respond to any claim
                        that Content posted on Service infringes on the copyright or other intellectual property rights
                        (“Infringement”) of any person or entity.</p>
                    <ol class="lh-lg">
                        <li>If you are a copyright owner, or authorized on behalf of one, and you believe that the
                            copyrighted work has been copied in a way that constitutes copyright infringement, please
                            submit your claim via email to adwaaa@live.com, with the subject line: “Copyright
                            Infringement” and include in your claim a detailed description of the alleged Infringement
                            as detailed below, under “DMCA Notice and Procedure for Copyright Infringement Claims”</li>
                        <li>You may be held accountable for damages (including costs and attorneys’ fees) for
                            misrepresentation or bad-faith claims on the infringement of any Content found on and/or
                            through Service on your copyright.</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms & Policy Modal End -->

    <!-- Disclaimer Modal ================================== -->
    <div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark-2 text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title text-white">Copyright & Disclaimer</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <p>The information provided by my Portfolio (“Company”, “we”, “our”, “us”) on
                        https://adwanajmi.herokuapp.com/ (the “Site”) is for general informational purposes only. All
                        information on the Site is provided in good faith, however we make no representation or warranty
                        of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability,
                        availability, or completeness of any information on the Site. </p>

                    <p>UNDER NO CIRCUMSTANCE SHALL WE HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND
                        INCURRED AS A RESULT OF THE USE OF THE SITE OR RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE.
                        YOUR USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN
                        RISK.</p>
                    <h5 class="text-white text-4 mt-4">TESTIMONIALS DISCLAIMER
                    </h5>
                    <p>The Site may contain testimonials by users of our products and/or services. These testimonials
                        reflect the real-life experiences and opinions of such users. However, the experiences are
                        personal to those particular users, and may not necessarily be representative of all users of
                        our products and/or services. We do not claim, and you should not assume that all users will
                        have the same experiences.</p>
                    <p>YOUR INDIVIDUAL RESULTS MAY VARY.
                    </p>
                    <p>The testimonials on the Site are submitted in various forms such as text, audio and/or video, and
                        are reviewed by us before being posted. They appear on the Site verbatim as given by the users,
                        except for the correction of grammar or typing errors. Some testimonials may have been shortened
                        for the sake of brevity, where the full testimonial contained extraneous information not
                        relevant to the general public.</p>

                    <p>The views and opinions contained in the testimonials belong solely to the individual user and do
                        not reflect our views and opinions.</p>
                    <h5 class="text-white text-4 mt-4">CONTACT US
                    </h5>
                    <p>Should you have any feedback, comments, requests for technical support or other inquiries, please
                        contact us by email: adwaaa@live.com.

                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Disclaimer Modal End -->
    <script src="https://open.spotify.com/embed-podcast/iframe-api/v1" async></script>

    <script>
        window.onSpotifyIframeApiReady = (IFrameAPI) => {
            let element = document.getElementById('embed-iframe');
            let options = {
                width: '60%',
                height: '200',
                uri: 'spotify:episode:7makk4oTQel546B0PZlDM5',
                autoplay: true
            };
            let callback = (EmbedController) => {};
            IFrameAPI.createController(element, options, callback);
        };
    </script>

    <!-- JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Easing -->
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- Appear -->
    <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
    <!-- Images Loaded -->
    <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- Counter -->
    <script src="/vendor/jquery.countTo/jquery.countTo.min.js"></script>
    <!-- Parallax Bg -->
    <script src="/vendor/parallaxie/parallaxie.min.js"></script>
    <!-- Typed -->
    <script src="/vendor/typed/typed.min.js"></script>
    <!-- Owl Carousel -->
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- isotope Portfolio Filter -->
    <script src="/vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Style Switcher -->
    <script src="/js/switcher.min.js"></script>
    <!-- Custom Script -->
    <script src="/js/theme.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eservice360</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="MyraStudio" />

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/eservice360.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/materialdesignicons.min.css') }}" />

    <!--Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" />

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="{{ asset('frontend/assets/images/eservice360.png') }}" style="height: 50px; width:100px;"
                    alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link" href="#client">Clients</a>
                        </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Pricing</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li> --}}
                    {{-- <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END-->

    <!-- HOME START-->
    <section class="home-slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image:url('images/home/home-bg-3.jpeg');">
                            <div class="bg-overlay"></div>
                            <div class="home-center">
                                <div class="home-desc-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center text-white">
                                                    <h5 class="home-small-title text-uppercase text-white-50 mb-4">
                                                        Awesome Design</h5>
                                                    <h2 class="home-title mb-4">WEBSITE DESIGN & DEVELOPMENT
                                                    </h2>
                                                    <p class="home-desc text-white-50 mx-auto">
                                                        Our talented team creates your website on a daily basis ranks
                                                        incredibly on Google and other services. As a business
                                                        organization, you always want a brilliant website design and a
                                                        gorgeous style. it is easily in control by you. We give web
                                                        sites, which have inbuilt HTML coding known as the most expected
                                                        and SEO satisfying code.
                                                    </p>
                                                    <div class="text-center pt-4">
                                                        <a href="#contact" class="btn btn-custom mr-2">Contact Us</a>
                                                        <a href="#home" class="btn btn-custom-white">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="background-image:url('images/home/home-bg-2.jpeg');">
                            <div class="bg-overlay"></div>
                            <div class="home-center">
                                <div class="home-desc-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center text-white">
                                                    <h5 class="home-small-title text-uppercase text-white-50 mb-4">
                                                        Awesome Design</h5>
                                                    <h2 class="home-title mb-4">We love make things amazing and simple
                                                    </h2>
                                                    <p class="home-desc text-white-50 mx-auto">Maecenas class semper
                                                        class semper sollicitudin lectus lorem iaculis imperdiet aliquam
                                                        vehicula tempor auctor curabitur pede aenean ornare.</p>
                                                    <div class="text-center pt-4">
                                                        <a href="#" class="btn btn-custom mr-2">Contact Us</a>
                                                        <a href="#" class="btn btn-custom-white">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="background-image:url('images/home/home-bg.jpeg');">
                            <div class="bg-overlay"></div>
                            <div class="home-center">
                                <div class="home-desc-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center text-white">
                                                    <h5 class="home-small-title text-uppercase text-white-50 mb-4">
                                                        Awesome Design</h5>
                                                    <h2 class="home-title mb-4">We love make things amazing and simple
                                                    </h2>
                                                    <p class="home-desc text-white-50 mx-auto">Maecenas class semper
                                                        class semper sollicitudin lectus lorem iaculis imperdiet aliquam
                                                        vehicula tempor auctor curabitur pede aenean ornare.</p>
                                                    <div class="text-center pt-4">
                                                        <a href="#" class="btn btn-custom mr-2">Contact Us</a>
                                                        <a href="#" class="btn btn-custom-white">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME END-->

    <!-- WELCOME START -->
    <section class="section" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading">Starting with Eservice360 is easier than anything!</h4>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="features mt-4">
                        <div class="text-center">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/assets/images/about/3.png') }}"
                                    style="max-height: 150px;" class="img-fluid rounded" alt="">
                            </div>

                            <h4>History</h4>
                            <p class="features-desc text-muted mt-3 pl-2 pr-2">
                                Welcome to our web development and software development world. E-Service360 is the
                                growing up software development company in Bangladesh that is offered a full facility
                                for designing a website and software development at a reasonable price. We have already
                                completed many projects successfully with clients’ satisfaction. We are providing
                                services such as software development, web development, and designing, online marketing,
                                website maintenance, Magento web development, digital marketing approaches, pay per
                                click marketing and advertising (PPC), PHP website development
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features mt-4">
                        <div class="text-center">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/assets/images/about/2.png') }}"
                                    style="max-height: 150px;" class="img-fluid rounded" alt="">
                            </div>
                            <h4>Vission</h4>
                            <p class="features-desc text-muted mt-3 pl-2 pr-2">
                                "At Eservice360, our vision is to be a pioneering force in the ever-evolving landscape
                                of technology, where innovation meets integrity. We aspire to shape a future where
                                technology empowers, connects, and transforms the world for the better. Our unwavering
                                commitment is to be at the forefront of technological advancement, driving positive
                                change, and delivering exceptional value to our clients and partners.
                                Innovation Knows No Bounds: We strive to break down the barriers of convention,
                                constantly pushing the boundaries of what technology can achieve. We seek to inspire a
                                culture of creativity, where new ideas flourish and evolve into groundbreaking
                                solutions.

                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features mt-4">
                        <div class="text-center">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/assets/images/about/0.jpg') }}"
                                    style="max-height: 150px;" class="img-fluid rounded" alt="">
                            </div>
                            <h4>Mission</h4>
                            <p class="features-desc text-muted mt-3 pl-2 pr-2">
                                Client-Centric Solutions: We exist to serve our clients' unique needs. Our mission is to
                                understand their challenges and aspirations, and then design and implement IT solutions
                                that not only meet but exceed their expectations.

                                Cutting-Edge Expertise: We are committed to staying on the cutting edge of technology.
                                Our mission is to continually invest in our team's knowledge and skills to provide the
                                most advanced and relevant IT services.

                                Ethical and Responsible Practices: Our mission is to conduct our business with the
                                utmost integrity and responsibility. We aim to be a trusted partner, adhering to ethical
                                standards and environmentally sustainable practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- WELCOME END -->

    <!-- SERVICES START -->
    <section class="section bg-light" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">Our Services</h4>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="shopping-cart"></i>
                        </div>
                        <div class="service-head">
                            <h4>E-Commerce</h4>
                            <p class="text-muted mb-0">We developed your e-commerce based website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="mail"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Corporate Website</h4>
                            <p class="text-muted mb-0">We developed your Corporate Website based website.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="command"></i>
                        </div>
                        <div class="service-head">
                            <h4>Responsive Design</h4>
                            <p class="text-muted mb-0">Huge collection perfect of elements, rich customization options,
                                perfect flexible layouts, stunning pages and instant results!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="lock"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Web Security</h4>
                            <p class="text-muted mb-0">Starting from headers through perfect the footers, kit every bit
                                of perfect match Ave has been engineered for you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="eye"></i>
                        </div>
                        <div class="service-head">
                            <h4>Market Analysis</h4>
                            <p class="text-muted mb-0">Forget about limits! match Core plugin is the perfect match for
                                Ave. Build and perfect match customize your site visually.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="search"></i>
                        </div>
                        <div class="service-head">
                            <h4>Keyword Research</h4>
                            <p class="text-muted mb-0">Documentation is not only a guide for Ave, it is a comprehensive
                                kit fully guide for Ave integrated with the community.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-custom btn-round">See all Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES END -->

    <!-- PORTFOLIO START-->
    <section class="section bg-white pb-0" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">Our Portfolio</h4>
                        <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options,
                            flexible layouts, stunning pages and instant results!</p>
                    </div>
                </div>
            </div>

            <!-- portfolio menu -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="col container-filter categories-filter list-unstyled mb-0" id="filter">
                            <li><a class="categories active" data-filter="*">All</a></li>
                            <li><a class="categories" data-filter=".profile">Profile</a></li>
                            <li><a class="categories" data-filter=".business">Business</a></li>
                            <li><a class="categories" data-filter=".finance">Finance</a></li>
                            <li><a class="categories" data-filter=".marketing">Marketing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End portfolio  -->

        </div>

        <!-- Gallary -->
        <div class="container-fluid">
            <div class="row container-grid mt-5 projects-wrapper">
                <div class="img-max-width">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-1.jpg') }}" title="Project Name">
                            <img class="item-container profile business"
                                src="{{ asset('frontend/assets/images/portfolio/work-1.jpg') }}" alt="1" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Centerd Gallary</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width business finance">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-8.jpg') }}" title="Project Name">
                            <img class="item-container mfp-fade"
                                src="{{ asset('frontend/assets/images/portfolio/work-8.jpg') }}" alt="2" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Sidebar Stack</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width profile business">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-3.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-3.jpg') }}" alt="3" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Grid – Overlay </h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-2.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-2.jpg') }}" alt="4" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Distinctive</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width finance marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-6.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-6.jpg') }}" alt="5" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Sustainable</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width profile marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-5.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-5.jpg') }}" alt="6" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Popup Hover</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width business">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-7.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-7.jpg') }}" alt="7" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Vendor</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="img-max-width marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image"
                            href="{{ asset('frontend/assets/images/portfolio/work-4.jpg') }}" title="Project Name">
                            <img class="item-container"
                                src="{{ asset('frontend/assets/images/portfolio/work-4.jpg') }}" alt="8" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-light">Slider Cover</h5>
                                    <p class="text-light">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO END-->

    <!-- CLIENT START -->
    {{-- <section class="section" id="client">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class=" text-center">
                            <h4 class="title-heading text-uppercase">Testimonial</h4>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8">
                        <div id="owl-demo" class="owl-carousel">

                            <div class="testi-box">
                                <div class="text-center mt-4">
                                    <div class="testi-content">
                                        <p class="user-review text-center mb-0">" Their separate existence is a myth. For science music sport etc Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language "</p>
                                    </div>
                                    <div class="mt-4">
                                        <img src="{{ asset('frontend/assets/images/client/11.jpg') }}" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                                    </div>
                                    <div class="img-post text-center">
                                        <p class="testi-patients text-muted mb-1 mt-3">Founder</p>
                                        <h5 class="testi-client-name">Willimore Wilson</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="testi-box">
                                <div class="text-center mt-4">
                                    <div class="testi-content">
                                        <p class="user-review text-center mb-0">" It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a normal of letters, as opposed to using making it look like readable English."</p>
                                    </div>
                                    <div class="mt-4">
                                        <img src="{{ asset('frontend/assets/images/client/12.jpg') }}" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                                    </div>
                                    <div class="img-post text-center">
                                        <p class="testi-patients text-muted mb-1 mt-3">Ceo</p>
                                        <h5 class="testi-client-name">Charley Brown</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="testi-box">
                                <div class="text-center mt-4">
                                    <div class="testi-content">
                                        <p class="user-review text-center mb-0">" Looking for an event WordPress theme? Look no further—we’ve got pre-built websites for over 20 different types of events: birthday party, wedding, course launch, marketing event, conference, seasonal event."</p>
                                    </div>
                                    <div class="mt-4">
                                        <img src="{{ asset('frontend/assets/images/client/13.jpg') }}" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                                    </div>
                                    <div class="img-post text-center">
                                        <p class="testi-patients text-muted mb-1 mt-3">Manager</p>
                                        <h5 class="testi-client-name">Norden Sophie</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- CLIENT END -->



    <!--  PLANS START  -->
    <section class="section bg-light" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">WEBSITE DESIGN & DEVELOPMENT PACKAGE</h4>
                        <p class="title-desc text-muted mt-3">Tools are beyond the one-click install, async tech merges
                            with ultimate flexibility experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="price bg-white mt-4 p-5">
                        <div class="item text-center">
                            <div class="type pb-3">
                                <h4>DYNAMIC WEBSITE</h4>
                            </div>

                            <div class="value">
                                <h4>8000 BDT</h4>
                                <span class="per text-muted">Starter Business</span>
                            </div>

                            <div class="feature">
                                <ul class="list-unstyled text-muted">
                                    <li>Free Domain: .com, .net</li>
                                    <li>Onlinespace: 500MB</li>
                                    <li>Email: 5 Email Address</li>
                                    <li>Pages: 7 Pages</li>
                                    <li>Design: 2 Sample Design</li>
                                    <li>Slider: One Slider</li>
                                    <li>SEO: On-Page SEO</li>
                                    <li>Development Time: 10 Days</li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price active mt-4 p-5">
                        <div class="item text-center">

                            <div class="type pb-3">
                                <h4>E COMMERCE WEBSITE</h4>
                            </div>

                            <div class="value">
                                <h4>20000 BDT</h4>
                                <span class="per">Dynamic Website</span>
                            </div>

                            <div class="feature">
                                <ul class="list-unstyled">
                                    <li>Free Domain: .com, .net</li>
                                    <li>Onlinespace: 2GB</li>
                                    <li>Email: 12 Email Address</li>
                                    <li>Pages: Unlimited</li>
                                    <li>Design: 2 Sample Design</li>
                                    <li>Slider: five Slider</li>
                                    <li>SEO: On-Page SEO</li>
                                    <li>Development Time: 15 Days</li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price bg-white mt-4 p-5">
                        <div class="item text-center">
                            <div class="type pb-3">
                                <h4>PLATINUM PACKAGE</h4>
                            </div>

                            <div class="value">
                                <h4>40000 BDT</h4>
                                <span class="per text-muted">Dynamic Website</span>
                            </div>

                            <div class="feature">
                                <ul class="list-unstyled text-muted">
                                    <li>Free Domain: .com, .net</li>
                                    <li>Onlinespace: Unlimited</li>
                                    <li>Email: Unlimited Email Address</li>
                                    <li>Pages: Unlimited</li>
                                    <li>Design: 3 Sample Design</li>
                                    <li>Slider: 10 Slider</li>
                                    <li>SEO: On-Page SEO</li>
                                    <li>Development Time: 25 Days</li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PLANS END -->

    <!-- TEAM START -->
    {{-- <section class="section" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h4 class="title-heading text-uppercase">OUR AMAZING TEAM</h4>
                            <p class="title-desc text-muted">Conversion rates open a beautiful store, increase your conversion rates and boost your sales.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div class="team-member mt-4 text-center">
                            <img src="{{ asset('frontend/assets/images/team/11.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4 class="mt-3">William A. Smith</h4>
                                <p>CEO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-member mt-4 text-center">
                            <img src="{{ asset('frontend/assets/images/team/12.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4 class="mt-3">Marc R. Gant</h4>
                                <p>Designer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-member mt-4 text-center">
                            <img src="{{ asset('frontend/assets/images/team/13.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4 class="mt-3">Edmund M. Boyd</h4>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-member mt-4 text-center">
                            <img src="{{ asset('frontend/assets/images/team/14.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4 class="mt-3">Carlos A. Kilgore</h4>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- TEAM END -->

    <!-- START CTA -->
    <section class="section bg-cta">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-white text-center">Ready to start your next
                        web project now?</h3>
                    <p class="cta-desc text-white text-center mt-3">When a good idea comes, you know, part of my job is
                        to move it around, just see what people think, get people talking about it.</p>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-custom-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- BLOG START -->
    {{-- <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h4 class="title-heading text-uppercase">Latest News</h4>
                            <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options, flexible layouts, stunning pages and instant results.</p>
                        </div>
                    </div>
                </div>

                 <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="blog-menu mt-4">
                            <img src="{{ asset('frontend/assets/images/blog/1.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4><a href="" class="blog-title">Want to know how Deep Learning works?</a></h4>
                                <p class="mt-2 text-muted">fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.</p>
                                <div class="mt-3">
                                    <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-menu mt-4">
                            <img src="{{ asset('frontend/assets/images/blog/2.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4><a href="" class="blog-title">How to become a skilled Developer</a></h4>
                                <p class="mt-2 text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                                <div class="mt-3">
                                    <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-menu mt-4">
                            <img src="{{ asset('frontend/assets/images/blog/3.jpg') }}" class="img-fluid" alt="">
                            <div>
                                <h4><a href="" class="blog-title">The best front hacking cheatsheets</a></h4>
                                <p class="mt-2 text-muted">Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.</p>
                                <div class="mt-3">
                                    <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- BLOG END -->

    <!-- CONTACT START -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="contact-head text-center">
                        <h4 class="title-heading text-uppercase">Contact us</h4>
                        <p class="title-desc text-muted mt-3">Find the perfect business template for any type of
                            business size. Browse be websites created for small businesses, such as online service
                            providers.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4 vertical-content">
                <div class="col-lg-12">
                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="mt-3">
                                    <div class="float-left">
                                        <i data-feather="mail"></i>
                                    </div>
                                    <div class="ml-5">
                                        <h6 class="text-muted">Email Address</h6>
                                        <p>info@eservice.xyz</p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="ml-5">
                                        <h6 class="text-muted">Phone number</h6>
                                        <p>+8801907 092608</p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="map-pin"></i>
                                    </div>
                                    <div class="ml-5">
                                        <h6 class="text-muted">Office Address</h6>
                                        <p>House 445/2, 7th Floor,(Paris Furniture Goli), <br />
                                            East Kazi para,Mirpur, Dhaka-1216</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="custom-form">
                                <div id="message"></div>
                                <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text"
                                                    class="form-control" placeholder="Your name...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email"
                                                    class="form-control" placeholder="Your email...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="text" id="sub" type="text"
                                                    class="form-control" placeholder="Your subject...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-custom" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- FOOTER START -->
    <section class="footer " style="background-color:#417595; color:antiquewhite;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase"> <img
                                src="{{ asset('frontend/assets/images/eservice360.png') }}"
                                style="height: 50px; width:100px;" alt="logo"></h5>
                        <p>The Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium eaque quae ab
                            illo inventore veritatis et.</p>
                        <div class="text-white">
                            <a href="#facebook"><i class="mdi mdi-facebook facebook footer_mdi"></i></a>
                            <a href="#twitter"><i class="mdi mdi-twitter twitter footer_mdi"></i></a>
                            <a href="#google"><i class="mdi mdi-google google footer_mdi"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">About</h5>
                        <ul class="text-muted list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Job Opening</a></li>
                            <li><a href="#">Term</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">Help Center</h5>
                        <ul class="text-muted list-unstyled">
                            <li><a href="#">Accounting</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">General Question</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">Contact us</h5>
                        <p>The Nam eget dui Etiam rhoncus. Maecenas eget sem quam semper libero.</p>
                        <span class="footer-support">info@eservice.xyz</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <p class="mb-0">2020 © Eservice360</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER END -->

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- SCROLL -->
    <script src="{{ asset('frontend/assets/js/scrollspy.min.js') }}"></script>
    <!-- SCROLL -->
    <script src="{{ asset('frontend/assets/js/feather.min.js') }}"></script>
    <!--  -->
    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- easing -->
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <!-- Portfolio -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <!-- scroll -->
    <script src="{{ asset('frontend/assets/js/scrollspy.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>

</body>

</html>

@include('include.head')
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick-theme.css') }}">
<link rel="shortcut icon" href="{{asset('assets/images/logo/fav-icon.png')}}" type="image/x-icon">
<title>Jeux Developers</title>
</head>

<body>
    <section>
        <header class="home-banner" id="container">
            @include('include.navbar')
            <div class="lcd-div w-100 d-flex justify-content-center">
                <img src="{{ asset('assets/images/lcd-img.png') }}" alt="" width="80%"
                    class="img-fluid lcd-img1">
                <img src="{{ asset('assets/images/lcd2.png') }}" alt="" width=""
                    class="img-fluid lcd-img2 d-none">
            </div>
            <div class="cofee-cup-div">
                <img src="{{ asset('assets/images/cofee-img.png') }}" alt="" width="150" class="img-fluid">
            </div>
            <div class="home-page-heading w-100 d-flex justify-content-center">
                <p class="text-white fs-55 fw-bold text-center mx-lg-0 mx-md-0 mx-3 mb-0">

                    Transforming Ideas into Cutting-Edge <br>
                    <span class="text-black">Mobile <span class="text-white">&</span> Web </span>Solutions
                </p>
            </div>
            <div class="mouse-div">
                <img src="{{ asset('assets/images/mouse-img.png') }}" alt="" width="150" class="img-fluid">
            </div>
            <div class="keyboard-div w-100 text-center">
                <img src="{{ asset('assets/images/keyboard-img.png') }}" alt="" width="680px"
                    class="img-fluid p-0">
            </div>
        </header>

        <div class="carasoule position-relative py-3 mb-5 col-12">
            <div class="ms-lg-5 ms-md-5 mx-lg-0 mx-md-0 mx-3 multiple-items">
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/angular.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/vue.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/laravel.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/node.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/python.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/react.png') }}" alt="" class="skill"
                            width="200px">
                    </a>
                </div>
            </div>
            <div class="ms-lg-3 ms-md-3 mx-lg-0 mx-md-0 mx-2 multiple-items2" dir="rtl">
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/css.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/next.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/swift.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/java.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/html.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn shadow-none">
                        <img src="{{ asset('assets/images/skills/flutter.png') }}" alt="" class="skill"
                            width="200">
                    </a>
                </div>
            </div>
        </div>

        <div class="primary-service py-4 pb-0" id="services">
            <div class="service-heading">
                <div class="d-flex flex-column align-items-center mx-lg-0 mx-md-0 mx-3 position-relative">
                    <img src="{{ asset('assets/images/primary-text.png') }}" alt="" width="550px"
                        class="img-fluid position-absolute primary-text">
                    <img src="{{ asset('assets/images/primary-service.png') }}" alt="" width="650px"
                        class="img-fluid">
                </div>
                <p class="text-center fs-5 text-cadet-grey mx-lg-0 mx-md-0 mx-2">
                    Delivering Expert Mobile, Web, and Custom Software Solutions to Drive Your <br> Business Forward
                    with
                    Innovation and Excellence
                </p>
            </div>
            <div class="row mx-lg-5 mx-md-3 mx-2 my-lg-5 my-md-5 my-2">
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Custom Software Development
                        </h4>
                        <p class="fw-400 my-2">
                            Our expert developers create tailored software solutions that meet your unique business
                            needs, ensuring seamless functionality and high performance.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Mobile App Development Development
                        </h4>
                        <p class="fw-400 my-2">
                            From concept to launch, we build robust and user-friendly mobile apps for both Android and
                            iOS platforms, designed to engage and delight your users.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Web Development Development
                        </h4>
                        <p class="fw-400 my-2">
                            Enhance your online presence with our comprehensive web development services. We build
                            responsive, fast, and secure websites that drive results.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Hybrid App Development
                        </h4>
                        <p class="fw-400 my-2">
                            Leverage the power of cross-platform development with our hybrid app solutions. We deliver
                            high-quality apps that perform seamlessly on multiple devices.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">UI/UX Design Development
                        </h4>
                        <p class="fw-400 my-2">
                            Our design team creates intuitive and visually stunning interfaces, ensuring a great user
                            experience that keeps your customers coming back.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">E-commerce Solutions Development
                        </h4>
                        <p class="fw-400 my-2">
                            Boost your online sales with our custom e-commerce solutions. We develop scalable and
                            secure platforms that provide a smooth shopping experience.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Cloud Integration Services Development
                        </h4>
                        <p class="fw-400 my-2">
                            Seamlessly integrate cloud solutions into your business infrastructure for increased
                            flexibility, scalability, and efficiency.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Maintenance & Support Development
                        </h4>
                        <p class="fw-400 my-2">
                            Ensure the longevity and performance of your applications with our comprehensive
                            maintenance and support services.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card shadow-sm h-100 border py-5 radius-20 press">
                        <h4 class="mb-0 fw-bold fs-4">Consulting & Strategy Development
                        </h4>
                        <p class="fw-400 my-2">
                            Our expert consultants provide strategic guidance to help you navigate the digital
                            landscape and achieve your business goals.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute">
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-banner my-lg-4 mt-2 my-md-4 my-2 py-5" id="portfolio">
            <div class="portfolio-heading">
                <div class="d-flex flex-column align-items-center position-relative">
                    <img src="{{ asset('assets/images/portfolio-text.png') }}" alt="" width="270px"
                        class="img-fluid position-absolute portfolio-text">
                    <img src="{{ asset('assets/images/portfolio-img.png') }}" alt="" width="300px"
                        class="img-fluid">
                </div>
                <p class="text-center fs-5 text-cadet-grey mt-4 text-center">
                    At Jeux Developers, we bring innovative ideas to life through our expertise <br> in mobile, web, and
                    custom software development. Explore our portfolio to see<br> how we have transformed businesses
                    with
                    our cutting-edge solutions<br> and exceptional service.
                </p>
            </div>
            <div class="py-5 px-0 mt-5 portfolio-slider multiple-items3">
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/healthcare.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/healthcare-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Healthcare</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/e-commerce.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/e-commerce-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">E-Commerce</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/education.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/education-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Education</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/real.png') }}" alt="" class="hover-img"
                                width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/real-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Real Estate</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/social.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/social-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Social Network</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/travel.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/travel-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Travel Tourism</p>
                </div>
                <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/solution.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/solution-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Customized Solutions</p>
                </div>
                {{-- <div class="hexagon-outer">
                    <div class="hexagon">
                        <div class="hexagon-ring position-absolute">
                            <img src="{{ asset('assets/images/hexagon-ring.png') }}" alt="" class=""
                                width="185px" height="190px">
                        </div>
                        <div class="outer-img position-absolute d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/images/skills/healthcare.png') }}" alt=""
                                class="hover-img" width="172">
                        </div>
                        <div class="inner-img position-absolute">
                            <img src="{{ asset('assets/images/skills/healthcare-active.png') }}" alt=""
                                class="" width="165px">
                        </div>
                    </div>
                    <p class="w-100 text-center fs-4 fw-bold text-white">Healthcare</p>
                </div> --}}
            </div>
        </div>
        <div class="">
            <div
                class="estate-pie-box mx-md-5 mx-1 py-lg-0 py-4 ps-1 my-5 radius-20 d-lg-flex align-items-center shadow-lg">
                <div class="estate-pie-left-side col-lg-5">
                    <div class="col-lg-10 ms-lg-5 ms-md-5 ms-2">
                        <div class="esate-pie-logo">
                            <img src="{{ asset('assets/images/logo/estate-pie-logo.png') }}" alt=""
                                width="160px">
                        </div>
                        <p class="heading fs-45 fw-bold text-blue"> Your Management And Listing Platform.</p>
                        <p class="text fs-4 text-blue text-justify opacity-7">
                            Welcome to Estatepie website, for property sale, purchase, and lease. Available on Web,
                            Estatepie simplifies property management by enabling users to efficiently manage tenants and
                            handle real estate transactions. Whether you're a landlord seeking to streamline your
                            management tasks or a tenant in search of a new home, Estatepie provides a seamless and
                            convenient experience for all your real estate needs.
                        </p>
                        {{-- <div class="button">
                            <a href="#!"
                                class="btn fs-4 px-5 py-lg-3 text-dark radius-50 fw-600 bg-yellow shadow-none mt-3">
                                Learn More
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 px-0 text-end mt-lg-0 mt-lg-2 mt-3">
                    <img src="{{ asset('assets/images/estate-pie-img.png') }}" alt="" class=""
                        width="100%">
                </div>
            </div>

            <div
                class="carchive-app-box mx-md-5 mx-1 py-lg-0 py-3 my-5 radius-20 d-lg-flex align-items-center shadow-lg">
                <div class="left-corner">
                    <img src="{{ asset('assets/images/left-corner.png') }}"
                        class="position-absolute top-0 end-0 d-lg-block d-md-block d-none" alt=""
                        width="200px">
                </div>
                <div class="right-corner">
                    <img src="{{ asset('assets/images/right-corner.png') }}"
                        class="position-absolute bottom-0 start-0" alt="" width="235px">
                </div>
                <div class="carchive-app-left-side col-lg-5">
                    <div class="col-lg-10 ms-lg-5 ms-md-5 ms-2">
                        <div class="carchive-logo d-flex gap-3 align-items-center mt-lg-0 mt-md-0 mt-3">
                            <img src="{{ asset('assets/images/logo/carchive-logo.png') }}" alt=""
                                width="70px">
                            <p class="fs-1 fw-bold mb-0 text-white">CARCHIEVE</p>
                        </div>
                        <p class="heading fs-75 fw-bold text-white mb-0"> CARCHIVE</p>
                        <p class="text fs-4 text-white m-0 text-justify opacity-7">
                            Welcome to Carchive, your comprehensive mobile solution for managing cars, drivers' logs,
                            and car maintenance. Available on both Android and iOS platforms, Carchive also provides
                            garage owners with detailed maintenance records. Whether you’re a car owner looking to keep
                            track of your vehicle’s maintenance or a garage owner managing service records, Carchive
                            offers a seamless and efficient way to handle all your automotive needs.
                        </p>
                        {{-- <div class="button">
                            <a href="#!"
                                class="btn fs-4 px-5 py-3 mt-2 text-dark radius-50 fw-600 bg-white shadow-none learn-more mt-3">Learn
                                More</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 text-lg-end text-center mt-lg-0 mt-2">
                    <img src="{{ asset('assets/images/carchive-img.png') }}" alt=""
                        class="me-lg-5 carchive-img img-fluid col-lg-7 col-10">
                </div>
            </div>

            <div
                class="estate-pie-app-box mx-md-5 mx-1 py-lg-0 py-3 my-5 radius-20 d-lg-flex align-items-center shadow-lg">
                <div class="estate-pie-app-left-side col-lg-5">
                    <div class="col-lg-10 ms-lg-5 ms-md-5 ms-2">
                        <div class="esate-pie-app-logo">
                            <img src="{{ asset('assets/images/logo/estate-pie-app-logo.png') }}" alt=""
                                width="180px">
                        </div>
                        <p class="heading fs-45 fw-bold text-white"> Your Management And Listing Platform.</p>
                        <p class="text fs-4 text-white text-justify opacity-7">
                            Estatepie is a versatile app designed for property sale, purchase, and lease, available on
                            both Android and iOS platforms. It empowers users to manage tenants efficiently, making
                            property management seamless and convenient. Whether you're a landlord or a tenant,
                            Estatepie simplifies the entire real estate process.
                        </p>
                        {{-- <div class="button">
                            <a href="#!"
                                class="btn fs-4 px-5 py-3 text-dark radius-50 fw-600 bg-yellow shadow-none mt-3">Learn
                                More</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 text-lg-end text-center mt-lg-0 mt-2">
                    <img src="{{ asset('assets/images/estate-pie-app-img.png') }}" alt=""
                        class="img-fluid col-lg-12">
                </div>
            </div>

            <div class="carchive-web-box mx-md-5 mx-1 py-0 py-3 my-5 radius-20 d-lg-flex align-items-center shadow-lg">
                <div class="right-corner">
                    <img src="{{ asset('assets/images/right-corner.png') }}"
                        class="position-absolute bottom-0 start-0" alt="" width="235px">
                </div>
                <div class="carchive-app-left-side col-lg-5">
                    <div class="col-lg-10 ms-lg-5 ms-md-5 ms-2">
                        <div class="carchive-logo d-flex gap-3 align-items-center mt-lg-0 mt-md-0 mt-3">
                            <img src="{{ asset('assets/images/logo/carchive-logo.png') }}" alt=""
                                width="70px">
                            <p class="fs-1 fw-bold mb-0 text-white">CARCHIEVE</p>
                        </div>
                        <p class="heading fs-75 fw-bold text-white mb-0"> CARCHIVE</p>
                        <p class="text fs-4 text-white m-0 text-justify opacity-7">
                            Welcome to Carchive, your comprehensive web solution for managing cars, drivers' logs, and
                            car maintenance. Available on web, Carchive also provides garage owners with detailed
                            maintenance records. Our web portal offers companies and individuals an efficient way to
                            manage their fleets and personal vehicles. Whether you’re a car owner tracking your
                            vehicle’s maintenance, a garage owner managing service records, or a company overseeing a
                            fleet, Carchive offers a seamless and efficient platform to handle all your
                            automotive needs.
                        </p>
                        {{-- <div class="button">
                            <a href="#!"
                                class="btn fs-4 px-5 py-3 mt-2 text-dark radius-50 fw-600 bg-white shadow-none learn-more mt-3">Learn
                                More</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 text-lg-end text-center mt-lg-0 mt-2">
                    <img src="{{ asset('assets/images/carchive-web-img.png') }}" alt=""
                        class="me-lg-5 carchive-web-img img-fluid" width="98%">
                </div>
            </div>

            <div class="about-jeux-deevelopers my-5 py-5" id="aboutUs">
                <div class="jeux-developers-heading mt-5">
                    <div class="d-flex flex-column align-items-center position-relative mx-lg-0 mx-3">
                        <img src="{{ asset('assets/images/about-jeux-text.png') }}" alt="" width="700px"
                            class="img-fluid position-absolute jeux-text">
                        <img src="{{ asset('assets/images/about-jeux-img.png') }}" alt="" width="850px"
                            class="img-fluid">
                    </div>
                    <p class="text-center fs-5 text-cadet-grey mt-3">
                        Empowering Businesses with Cutting-Edge Digital Solutions. From Mobile and Web Development<br>
                        to Custom Software.
                        Innovation, Quality, and Client <br>Satisfaction at Our Core.
                    </p>
                </div>
                <div class="project-detail p-2 container mt-2">
                    {{-- <p class="text fs-1 text-center text-dark fw-bold py-5 mx-lg-0 mx-md-0 mx-2 mb-lg-auto mb-0">
                        In Pursuit Of Scaling The Digital Ecosystem<br>
                        Through Top-Tier Product Teams
                    </p> --}}
                    <div class="mx-0 row gap-3">
                        <div class="col-lg col-md-6 col-12 mt-3 card shadow-sm">
                            <span class="font-railway text-dark-orange">
                                500+
                            </span>
                            <p class="text-cadet-grey fs-3 text-center">Successful Projects</p>
                        </div>
                        <div class="col-lg col-md-6 col-12 mt-3 card shadow-sm">
                            <span class="font-railway text-dark-orange">
                                25+
                            </span>
                            <p class="text-cadet-grey fs-3 text-center mt-lg-2">Expert Engineers</p>
                        </div>
                        <div class="col-lg col-md-6 col-12 mt-3 card shadow-sm">
                            <span class="font-railway text-dark-orange">
                                25+
                            </span>
                            <p class="text-cadet-grey fs-3 text-center">Industries Served</p>
                        </div>
                        <div class="col-lg col-md-6 col-12 mt-3 card shadow-sm">
                            <span class="font-railway text-dark-orange">
                                98%
                            </span>
                            <p class="text-cadet-grey fs-3 text-center mb-0">Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 px-4">
                <div
                    class="story-box bg-white py-3 my-lg-5 my-2 mb-2 radius-20 d-lg-flex align-items-center shadow-lg">
                    <div class="carchive-app-left-side col-lg-7">
                        <div class="col-lg-10 ms-lg-5 ms-md-5 ms-2">
                            <p class="heading fs-45 fw-bold text-dark-orange our-story-heading">Our Story</p>
                            <p class="fs-4 fw-400 text-dark-orange">Founded in 2018</p>
                            <p class="text fs-4 text-cadet-grey m-0 text-justify">
                                 Jeux Developers began as a small team with a big vision to bring
                                innovative ideas to life through exceptional mobile, web, and custom software solutions.
                                Over the years, our dedication to quality and client satisfaction has fueled our growth,
                                expanding our team to 20 highly skilled professionals. Under the leadership of our CEO,
                                Farooq Arshad, we have tackled diverse projects across multiple platforms, consistently
                                delivering cutting-edge solutions that meet the unique needs of our clients. At Jeux
                                Developers, we pride ourselves on our creativity, reliability, and unwavering commitment
                                to excellence, always striving to exceed expectations and drive success for the
                                businesses we serve.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end text-center mt-lg-0 mt-2 p-lg-5 p-2">
                        <img src="{{ asset('assets/images/team1.png') }}" alt=""
                            class="carchive-web-img img-fluid" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 px-4">
            <div class="impact-box py-3 my-lg-5 my-2 shadow-lg radius-20 bg-light-orange">
                <div class="px-1 d-lg-flex align-items-center">
                    <div class="carchive-app-left-side col-lg-7">
                        <div class="col-lg-10 ps-lg-5 ms-2">
                            <p class="heading fs-45 fw-bold text-white"> Our Impact</p>
                            <p class="fs-4 text-white">Impact 2024 & Beyond!</p>
                            <p class="text fs-4 text-white m-0 opacity-7 text-justify">
                                Since our inception in 2018, Jeux Developers has made a significant impact in the tech
                                industry by delivering innovative and high-quality solutions across the globe. Our
                                dedication to excellence and client-centric approach have enabled us to transform
                                businesses, enhance user experiences, and drive growth. We have successfully completed
                                countless projects, each tailored to meet the unique needs of our clients, from startups
                                to large enterprises. Our work has not only solved complex challenges but also empowered
                                businesses to thrive in an increasingly digital world. With a growing team of talented
                                professionals, we continue to set new standards in mobile, web, and custom software
                                development, making a lasting positive impact on the industries we serve.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end text-center mt-lg-0 mt-2 p-lg-5 p-2">
                        <img src="{{ asset('assets/images/team2.png') }}" alt=""
                            class="carchive-web-img img-fluid" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="our-clients mx-lg-5 mt-lg-5 mt-md-5 mt-2">
            <div class="jeux-developers-heading">
                <div class="d-flex flex-column align-items-center position-relative">
                    <img src="{{ asset('assets/images/client-text.png') }}" alt="" width="270px"
                        class="img-fluid position-absolute portfolio-text">
                    <img src="{{ asset('assets/images/client-img.png') }}" alt="" width="300px"
                        class="img-fluid mt-4">
                </div>
                <p class="text-center fs-5 text-cadet-grey mt-3 w-100 d-flex justify-content-center">
                    <span class="col-lg-6 col-md-8 col-11">
                        Our Clients Span Various Industries, Showcasing Our Versatility and Expertise. From Startups to
                        Established Enterprises, We Deliver Tailored Solutions That Drive Success and Innovation.
                    </span>
                </p>
            </div>
            <div class="project-iamges row mx-0 py-lg-5 py-md-5 py-0">
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/trekend.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/security.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/seekooh.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/mr-fitx.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/p2p.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/divinity.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/sit-stand.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/carchive.png') }}" alt=""
                        class="w-100 shadow radius-20">
                </div>
                {{-- <div class="col-xl-3 col-lg-4 p-2">
                    <img src="{{ asset('assets/images/projects/yuka.png') }}" alt="" class="w-100">
                </div> --}}
            </div>
        </div>

        @include('include.footer')
    </section>
    @include('include.script')
    <script src="{{ asset('assets/libraries/js/slick.js') }}"></script>
    <script src="{{ asset('assets/libraries/js/slick.min.js') }}"></script>

    <script>
        $(function() {
            $('.press').mouseenter(function() {
                $(this).parent().find('.read-more-btn').addClass("read-more-btn-hover");
                $(this).parent().find('.read-more-arrow').addClass("read-more-arrow-hover");
                $(this).closest('.services-card').addClass("services-card-hover");
            }).mouseleave(function() {
                $(this).parent().find('.read-more-btn').removeClass("read-more-btn-hover");
                $(this).parent().find('.read-more-arrow').removeClass("read-more-arrow-hover");
                $(this).closest('.services-card').removeClass("services-card-hover");
            });
        });
    </script>
    <script>
        $('.multiple-items').slick({
            pauseOnHover: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            focusOnSelect: true,
            variableWidth: false,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 764,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 670,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 590,
                    settings: {
                        slidesToShow: 2.8,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 490,
                    settings: {
                        slidesToShow: 2.3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }

                }
            ]
        });
    </script>
    <script>
        $('.multiple-items2').slick({
            pauseOnHover: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            focusOnSelect: true,
            variableWidth: false,
            cssEase: 'linear',
            rtl: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 764,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 670,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 590,
                    settings: {
                        slidesToShow: 2.3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 490,
                    settings: {
                        slidesToShow: 2.8,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }

                }
            ]
        });
    </script>
    <script>
        $('.multiple-items3').slick({
            pauseOnHover: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            focusOnSelect: true,
            variableWidth: false,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 764,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 564,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }

                }
            ]
        });
    </script>
    <script>
        const container = document.getElementById("container");
        const boxSize = 38;
        const padding = 0;
        const numBoxesPerRow = Math.ceil(window.outerWidth / (boxSize + padding));
        const numRows = Math.ceil(window.innerHeight / (boxSize + padding));
        const numBoxes = numBoxesPerRow * numRows;
        let row = 0;
        let col = 0;

        for (let i = 0; i < numBoxes; i++) {
            const box = document.createElement("div");
            box.classList.add("box");
            box.dataset.row = row;
            box.dataset.col = col;
            box.style.left = col * (boxSize + padding) + "px";
            box.style.top = row * (boxSize + padding) + "px";
            container.appendChild(box);
            col++;
            if (col >= numBoxesPerRow) {
                col = 0;
                row++;
            }
        }

        const boxes = document.querySelectorAll(".box");

        boxes.forEach((box) => {
            box.style.width = boxSize + "px";
            box.style.height = boxSize + "px";

            box.addEventListener("click", (event) => {
                shakeBoxes(event.target, boxes);
            });

            box.addEventListener("mouseenter", () => {
                box.style.transform = "scale(2.5)";
            });

            box.addEventListener("mouseleave", () => {
                box.style.transform = "scale(1)";
            });
        });

        function shakeBoxes(clickedBox, allBoxes) {
            allBoxes.forEach((box) => {
                const clickedRow = parseInt(clickedBox.dataset.row);
                const clickedCol = parseInt(clickedBox.dataset.col);
                const boxRow = parseInt(box.dataset.row);
                const boxCol = parseInt(box.dataset.col);
                const dx = Math.abs(clickedCol - boxCol);
                const dy = Math.abs(clickedRow - boxRow);
                const distance = Math.sqrt(dx * dx + dy * dy);
                const delay = distance * 50;
                setTimeout(() => {
                    box.style.transform = "rotate(5deg)";
                    setTimeout(() => {
                        box.style.transform = "rotate(-5deg)";
                        setTimeout(() => {
                            box.style.transform = "rotate(0)";
                        }, 100);
                    }, 100);
                }, delay);
            });
        }
    </script>

</body>

</html>

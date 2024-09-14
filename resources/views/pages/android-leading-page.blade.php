@include('include.head')
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick-theme.css') }}">

<title>Jeux Developers</title>
</head>

<body>
    <section>
        <header class="home-banner" id="container">
            @include('include.navbar')
            <div class="custom-software-banner d-lg-flex align-items-center position-absolute z-index-1 mx-4">
                <div class="col-lg-7 mb-0">
                    <p class="fs-80 text-white fw-bold line-height-90">
                        Leading <span class="text-black"> Android / iOS<br> Apps</span> Development
                    </p>
                    <p class="fs-3 text-white fw-400 line-height-42 letter-spacing-3">
                        Over The Years, We've Developed Several Custom Android
                        Apps And iOS AppsHelped Client's Globally By Bringing Their
                        Android App Ideas To Life.
                    </p>
                    <button class="book-service-btn btn fs-5 px-4 py-2 mt-3">
                        Build Your Android & iOS Apps
                    </button>
                </div>
                <div class="col-lg-5 text-end">
                    <img src="{{ asset('assets/images/android-app-img.png') }}" alt="" class=""
                        width="90%">
                </div>
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
        <div class="service-description mx-lg-5 mx-3">
            <div class="w-100 d-flex justify-content-center">
                <p class="heading fs-55 fw-bold text-black text-shadow w-50 text-center">
                    Build Full-Fledged Customized Application <Forspan class="text-dark-orange"> Android And IOS App.
                    </Forspan>
                </p>
            </div>
            <div class="w-100 d-flex justify-content-center">
                <p class="letter-spacing-3 text-cadet-grey fs-4 w-50 text-center">
                    J eux Developers Is One The Top Android Development Company
                    That Offer Its Services In The Pakistan, Bahamas & U A E, Our
                    Products Have Great Impact In The Targeted Markets &
                    Generated A Massive Revenue.
                </p>
            </div>
            <div class="row my-3">
                <div class="p-2 col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="border radius-30 bg-white radius-right-3-important shadow p-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="d-flex gap-2 align-items-center col-7">
                                <img src="{{ asset('assets/images/icons/android-icon.png') }}" alt=""
                                    width="50px">
                                <p class="mb-0 text-black fs-5 fw-600">
                                    Android Smartphone
                                </p>
                            </span>
                            <span class="text-dark-orange fs-4 fw-500 text-end col-5">01</span>
                        </div>
                        <p class="text-cadet-grey">
                            At Jeux Developers. We Develop Your Ideas.
                            We Go Through Your Requirements Your
                            Expectations & Set The Project Deliveries &
                            Ti meli nes
                        </p>
                    </div>
                </div>
                <div class="p-2 col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="border radius-30 bg-white radius-left-3-important shadow p-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="d-flex gap-2 align-items-center col-7">
                                <img src="{{ asset('assets/images/icons/android-tv-icon.png') }}" alt=""
                                    width="50px">
                                <p class="mb-0 text-black fs-5 fw-600">
                                    Android <br> TV
                                </p>
                            </span>
                            <span class="text-dark-orange fs-4 fw-500 text-end col-5">02</span>
                        </div>
                        <p class="text-cadet-grey">
                            At Jeux Developers. We Develop Your Ideas.
                            We Go Through Your Requirements Your
                            Expectations & Set The Project Deliveries &
                            Ti meli nes
                        </p>
                    </div>
                </div>
                <div class="p-2 col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="border radius-30 bg-white radius-right-3-important shadow p-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="d-flex gap-2 align-items-center col-7">
                                <img src="{{ asset('assets/images/icons/android-watch-icon.png') }}" alt=""
                                    width="50px">
                                <p class="mb-0 text-black fs-5 fw-600">
                                    Android Wearable App
                                </p>
                            </span>
                            <span class="text-dark-orange fs-4 fw-500 text-end col-5">03</span>
                        </div>
                        <p class="text-cadet-grey">
                            At Jeux Developers. We Develop Your Ideas.
                            We Go Through Your Requirements Your
                            Expectations & Set The Project Deliveries &
                            Ti meli nes
                        </p>
                    </div>
                </div>
                <div class="p-2 col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="border radius-30 bg-white radius-left-3-important shadow p-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="d-flex gap-2 align-items-center col-7">
                                <img src="{{ asset('assets/images/icons/android-app-icon.png') }}" alt=""
                                    width="50px">
                                <p class="mb-0 text-black fs-5 fw-600">
                                    Android Tablet Apps
                                </p>
                            </span>
                            <span class="text-dark-orange fs-4 fw-500 text-end col-5">04</span>
                        </div>
                        <p class="text-cadet-grey">
                            At Jeux Developers. We Develop Your Ideas.
                            We Go Through Your Requirements Your
                            Expectations & Set The Project Deliveries &
                            Ti meli nes
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light-orange py-5 min-height-50">
            <div class="mx-5">
                <p class="fs-55 text-white fw-600 w-65">
                    Enabling Businesses To Set Up & Expand Their
                    Digital Footprint
                </p>
                <p class="fs-4 text-white fw-400 letter-spacing-3">
                    The Solutions We've Provided To All The Industries Which Are Mentioned Here Have Given
                    Us Some Beyond The Thinking Experience & Grip Over The Time. We're The Experts To
                    Develop A Product Which Suits & Meets Your Needs.
                </p>
            </div>
        </div>
        <div class="cards multiple-cards">
            <div class="card card-1 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/music.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Music</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        Like Every Other Industry The
                        Music Industry Is Also Digitalizing
                        It Self. So, We're Facilitating By
                        Creating Karaoke, Music
                        Composition & Instrumental Apps
                        Which Plays A Vital & Dynamic
                        Role In Industry.
                    </p>
                </div>
            </div>
            <div class="card card-2 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/game.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Gaming</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        You All Loves To Gaming,
                        Right? But We Love To
                        Develop Games, So You Can
                        Play The Games With
                        Stunning Graphics & Get Top
                        Notch Gaming Experience.
                    </p>
                </div>
            </div>
            <div class="card card-3 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/real.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Real Estate</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        Jeux Developers Has Created
                        Many Real Estate Apps For
                        Their Beloved Clients. Which
                        Give Them More Modern And
                        Expertise Solution For The
                        Trends Set By The Industry.
                    </p>
                </div>
            </div>
            <div class="card card-4 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/education.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Education</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        EdTech Has Been Getting
                        Increasingly Popular Ever Since
                        Remote Learning Became Famous.
                        From Online Tutor To Online
                        Institution. Everything Is Shifting
                        Into Digital Platforms.
                    </p>
                </div>
            </div>
            <div class="card card-5 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/travel.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Traveling</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        Now Days From Booking To
                        Tracking Everything Is Handled
                        Digitally. We've Developed Apps
                        Which Can Schedule Your Tour
                        From Booking, Planes,
                        Restaurants, Motels & Back To
                        Your Place With All The
                        Calculation Of Expense.
                    </p>
                </div>
            </div>
            <div class="card card-6 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/healthcare.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Healthcare & Wellness</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        We're The Pioneers Of The Apps
                        Which Are Directly Or Indirectly
                        Helps To Meet The Need Of The
                        Users Regarding Healthcare &
                        Wellness.
                    </p>
                </div>
            </div>
            <div class="card card-7 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/entertainment.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Entertainment</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        Entertaining Apps Are Attracting Most
                        Of The Online Trafic To Their
                        Platform. Jeux Developers Can Assist
                        You, Regardless Of The Platform A
                        Digital System That Taps The
                        Entertainment Market Capitalizes On
                        The Opportunity.
                    </p>
                </div>
            </div>
            <div class="card card-8 p-3 text-center shadow">
                <div class="card-img d-flex justify-content-center">
                    <img src="{{ asset('assets/images/icons/entertainment.png') }}" alt="" width="60px">
                </div>
                <div class="card-heading">
                    <p class="fs-2 text-shadow text-dark-orange fw-500">Entertainment</p>
                </div>
                <div class="card-text">
                    <p class="text-cadet-grey">
                        Entertaining Apps Are Attracting Most
                        Of The Online Trafic To Their
                        Platform. Jeux Developers Can Assist
                        You, Regardless Of The Platform A
                        Digital System That Taps The
                        Entertainment Market Capitalizes On
                        The Opportunity.
                    </p>
                </div>
            </div>
        </div>
        <div class="work-detail mt-5 w-100 d-flex justify-content-center">
            <div class="w-50 text-center">
                <p class="fs-55 text-black fw-bold text-shadow mb-0">
                    Why Choose Jeux Developers
                </p>
                <p class="fs-4 mb-0 fw-400">As Your ios Development Partner?</p>
                <p class="fs-5 text-cadet-grey letter-spacing-3 text-center">
                    Jeux Developers Takes Pride In Being Part Of 150+ Business Setups And Startups By
                    Providing Them Top -Notch Website And App Development Solutions, Take A Look At
                    Our Past Projects.
                </p>
            </div>

        </div>

        <div class="d-lg-flex align-items-center mx-4 px-2 mt-5">
            <div class="col-lg-6">
                <div class="">
                    <div class="d-flex align-items-center gap-3 my-4">
                        <span>
                            <img src="{{ asset('assets/images/icons/dark-arrow-icon.png') }}" alt=""
                                class="mt-2" width="40px">
                        </span>
                        <p class="text-cadet-grey fs-5 letter-spacing-3 mb-0">We Understand Conventional And Emerging
                            Technologies And Their use Cases.</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 my-4">
                        <span>
                            <img src="{{ asset('assets/images/icons/dark-arrow-icon.png') }}" alt=""
                                class="mt-2" width="40px">
                        </span>
                        <p class="text-cadet-grey fs-5 letter-spacing-3 mb-0">We Know How To Ensure Robust Performance
                            And Scalability Of Digital Assets.</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 my-2">
                        <span>
                            <img src="{{ asset('assets/images/icons/dark-arrow-icon.png') }}" alt=""
                                class="mt-2" width="40px">
                        </span>
                        <p class="text-cadet-grey fs-5 letter-spacing-3 mb-0">We Have A Team Of Experienced IPhone App
                            Developers
                            And O/ A Personnel. Our Sprint Sessions Ensure Quality
                            Products Before Delivery.</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 my-4">
                        <span>
                            <img src="{{ asset('assets/images/icons/dark-arrow-icon.png') }}" alt=""
                                class="mt-2" width="40px">
                        </span>
                        <p class="text-cadet-grey fs-5 letter-spacing-3 mb-0">We Enable Organizations In Meeting The
                            Ever -Evolving
                            Manifest And Latent Needs Of Their Customers.</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 my-4">
                        <span>
                            <img src="{{ asset('assets/images/icons/dark-arrow-icon.png') }}" alt=""
                                class="mt-2" width="40px">
                        </span>
                        <p class="text-cadet-grey fs-5 letter-spacing-3 mb-0">We Build Apps That Deliver Great
                            Experiences To
                            Users Instead Of Just Features.</p>
                    </div>
                    <button class="book-service-btn bg-light-orange btn fs-5 px-4 py-2 mt-3">
                        Get An IOS App For Your Business!
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <img src="{{ asset('assets/images/android.png') }}" alt="" width="80%">
            </div>
        </div>
        <div class="ms-4 testimonial-section">
            <p class="fs-4 fw-500 text-dark-orange">
                Testimonials
            </p>
            <p class="fs-1 fw-bold text-shadow">
                Our Clients Love Our Work!
            </p>
            <div class="testimonial-carsoul">
                <div class="testimonial-div col-7 p-2">
                    <div class="p-3 bg-light-pink radius-30 border d-lg-flex d-md-flex flex-row-reverse gap-2">
                        <div class="testimonial-image">
                            <img src="{{ asset('assets/images/randolph.png') }}" alt="" width="270px"
                                height="300px">
                        </div>
                        <div class="testimonial-detail">
                            <p class="fs-4 mb-0">
                                CEO Tagmuh
                            </p>
                            <p class="fs-1 fw-bold text-dark-orange">
                                Randolph Rolle
                            </p>
                            <p class="text-dark opacity-9 letter-spacing-2 mb-0">
                                They Are Very Professional And Patient Once They Got Your
                                Idea They Will Help You And Give You Advices To Make Things
                                Better. They Even Did Things Were Not Mentioned In The Plan.
                                Their Goal Is Always Satisfy You. I Recommend Them Without
                                Hesitation. And I'll Surely Work With Them Again Very Soon.
                            </p>
                            <p class="fw-500 letter-spacing-2">
                                Thanks For All
                            </p>
                            <button
                                class="bg-light-orange btn border-0 radius-30 px-4 py-3 d-flex gap-2 d-inline-block">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="testimonial-div col-7 p-2">
                    <div class="p-3 bg-light-pink radius-30 border d-lg-flex d-md-flex flex-row-reverse gap-2">
                        <div class="testimonial-image">
                            <img src="{{ asset('assets/images/frank.png') }}" alt="" width="270px"
                                height="300px">
                        </div>
                        <div class="testimonial-detail">
                            <p class="fs-4 mb-0">
                                CEO Splatter Bug Math
                            </p>
                            <p class="fs-1 fw-bold text-dark-orange">
                                Frank
                            </p>
                            <p class="text-dark opacity-9 letter-spacing-2 mb-0">
                                Excellent Communication, On-Time Delivery And High-Quality
                                Game Design. Team Is A Very Talented, Trustworthy And
                                Accommodating Game Designer. Every Minor Change That Was
                                Requested Was Done In A Timely Manner. If You Need Android
                                App Development. I Highly Recommend Them.
                            </p>
                            <p class="fw-500 letter-spacing-2">
                                Thanks For All
                            </p>
                            <button
                                class="bg-light-orange btn border-0 radius-30 px-4 py-3 d-flex gap-2 d-inline-block">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="testimonial-div col-7 p-2">
                    <div class="p-3 bg-light-pink radius-30 border d-lg-flex d-md-flex flex-row-reverse gap-2">
                        <div class="testimonial-image">
                            <img src="{{ asset('assets/images/eliana.png') }}" alt="" width="270px"
                                height="300px">
                        </div>
                        <div class="testimonial-detail">
                            <p class="fs-4 mb-0">
                                New Age Developers HTML
                            </p>
                            <p class="fs-1 fw-bold text-dark-orange">
                               Eliana Hebrew
                            </p>
                            <p class="text-dark opacity-9 letter-spacing-2 mb-0">
                                Patient And understanding And Works Hard To Get You What
                                You Want. They Are Great To Work With, Able To Bring Our
                                Company's Vision To Light. What A Wonderful Experience!!!
                            </p>
                            <p class="fw-500 letter-spacing-2">
                                Thanks For All
                            </p>
                            <button
                                class="bg-light-orange btn border-0 radius-30 px-4 py-3 d-flex gap-2 d-inline-block">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                                <img src="{{ asset('assets/images/icons/star.png') }}" width="20px"
                                    alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-4">
            <div class="project-meeting-section mt-5 d-lg-flex justify-content-end align-items-center">
                <div class="col-lg-6">
                    <p class="fs-1 text-white text-center fw-bold">
                        Hire Android App Developers For Top-Tier Product Development.
                    </p>
                    <div class="row px-3">
                        <div class="p-2 col-lg-6 col-md-6 col-12">
                            <div class="border radius-30 bg-white radius-right-3-important shadow p-3">
                                <p class="text-dark-orange fs-3 fw-600 text-center mb-0">
                                    Creating a Brand Identity
                                </p>
                                <p class="text-cadet-grey fs-6 fw-400 text-center">
                                    We Are A Mobile App Development
                                    Company That Specializes In Crcating
                                    Android Applications. We Work TO Build
                                    High-Ouality. Engaging And User-
                                    Friendly Mobile Apps That Help Your
                                    Business Grow.
                                </p>
                            </div>
                        </div>
                        <div class="p-2 col-lg-6 col-md-6 col-12">
                            <div class="border radius-30 bg-white radius-left-3-important shadow py-3 px-5">
                                <p class="text-dark-orange fs-3 fw-600 text-center mb-0">
                                    Unparalleled Experience
                                </p>
                                <p class="text-cadet-grey fs-6 fw-400 text-center">
                                    Wc Arc A IJX & LJI Design Agency
                                    That Works With Our Clients TO
                                    Create Apps. Games And Sites That
                                    Blend Seamlessly With The Look
                                    And Feel Of Their Brand.
                                </p>
                            </div>
                        </div>
                        <div class="p-2 col-lg-6 col-md-6 col-12">
                            <div class="border radius-30 bg-white radius-top-right-3-important shadow py-3 px-4">
                                <p class="text-dark-orange fs-3 fw-600 text-center mb-0">
                                    Minimal Yet Impactful Design
                                </p>
                                <p class="text-cadet-grey fs-6 fw-400 text-center px-5">
                                    UX Is The Key To Any Successful App,
                                    We Work With Our Clients To Create
                                    Games. Apps And Sites That Blend
                                    Seamlessly With The Look And Feel Of
                                    Their Brand.
                                </p>
                            </div>
                        </div>
                        <div class="p-2 col-lg-6 col-md-6 col-12">
                            <div class="border radius-30 bg-white radius-top-left-3-important shadow p-3">
                                <p class="text-dark-orange fs-3 fw-600 text-center mb-0">
                                    Understanding The Market
                                </p>
                                <p class="text-cadet-grey fs-6 fw-400 text-center">
                                    We Make Mobile App Development
                                    Easier By Understanding How You
                                    Want To use Your App, And Then
                                    Making Sure That It Fits Into The
                                    Industry Or Audience You Are
                                    Targeting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="discover-section">
            <div class="position-relative d-flex justify-content-center h-100 w-100">
                <img src="{{ asset('assets/images/icons/setting.png') }}" class="position-absolute setting-icon"
                    width="60px" alt="">
                <img src="{{ asset('assets/images/icons/msg.png') }}" class="position-absolute msg-icon"
                    width="60px" alt="">
                <div class="col-lg-4 col-md-6 col-12 position-absolute discover-div">
                    <div
                        class="border radius-40 bg-light-orange radius-right-10-important text-center shadow p-5 mx-lg-0 mx-3">
                        <p class="text-white fs-4 fw-500 text-center">
                            Discover
                        </p>
                        <p class="text-white fs-2 fw-600 text-center px-5">
                            Master The Art Of Efficient
                            And Effective Project
                            Discussion Scheduling With
                            'Scheduling Success'.
                        </p>
                        <button class="book-service-btn btn fs-5 px-4 py-2 mt-3">
                            Schedule Free Strategy Call
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="android-leading-footer">
            @include('include.footer')
        </div>
    </section>
    @include('include.script')
    <script src="{{ asset('assets/libraries/js/slick.js') }}"></script>
    <script src="{{ asset('assets/libraries/js/slick.min.js') }}"></script>

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
        $('.multiple-cards').slick({
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
    {{-- <script>
        $('.project-carousal').slick({
            slidesToShow: 1.8,
            slidesToScroll: 1,
        });
    </script> --}}
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
    <script>
        $('.testimonial-carsoul').slick({
            slidesToShow: 1.8,
            slidesToScroll: 1,
        });
    </script>
</body>

</html>

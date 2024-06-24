@include('include.head')
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libraries/css/slick-theme.css') }}">

<title>Jeux Developers</title>
</head>

<body>
    <section>
        <header class="home-banner" id="container">
            @include('include.navbar')
            <div class="lcd-div w-100 d-flex justify-content-center">
                <img src="{{ asset('assets/images/lcd-img.png') }}" alt="" width="80%" class="img-fluid">
            </div>
            <div class="cofee-cup-div">
                <img src="{{ asset('assets/images/cofee-img.png') }}" alt="" width="130" class="img-fluid">
            </div>
            <div class="home-page-heading w-100 d-flex justify-content-center">
                <p class="text-white fs-55 fw-bold text-center">
                    Crafting Products That Bring Joy And <br>
                    We Developer <span class="text-black">Mobile App</span>
                </p>
            </div>
            <div class="mouse-div">
                <img src="{{ asset('assets/images/mouse-img.png') }}" alt="" width="150" class="img-fluid">
            </div>
            <div class="keyboard-div w-100 text-center">
                <img src="{{ asset('assets/images/keyboard-img.png') }}" alt="" width="460"
                    class="img-fluid p-0">
            </div>
        </header>
        <div class="carasoule position-relative py-3 mb-5 col-12">
            <div class="ms-5 multiple-items">
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/angular.png') }}" alt="" width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/vue.png') }}" alt="" width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/laravel.png') }}" alt="" width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/node.png') }}" alt="" width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/python.png') }}" alt="" width="200px">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/react.png') }}" alt="" width="200px">
                    </a>
                </div>
            </div>
            <div class="ms-2 multiple-items2" dir="rtl">
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/css.png') }}" alt="" width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/next.png') }}" alt="" width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/swift.png') }}" alt="" width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/java.png') }}" alt="" width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/html.png') }}" alt="" width="200">
                    </a>
                </div>
                <div>
                    <a href="#!" class="btn px-2 shadow-none">
                        <img src="{{ asset('assets/images/skills/flutter.png') }}" alt="" width="200">
                    </a>
                </div>
            </div>
        </div>
        <div class="primary-service">
            <div class="service-heading">
                <div class="d-flex flex-column align-items-center position-relative">
                    <img src="{{ asset('assets/images/primary-text.png') }}" alt="" width="550px"
                        class="img-fluid position-absolute primary-text">
                    <img src="{{ asset('assets/images/primary-service.png') }}" alt="" width="650px"
                        class="img-fluid">
                </div>
                <p class="text-center fs-5 text-cadet-grey">
                    Call Us A Product Partner, A Product Studio, Or A Full-Stack App Development <br>
                    Agency. What We Do Stays The Same, And That's Product Services.
                </p>
            </div>
            <div class="row mx-5 my-5">
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="px-4 bg-white services-card border py-5 radius-20">
                        <h4 class="mb-0 fw-bold fs-2"><span class="d-xl-inline d-block">Custom Software</span>
                            Development
                        </h4>
                        <p class="fw-bold my-2">
                            Jeux Developers has a team of experienced Android App Developers
                            that are ready to help you with your app idea.
                        </p>
                        <div class="w-100 d-flex justify-content-end position-relative">
                            <a href="#!"
                                class="btn read-more-btn shadow-none text-start py-3 radius-10 mt-3 text-black text-decoration-none services__link border fw-bold col-lg-6 col-md-8 col-10 px-3 bg-white">
                                <span class="">Read More</span>
                            </a>
                            <span class="read-more-arrow mx-2 radius-10 bg-offwhite position-absolute press">
                                {{-- <img src="{{ asset('assets/images/icons/arrow-icon.png') }}" alt=""
                                    width="18px" class=""> --}}
                                <i class="fa fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-banner my-4 py-5">
            <div class="portfolio-heading">
                <div class="d-flex flex-column align-items-center position-relative">
                    <img src="{{ asset('assets/images/portfolio-text.png') }}" alt="" width="270px"
                        class="img-fluid position-absolute portfolio-text">
                    <img src="{{ asset('assets/images/portfolio-img.png') }}" alt="" width="300px"
                        class="img-fluid">
                </div>
                <p class="text-center fs-5 text-cadet-grey mt-3">
                    Jeux Developers Is Not Just A Service Provider: We Are An Invaluable<br>
                    Extension Of Your Marketing Team, Bringing A Powerful Combination Of<br>
                    Strategic Thinking, Expertise, And Flawless Execution To The Areas Where<br>
                    You Need It The Most.
                </p>
            </div>
            <div class="py-5 ps-5 mt-5 bg-light-orange multiple-items">
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
                <div class="hexagon">
                    <div class="outer-img position-absolute d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/images/skills/mobile-icon.png') }}" alt="" class="hover-img"
                            width="70px">
                        <p class="mb-0 mt-1 fw-bold">E - Commerce</p>
                    </div>
                    <div class="inner-img position-absolute">
                        <img src="{{ asset('assets/images/skills/hexa2.png') }}" alt="" class=""
                            width="140px">
                    </div>
                </div>
            </div>
        </div>
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
        $(function() {
            $('.hover-img').mouseenter(function() {
                $(this).parent().siblings('.inner-img').addClass("display-block");
            }).mouseleave(function() {
                $(this).parent().siblings('.inner-img').removeClass("display-block");
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
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 480,
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
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }

                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
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
                box.style.transform = "scale(1.5)";
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

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
                <div class="col-lg-7">
                    <p class="fs-80px text-white fw-bold line-height-90">
                        Custom Software <span class="text-black"> Development Services<br> For</span> Businesses of All
                        Sizes
                    </p>
                    <p class="fs-1 text-white fw-400 line-height-42">
                        We Create Custom, High-impact Software Solutions<br>
                        That Empower Businesses And Enable Them To Lead<br>
                        With Automation.
                    </p>
                    <button class="book-service-btn btn fs-5 px-4 py-2 mt-3">
                        Become a Client
                    </button>
                </div>
                <div class="col-lg-5 text-end">
                    <img src="{{ asset('assets/images/carchive-img.png') }}" alt="" class="w-75">
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
            <p class="heading fs-1 fw-bold text-dark-orange text-shadow">
                Service Description
            </p>
            <p class="letter-spacing-5 text-cadet-grey fs-4">
                Custom Software Development Is The Process Of Creating Tailored Software Applications Or<br>
                Solutions Designed To Meet Specific Business Needs, Requirements, And Objectives.
            </p>
            <div class="d-lg-flex align-items-center justify-content-between my-5">
                <div class="col-lg-6 letter-spacing-3 text-start">
                    <img src="{{ asset('assets/images/developer-img.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 ms-lg-5">
                    <p class="fs-5 mb-0 text-black">
                        Custom Software Development Company
                    </p>
                    <p class="fs-1 fw-bold text-dark-orange text-shadow">
                        That Power The World
                    </p>
                    <p class="text-cadet-grey fs-4">
                        We Have Worked With Leading Organizations And <br>
                        Institutions Around The Globe To Build Future-Centric<br>
                        Systems,<br>
                        With The Skills And Experience Of Our Seasoned<br>
                        Software Developers And Programmers, We Build<br>
                        Tailor-Made Software Solutions For Your Business. We<br>
                        Leave No Stone Unturned When Designing And<br>
                        Developing Software Systems, Keeping Your<br>
                        Instructions In Mind.
                    </p>
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
        <div class="work-detail mx-5 mt-5 text-center">
            <p class="fs-1 text-dark-orange fw-bold text-shadow">
                Our Work In Numbers
            </p>
            <p class="fs-4 text-cadet-grey letter-spacing-3 text-center">
                Jeux Developers Takes Pride In Being Part Of 150+ Business Setups And Startups By
                Providing Them Top -Notch Website And App Development Solutions, Take A Look At
                Our Past Projects.
            </p>
            <div class="row">
                <div class="col-lg-4 p-2">
                    <div class="text-center project-number-cards radius-20 py-4">
                        <p class="numbers fs-2 fw-bold">
                            750+
                        </p>
                        <p class="text fs-4 text-cadet-grey">
                            Applications Delivered
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <div class="text-center project-number-cards radius-20 py-4">
                        <p class="numbers fs-2 fw-bold">
                            200+
                        </p>
                        <p class="text fs-4 text-cadet-grey">
                            Applications Delivered
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <div class="text-center project-number-cards radius-20 py-4">
                        <p class="numbers fs-2 fw-bold">
                            30+
                        </p>
                        <p class="text fs-4 text-cadet-grey">
                            Applications Delivered
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-4 px-2 mt-5">
            <div class="col-lg-6 pe-4">
                <div class="radius-20 border-dotted p-4 bg-light-grey">
                    <div class="radius-20 p-4 bg-white">
                        <p class="heading text-shadow fs-1 text-black fw-600">
                            Book a Free <span class="text-dark-orange">Consultation</span>
                        </p>
                        <div class="form-group col-lg-12">
                            <label for="name" class=""></label>
                            <input type="text" name="name" id="name"
                                class="form-control shadow-none radius-10 mt-2 py-3" placeholder="Full Name" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="name" class=""></label>
                            <input type="text" name="name" id="name"
                                class="form-control shadow-none radius-10 mt-2 py-3" placeholder="Email" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="phone" class=""></label>
                            <input type="text" name="phone" id="phone"
                                class="form-control shadow-none radius-10 mt-2 py-3" placeholder="Phone Number"
                                required>
                        </div>
                        <div class="form-group col-lg-12 mt-2">
                            <label for="description" class="fw-bold"></label>
                            <textarea name="description" id="description" class="form-control shadow-none radius-20 py-3 mt-2" rows="4"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="form-group col-12 mt-2 ms-2">
                            <input type="checkbox" name="agreement" value="" id="agreement">
                            <label for="agreement" class="fs-6 form-check-label text-cadet-grey">&nbsp;&nbsp;Share Non
                                Disclosure Agreement.</label>
                        </div>
                        <div class="text-center">
                            <button class="book-service-btn btn bg-light-orange fs-5 px-5 py-2 mt-3">
                                Let's Connect!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-4">
                <div class="radius-20 border-dotted p-4 bg-light-grey">
                    <div class="radius-20 p-4">
                        <p class="heading text-shadow fs-1 text-black fw-600 col-xxl-9">
                            Result-Driven Software Solutions
                        </p>
                        <p class="letter-spacing-3 fs-5 text-cadet-grey">
                            We Help Our Clients Bring About
                            Intelligent Automation And Digital
                            Transformation By Providing The
                            Right Tools, Software And Services
                            To Keep Pace With Emerging
                            Technologies.
                        </p>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">Accelerating Their Business Processes</p>
                        </div>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">Acquiring And Retaining Consumers</p>
                        </div>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">Boosting Customer Engagement</p>
                        </div>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">Increasing Their Revenue</p>
                        </div>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">Maximizing Their Impact</p>
                        </div>
                        <div class="features d-flex gap-3">
                            <img src="{{ asset('assets/images/icons/radio-icon.png') }}" alt=""
                                class="mt-2" width="20px" height="20px">
                            <p class="text-cadet-grey fs-5">And Setting Industry Standards.</p>
                        </div>
                        <p class="text-cadet-grey fs-5 col-xxl-9 mt-3">
                            What F I se Can Yna Achieve With A Digital Prndur.t
                            Tail nr-Madp For V Oil r RI 1 qinpqq?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="latest-projects mt-5">
            <p class="heading fs-1 text-dark-orange text-shadow fw-bold text-center w-100">Our Latest Projects</p>
            <div class="ms-lg-5 ms-md-2 ms-1 project-carousal">
                <div class="project-div p-2">
                    <img src="{{ asset('assets/images/project1.png') }}" alt="" class="w-100">
                </div>
                <div class="project-div p-2">
                    <img src="{{ asset('assets/images/project2.png') }}" alt="" class="w-100">
                </div>
                <div class="project-div p-2">
                    <img src="{{ asset('assets/images/project3.png') }}" alt="" class="w-100">
                </div>
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
    <script>
        $('.project-carousal').slick({
            slidesToShow: 1.8,
            slidesToScroll: 1,
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

<footer>
    <div class="location-box">
        <div class="col-lg-8 col-12 row mx-0 px-lg-2">
            <div class="col-lg-6 col-md-7 px-4 d-flex flex-column justify-content-center text-light">
                <p class="fs-4 my-1 mt-3">Jeux global presence</p>
                <p class="fs-3 my-1 fw-bold">Expanding To <br> Multiple Locations</p>
                <p class="my-1 fs-6">Come Meet Us At A Location Near You!</p>
                <div class="mt-1 d-lg-flex align-items-ceter gap-2">
                    <button class="btn bg-dark mt-1 d-flex align-items-center gap-2 text-light">
                        <img src="{{ asset('assets/images/pakistan.webp') }}" width="30px" alt=""> Pakistan
                    </button>
                    <button class="btn bg-dark mt-1 d-flex align-items-center gap-2 text-light">
                        <img src="{{ asset('assets/images/dubai.webp') }}" width="30px" alt=""> Dubai
                    </button>
                    <button class="btn bg-dark mt-1 d-flex align-items-center gap-2 text-light">
                        <img src="{{ asset('assets/images/bahamas.webp') }}" width="30px" alt=""> Bahamas
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <img src="{{ asset('assets/images/map.png') }}" width="100%" alt="">
            </div>
        </div>
    </div>
    <div class="idea-box d-flex justify-content-center">
        <div class="row mt-3 mx-0 px-2">
            <div class="col-lg-6 d-flex flex-column justify-content-center text-light">
                <p class="fs-5">Let's Talk</p>
                <p class="fs-3 fw-bold mb-0">Got an idea?</p>
                <p class="fs-3 fw-bold">Let's get in touch!</p>
                <p class="fs-6">Let's discuss your project and find out what we can do to provide value.</p>
            </div>
            <div class="col-lg-6 text-light py-3">
                <p class="fs-6">Let's discuss your project and find out what we can do to provide value.</p>
                <form class="row mx-0 text-light">
                    <div class="col-md-6 mt-2">
                        <select name="" id=""
                            class="form-control border-0 shadow-none wide fs-6 p-0 px-2 radius-0">
                            <option class="text-dark">Select Project Type</option>
                        </select>
                    </div>
                    <div class="col-md-6 text-light mt-2">
                        <input name="" id="" placeholder="Your Full Name"
                            class="form-control border-0 wide p-2 fs-6 shadow-none radius-0" />
                    </div>
                    <div class="col-md-6 text-light mt-2">
                        <input name="" id="" placeholder="Your Email Address"
                            class="form-control border-0 wide p-2 fs-6 shadow-none radius-0" />
                    </div>
                    <div class="col-md-6 text-light mt-2">
                        <input name="" id="" placeholder="Your Phone Number"
                            class="form-control border-0 wide p-2 fs-6 shadow-none radius-0" />
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-light text-info mt-4 w-75 fs-5">Let's Get Started</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="links-section row mx-0 px-md-5 px-1">
        <div class="col-lg-4 col-md-6 p-md-3 p-2 address mt-3">
            <h4 class="fw-bold fs-4 mt-3">Contact Us</h4>
            <p class="mb-0 mt-3">
                Tel: <a href="tel:+1(315)3550065" class="text-dark text-decoration-none">
                    +1 (315) 3550065
                </a>
            </p>
            <p class="my-2">
                Email: <a href="mailto:contact@jeuxdevelopers.com" class="text-dark text-decoration-none">
                    contact@jeuxdevelopers.com
                </a>
            </p>
            <address class="">House No 58, Kalma Gardens, Sahiwal District, Punjab 57000</address>
            <div class="d-flex">
                {{-- <a href="{{route('social')}}" class="text-sky-blue text-decoration-none">Contact Through</a> --}}
                <a href="https://www.facebook.com/JeuxDevelopers" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/facebook.png') }}" width="50%" alt="">
                </a>
                <a href="https://twitter.com/JeuxDevelopers" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/x.png') }}" width="70%" alt="">
                </a>
                <a href="https://www.linkedin.com/company/jeux-developers/" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/in.png') }}" width="70%" alt="">
                </a>
                <a href="https://www.instagram.com/jeux_developers/" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/insta.png') }}" width="70%" alt="">
                </a>
                <a href="https://www.youtube.com/@jeuxdevelopers94" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/youtube.png') }}" width="70%" alt="">
                </a>
                <a href="https://www.behance.net/jeuxdevelopers" class="social-btn">
                    <img src="{{ asset('assets/images/socialmedia-images/behance.png') }}" width="70%" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-md-3 p-2 mt-3">
            <h5 class="fw-bold">Sign Up to Stay Up-to-Date!</h5>
            <p>Stay on top of emerging trends impacting your industry with us!</p>
            <form action="">
                <input type="email" name="" id="" placeholder="Email"
                    class="p-3 form-control shadow-none">
                <input type="submit" value="Subscribe" class="btn border-none px-5 footer-btn text-light mt-3">
            </form>
        </div>
        <div class="col-lg-4 col-md-6 p-md-2 p-2 mt-3">
            <h6 class="fw-bold">Sign Up to Stay Up-to-Date!</h6>
            <p>Estimate your cost of project by our project cost calculator based on start agency pricing and compare
                with our pricing to measure your savings.</p>
            <a href="#" class="btn border-none shadow-lg px-5 footer-btn text-light mt-3">Get Free Pricing</a>
        </div>
    </div>
</footer>

<nav class="navbar navbar-expand-lg navbar-light bg-light mx-4 py-2">
    <div class="container-fluid">
        <a class="navbar-brand p-0" href="#">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" width="100px" class="ms-3">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-0">
                <li class="nav-item px-1">
                    <a class="nav-link active text-rock-black @if ($page == 'homePage')
                        text-dark-orange fs-6
                    @endif fw-bold" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link active text-rock-black fw-bold" aria-current="page" href="#">SERVICES</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link active text-rock-black fw-bold" aria-current="page" href="#">PORTFOLIO</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link active text-rock-black fw-bold" aria-current="page" href="#">AREA</a>
                </li>
                <li class="nav-item dropdown px-1">
                    <a class="nav-link dropdown-toggle text-rock-black fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> --}}
                </li>
            </ul>
            <div class="contact-btns">
                <a href="#!" class="btn call-btn px-4 border-0 shadow-none me-2">Call</a>
                {{-- <a href="#!" class="btn  px-2 rounded-pill border-0 shadow-none">WHATSAPP</a> --}}
                <a href="#!"
                class="btn whatsapp-btn d-inline-flex px-3 align-items-center shadow-none d-inline rounded-pill me-2">
                <img src="{{ asset('assets/images/icons/whatsapp-icon.png') }}" width="25px" class="me-2" alt="">
                WHATSAPP
            </a>
                <a href="#!" class="btn contact-btn px-4 border-0 shadow-none">CONTACTUS</a>
            </div>
        </div>
    </div>
</nav>

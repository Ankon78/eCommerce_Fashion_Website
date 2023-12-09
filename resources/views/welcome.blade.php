<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('#') }}">
                {{ __('NorthStar') }}
            </a>

            <div class="navbtn">
                <a class="navLink" href="{{ url('/') }}">
                    {{ __('HOME') }}
                </a>
                <a class="navLink" href="{{ url('/') }}">
                    {{ __('ABOUT') }}
                </a>
                <a class="navLink" href="{{ url('/') }}">
                    {{ __('CONTACT US') }}
                </a>

            </div>

            <div class="profile ml-auto">

                <a class="icon" href="#">
                    <i class="fa-regular fa-user"></i>
                </a>

                <a class="icon" href="#">
                    <i class="fas fa-shopping-bag"></i>
                </a>

                <a href="">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </nav>


    {{-- navbar end --}}


    {{-- body large image --}}
    <div class="container-fluid">
        <div class="largeimage">
            {{-- <img src="{{ asset('image/img_1.png') }}" alt=""> --}}

            <p>stylist picks beat <br>
                the heat</p>
            <div class="button">
                <a class="shop-now" href="#" class="btn btn-primary " id="myButton"><span class="click">Shop
                        Now</span></a>
            </div>

        </div>

    </div>

    {{-- end body large image --}}

    {{-- start new arrivals --}}

    <div class="container cardContainer">
        <div class="arrival">
            <h3>Discover NEW Arrivals</h3>
            <p>Recently added shirts!</p>
        </div>
    </div>

    {{-- start product --}}
    <div class="container-fluid mt-5">

        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 ms-1">
            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img2.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Plain White Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$29.00</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img3.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Denim Jacket') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$69.00</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img4.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Black Polo Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$49.00</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img5.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Blue Sweatshirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$79.00</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img6.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Blue Plain Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$49.00</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img7.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Dark Blue Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$89.00</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img8.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Outcast T Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$19.00</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product">
                    <img src="{{ asset('image/img9.png') }}" alt="">


                    <div class="card-body">
                        <h5 class="">
                            <a href="">{{ __('Polo Plain Shirt') }}</a>

                        </h5>
                        <p class="">
                            <a href="">$29.00</a>

                        </p>
                    </div>
                </div>
            </div>


        </div>


    </div>

    {{-- end product card --}}

    {{-- start service facilities --}}

    <div class="container-fluid mt-5">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3">
            <div class="col ">
                <div class="service row">
                    <div class="col-2 ">
                        <i class="fa-solid fa-truck-fast" style="color: #204c97; float: right;"></i>
                    </div>
                    <div class="col-10">
                        <h6>Free Shipping</h6>
                        <p>Enjoy free shipping on all orders above $100</p>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="service row">
                    <div class="col-2 ">
                        <i class="fa-solid fa-life-ring" style="color: #204c97; float: right;"></i>
                    </div>
                    <div class="col-10">
                        <h6>SUPPORT 24/7</h6>
                        <p>Our support team is there to help you for queries</p>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="service row">
                    <div class="col-2 ">
                        <i class="fa-solid fa-rotate-left" style="color: #204c97; float: right;"></i>
                    </div>
                    <div class="col-10">
                        <h6>30 DAYS RETURN</h6>
                        <p>Simply return it within 30 days for an exchange.</p>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="service row">
                    <div class="col-2 ">
                        <i class="fa-solid fa-fingerprint" style="color: #204c97;"></i>
                    </div>
                    <div class="col-10">
                        <h6>100% PAYMENT SECURE</h6>
                        <p>Our payments are secured with 256 bit encryption</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>

</html>

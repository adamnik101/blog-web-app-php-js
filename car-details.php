<?php
include_once "static/head.php";
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+12) 345 678 910</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="car.php">Cars</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="car-details.php">Car Details</a></li>
                                        <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#" class="primary-btn">Add Car</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Porsche Cayenne Turbo S 2019</h2>
                        <div class="breadcrumb__links">
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Car Listing</a>
                            <span>Porsche cayenne turbo s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Details Section Begin -->
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="img/cars/details/cd-1.jpg" alt="">
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl="img/cars/details/cd-2.jpg"><img
                                        src="img/cars/details/sm-1.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-3.jpg"><img
                                        src="img/cars/details/sm-2.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-4.jpg"><img
                                        src="img/cars/details/sm-3.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-5.jpg"><img
                                        src="img/cars/details/sm-4.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-6.jpg"><img
                                        src="img/cars/details/sm-5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Vehicle
                                    Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Technical</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Features & Options</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Vehicle Location</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information2</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information3</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information4</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="car__details__sidebar">
                        <div class="car__details__sidebar__model">
                            <ul>
                                <li>Stock <span>K99D10459934</span></li>
                                <li>Vin <span>3VWKM245686</span></li>
                            </ul>
                            <a href="#" class="primary-btn">Get Today Is Price</a>
                            <p>Pricing in 11/26/2019</p>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <li>MSRP <span>$120,000</span></li>
                                <li>Dealer Discounts <span>$3,000</span></li>
                                <li>Price <span>$117,000</span></li>
                            </ul>
                            <a href="#" class="primary-btn"><i class="fa fa-credit-card"></i> Express Purchase</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-sliders"></i> Build Payment</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-money"></i> Value Trade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Details Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+12) 345 678 910</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> Colorlib@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Any questions? Let us know in store at 625 Gloria Union, California, United Stated or call us
                            on (+1) 96 123 8888</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Purchase</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Payemnt</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Shipping</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Return</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Hatchback</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Sedan</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> SUV</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Crossover</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__brand">
                        <h5>Top Brand</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Abarth</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Acura</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Alfa Romeo</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Audi</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> BMW</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Chevrolet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ferrari</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Honda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
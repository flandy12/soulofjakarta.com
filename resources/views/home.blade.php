<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SoulOfJakarta</title>

    <!-- Favicon -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300&family=Lexend:wght@300;500;700&family=News+Cycle:wght@400;700&family=Playfair+Display:wght@400;600&family=Roboto+Condensed:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- ukuran pop up 600 X 400 -->
    <div class="alert-ads">
        <div class="alert-body">
            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
            <span class="close" id="alert-ads">X</span>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <img src="{{asset('images/logo/logo.svg')}}" alt="" class="navbar-brand" width="200px">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-6">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#">Event</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">Give Away</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Schedule Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Media Partner</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- ##### Hero Area Start ##### -->
    <section class="main-one">
        <div class="main-one-container">
            <div class="main-one-body">
                <div class="main-headline">
                    <a href="/artikel/1/detail">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt=""
                            class="img-headline">
                        <div class="content-body">
                            <span class="category Lifestyle">Lifestyle</span>
                            <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                            <h2 class="title"> Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                            <p>
                                Hai Sobat Souja, buat kalian para penggemar karya musik dari penyanyi ganteng Justin
                                Bieber
                                kayaknya harus siap merogoh kocek yang lumayan banyak ta
                            </p>
                        </div>
                    </a>
                </div>
                <div class="headline">
                    <div class="main-headline-second">
                        <img src="{{asset('storage/artikel-photos/justin.jpg')}}" alt="" class="img-headline-second">
                        <div class="headline-second-body">
                            <span class="category Music">Music</span>
                            <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="main-headline-second">
                        <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}" alt=""
                            class="img-headline-second">
                        <div class="headline-second-body">
                            <span class="category Culinary">Culinary</span>
                            <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- width max 900px  -->
    <div class="ads">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('storage/ads/benner.jpg')}}" alt="">
                </div>
                <!-- <div class="col">
                    <img src="{{asset('storage/ads/benner.jpg')}}" alt="">
                </div> -->
            </div>
        </div>
    </div>

    <section class="main-two">
        <div class="container">
            <div class="main-two-all">
                <div class="main-two-body">
                    <div class="main-two-title" data-aos="fade-up" data-aos-duration="2000">
                        <h2>Must Popular</h2>
                    </div>
                    <div class="swiper" data-aos="fade-left" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content">
                                    <div class="sidebar-img">
                                        <a href="/artikel/1/detail"> <img
                                                src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}"
                                                alt=""></a>
                                        <span class="category Music">Music</span>
                                    </div>
                                    <div class="sidebar-body">

                                        <div class="sidebar-body-text">
                                            <i class="time">Jumat, 22-04-2022 - 10:36 WIB </i>
                                            <a href="/artikel/1/detail">
                                                <h2>Most Frequently Asked Questions!</h2>
                                            </a>
                                            <p>Hai Sobat Souja, buat kalian para penggemar karya musik </p>
                                        </div>
                                        <div class="sidebar-footer-text">
                                            <i>1 Jam Yang Lalu</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content">
                                    <div class="sidebar-img">
                                        <a href="/artikel/1/detail">
                                            <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                                alt="">
                                        </a>
                                        <span class="category Lifestyle">Lifestyle</span>
                                    </div>
                                    <div class="sidebar-body">


                                        <div class="sidebar-body-text">
                                            <i class="time">Jumat, 22-04-2022 - 10:36 WIB </i>
                                            <a href="/artikel/1/detail">
                                                <h2>Most Frequently Asked Questions!</h2>
                                            </a>
                                            <p>Hai Sobat Souja, buat kalian para penggemar karya musik </p>
                                        </div>

                                        <div class="sidebar-footer-text">
                                            <i>1 Jam Yang Lalu</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content">
                                    <div class="sidebar-img">
                                        <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                            alt="">
                                        <span class="category Culinary">Culinary</span>
                                    </div>
                                    <div class="sidebar-body">

                                        <div class="sidebar-body-text">
                                            <i class="time">Jumat, 22-04-2022 - 10:36 WIB </i>
                                            <a href="/artikel/1/detail">
                                                <h2>Most Frequently Asked Questions!</h2>
                                            </a>
                                            <p>Hai Sobat Souja, buat kalian para penggemar karya musik </p>
                                        </div>
                                        <div class="sidebar-footer-text">
                                            <i>1 Jam Yang Lalu</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content">
                                    <div class="sidebar-img">
                                        <img src="{{asset('storage/artikel-photos/justin.jpg')}}" alt="">
                                        <span class="category Music">Music</span>
                                    </div>
                                    <div class="sidebar-body">

                                        <div class="sidebar-body-text">
                                            <i class="time">Jumat, 22-04-2022 - 10:36 WIB </i>
                                            <a href="/artikel/1/detail">
                                                <h2>Most Frequently Asked Questions!</h2>
                                            </a>
                                            <p>Hai Sobat Souja, buat kalian para penggemar karya musik </p>
                                        </div>
                                        <div class="sidebar-footer-text">
                                            <i>1 Jam Yang Lalu</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="main-three">
        <div class="container">
            <div class="main-three-all">
                <!-- Start Hot-Article -->
                <div class="main-three-title" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Hot Article</h2>
                </div>
                <div class="category-article" data-aos="fade-left" data-aos-duration="2000">
                    <span class="active"> Lifestyle</span>
                    <span> Music</span>
                    <span> Culinary</span>
                    <span> Event</span>
                </div>
                <div class="main-three-body">
                    <div class="content lifestyle" data-aos="fade-left" data-aos-duration="2000">
                        <div class="sidebar-img">
                            <a href="/artikel/1/detail">
                                <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="sidebar-body">
                            <span class="category">Lifestyle</span>
                            <a href="/artikel/1/detail">
                                <h2>Most Frequently Asked Questions!</h2>
                            </a>
                            <div class="sidebar-body-text">
                                <p>Hai Sobat Souja, buat kalian para penggemar karya musik ... </p>
                            </div>
                            <div class="sidebar-footer-text">
                                <p>BY <span class="auth">FLANDY</span>
                                </p>
                                <i>Jumat, 22/04/2022 - 10:36 WIB</i>
                            </div>
                        </div>
                    </div>
                    <div class="content music" data-aos="fade-left" data-aos-duration="2000">
                        <div class="sidebar-img">
                            <a href="/artikel/1/detail">
                                <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="sidebar-body">
                            <span class="category">Music</span>
                            <a href="/artikel/1/detail">
                                <h2>Most Frequently Asked Questions!</h2>
                            </a>
                            <div class="sidebar-body-text">
                                <p>Hai Sobat Souja, buat kalian para penggemar karya musik ... </p>
                            </div>
                            <div class="sidebar-footer-text">
                                <p>BY <span class="auth">FLANDY</span>
                                </p>
                                <i>Jumat, 22/04/2022 - 10:36 WIB</i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Hot Article -->

                <!--Start Article Headline -->
                <div class="main-three-headline">
                    <!-- Image width : 96%; height: 350px; -->
                    <div class="headline" data-aos="fade-up" data-aos-duration="500">
                        <a href="/artikel/1/detail"><img
                                src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt=""></a>
                        <div class="text">
                            <span class="Culinary">Culinary</span>
                            <a href="/artikel/1/detail">
                                <h1>Most Frequently Asked Questions!</h1>
                            </a>
                            <p>1 Jam Yang Lalu</p>
                        </div>
                    </div>

                    <div class="all-article-main-three">

                        <!-- Small article -->
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>

                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>
                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>
                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>

                        <!-- Medium article -->
                        <div class="content-medium" data-aos="fade-up" data-aos-duration="500">
                            <div class="text">
                                <span>Lifestyle</span>
                                <h1>" Jepretan Momen Horor 'Tsunami Covid' di India Menang Pulitzer "</h1>
                                <span>Rabu, 18/05/2022 - 16:49 WIB</span>
                            </div>
                            <div class="img-content">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                        </div>

                        <!-- Small article -->
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>
                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>
                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <a href="/artikel/1/detail"><img
                                        src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <a href="/artikel/1/detail">
                                    <h1>Most Frequently Asked Questions!</h1>
                                </a>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari
                                    Raya Lebaran. </p>
                                <span>
                                    <p>Rabu, 18/05/2022 - 16:49 WIB</p>
                                </span>
                            </div>
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--End Article Headline -->
            </div>

            <!-- Start Iklan & Berita Populer -->
            <div class="main-three-side">
                <!-- Start Iklan Image height: 280px;-->
                <div class="head-side">
                    <img src="{{asset('storage/ads/benner3.jpg')}}" alt="">
                </div>
                <!-- End Iklan -->

                <div class="body-slide-all">
                    <div class="title">
                        <span>Berita Terpopuler</span>
                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <span>Lifestyle</span>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <span>Culinary</span>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <span>Lifestyle</span>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <span>Music</span>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>

                </div>

                <!-- Start Iklan Image height: 280px;-->
                <div class="second-side">
                    <img src="{{asset('storage/ads/benner2.jpg')}}" alt="">
                </div>

                <div class="second-side">
                    <img src="{{asset('storage/ads/benner2.jpg')}}" alt="">
                </div>

                <!-- End Iklan -->


                <div class="body-slide-two">
                    <div class="title">
                        <h2>Berita Populer Bulan Ini </h2>
                    </div>
                    <div class="body-side">
                        <div class="left-text">
                            <h1>#1</h1>
                        </div>
                        <div class="content-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="left-text">
                            <h1>#2</h1>
                        </div>
                        <div class="content-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="left-text">
                            <h1>#3</h1>
                        </div>
                        <div class="content-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="left-text">
                            <h1>#4</h1>
                        </div>
                        <div class="content-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="left-text">
                            <h1>#5</h1>
                        </div>
                        <div class="content-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Iklan & Berita Populer -->
        </div>
    </section>

    <!-- width max 400px  -->
    <div class="ads-footer">
        <div class="ads-container">
            <img src="{{asset('storage/ads/benner4.png')}}" alt="" srcset="">
            <img src="{{asset('storage/ads/benner5.png')}}" alt="" srcset="">
            <img src="{{asset('storage/ads/benner6.png')}}" alt="" srcset="">
        </div>
    </div>

    <div class="main-four">
        <div class="container">
            <div class="row m-5">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="card">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">EVENT'S CATEGORY</h6>
                        <!-- Twitter Slides -->
                        <div class="twitter-slides owl-carousel">

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p>CULINARY</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p>Music</p>
                                </div>
                            </div>

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p>Fashion, Health & Beauty</p>
                                </div>
                                <div class="single-twit">
                                    <p>Othrer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-6">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">OUR MEDIA PARTNER </h6>
                        <div class="widget"><a href="">
                                <img src="{{asset('images/logo/logo.png')}}" alt="">
                                <img src="{{asset('images/logo/01ckhgroup.png')}}" alt=""></a>
                            <img src="{{asset('images/logo/03ckhent.png')}}" alt="">
                            <img src="{{asset('images/logo/04citrakreasihutama.png')}}" alt="">
                            <img src="{{asset('images/logo/08ckhologram.png')}}" alt="">
                            <img src="{{asset('images/logo/09nusantara.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Footer Newsletter Area -->
                        <div class="footer-nl-area">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control" id="nlEmail"
                                    placeholder="Email Address ">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <!-- <script src="js/jquery/jquery-2.2.4.min.js"></script> -->
    <!-- Popper js -->
    <!-- <script src="js/bootstrap/popper.min.js"></script> -->
    <!-- Bootstrap js -->
    <!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->
    <!-- All Plugins js -->
    <!-- <script src="js/plugins/plugins.js"></script> -->

    <script src="js/animations.js"></script>
    <script src="js/alert.js"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>  -->

</body>

</html>
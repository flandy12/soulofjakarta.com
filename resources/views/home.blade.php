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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
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
                <form class="d-flex">
                    <input type="text" placeholder="Search.." name="search" class="form-control me-2" id="search-input">
                    <button type="submit" id="search"><i class="fa fa-search"></i></button>
                </form>
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
                            <h2 class="title">Richard Ekwonye - Portfolio</h2>
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
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="main-headline-second">
                        <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}" alt=""
                            class="img-headline-second">
                        <div class="headline-second-body">
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="ads">
        <div class="ads-container">
            <img src="{{asset('storage/ads/benner.png')}}" alt="" srcset="">
        </div>
    </div>

    <section class="main-two">
        <div class="container">
            <div class="main-two-all">
                <div class="main-two-body" >
                    <div class="main-two-title" data-aos ="fade-up" data-aos-duration="2000">
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
                                            <h2 class="title">Most Frequently Asked Questions!</h2>
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
                                        <span class="category Lifestyle">Lifestyle</span>
                                    </div>
                                    <div class="sidebar-body">

                                        <div class="sidebar-body-text">
                                            <i class="time">Jumat, 22-04-2022 - 10:36 WIB </i>
                                            <h2>Most Frequently Asked Questions!</h2>
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
                                            <h2>Most Frequently Asked Questions!</h2>
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
                                            <h2>Most Frequently Asked Questions!</h2>
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
                <div class="main-three-title" data-aos ="fade-up" data-aos-duration="500">
                    <h2 >Hot Article</h2>
                </div>
                <div class="category-article" data-aos="fade-left" data-aos-duration="500">
                    <span class="active"> Lifestyle</span>
                    <span> Music</span>
                    <span> Culinary</span>
                    <span> Event</span>
                </div>
                <div class="main-three-body">
                    <div class="content lifestyle" data-aos="fade-left" data-aos-duration="2000">
                        <div class="sidebar-img">
                            <a href="">
                                <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="sidebar-body">
                            <span class="category">Lifestyle</span>
                            <h2>Most Frequently Asked Questions!</h2>
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
                    <div class="content music" data-aos="fade-left" data-aos-duration="1000">
                        <div class="sidebar-img">
                            <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="sidebar-body">
                            <span class="category">Music</span>
                            <h2>Most Frequently Asked Questions!</h2>
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
                    <div class="headline" data-aos ="fade-up" data-aos-duration="500">
                        <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        <div class="text">
                            <span class="Culinary">Culinary</span>
                            <h1>Most Frequently Asked Questions!</h1>
                            <p>1 Jam Yang Lalu</p>
                        </div>
                    </div>

                    <div class="all-article-main-three">
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                        <div class="content-medium" data-aos ="fade-up" data-aos-duration="500">
                            <div class="text">
                                <span>Lifestyle</span>
                                <h1>"FOTO: Jepretan Momen Horor 'Tsunami Covid' di India Menang Pulitzer"</h1>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                            <div class="img-content">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                        </div>
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                        <div class="content" data-aos ="fade-up" data-aos-duration="500">
                            <div class="content-img">
                                <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}"
                                    alt="">
                            </div>
                            <div class="content-body">
                                <p class="time"></p>
                                <h1>Most Frequently Asked Questions!</h1>
                                <p>JakCloth Lebaran 2022 merupakan event clothing yang khusus digelar menjelang Hari Raya Lebaran. </p>
                                <span><i>Jumaat ,24 April 2002 </i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Article Headline -->
            </div>

            <!-- Start Iklan & Berita Populer -->
            <div class="main-three-side">
                <!-- Start Iklan Image height: 280px;-->
                <div class="head-side">
                    <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}" alt="">
                </div>
                <!-- End Iklan -->

                <div class="body-slide-all">
                    <div class="title">
                        <h2>Berita Terpopuler</h2>
                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <p class="lifestyle">Lifestyle</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <p class="culinary">Culinary</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <p class="lifestyle">Lifestyle</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>

                    </div>
                    <div class="body-side">
                        <div class="body-img">
                            <img src="{{asset('storage/artikel-photos/oppo-xcYaxvcAv3E-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="content-body">
                            <p class="music">Music</p>
                            <h2>Siap Nabung, Justin Bieber Segera Menggelar Konser Di Jakarta</h2>
                        </div>
                    </div>
                </div>

                <!-- Start Iklan Image height: 280px;-->
                  <div class="second-side">
                    <img src="{{asset('storage/artikel-photos/joshua-chun-y_gFnFzr0HY-unsplash.jpg')}}" alt="">
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

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo d-block mb-4"><img src="img/core-img/logo2.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                        <!-- Footer Newsletter Area -->
                        <div class="footer-nl-area">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control" id="nlEmail"
                                    placeholder="Your email">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Latest Twister</h6>
                        <!-- Twitter Slides -->
                        <div class="twitter-slides owl-carousel">

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found
                                        this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found
                                        this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I
                                        found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I
                                        found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Sport Videos</h6>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">DC Shoes: gymkhana the</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Our Address</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                            <p>Phone: 001-1234-88888</p>
                            <p>Email: info.colorlib@gmail.com</p>
                        </div>
                        <!-- Footer Social Area -->
                        <div class="footer-social-area">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>

    <script src="js/animations.js"></script>
    <script src="js/alert.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slide.js') }}"></script>

    <!-- <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>-->

</body>

</html>
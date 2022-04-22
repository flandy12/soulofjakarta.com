<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
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
    <!-- ##### Header Area End ##### -->

    <section class="detail-article">
        <!-- ##### Breadcrumb Area Start ##### -->
        <div class="vizew-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                        Home</a></li>
                                <li class="breadcrumb-item"><a href="#">{{$data[0]->nama}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reunification of migrant toddlers
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Breadcrumb Area End ##### -->

        <!-- ##### Post Details Area Start ##### -->
        <div class="post-details-area mb-80">
            <div class="container">          
                <div class="detail-body-all">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-20">
                                <img src="{{asset('storage/'.$data[0]->gambar_kecil)}}" alt="" class="h-1/2 w-full">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Post Details Content Area -->
                        <div class="col-lg-8">
                            <div class="post-details-content">
                                <!-- Blog Content -->
                                <div class="blog-content detail-article">
                                    <!-- Post Content -->
                                    <div class="blog-content-body">
                                    <div class="post-content mt-0">
                                        <p class="post-cata cata-sm cata-danger">{{$data[0]->nama}}</p>
                                        <p class="post-title mb-2">{{$data[0]->judul}}</p>

                                        <div class="d-flex justify-content-between mb-30">
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-author">By {{$penulis[0]->name}}</a>
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <a href="#"
                                                    class="post-date">{{date('d M y',strtotime($data[0]->created_at))}}</a>
                                            </div>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                            </div>
                                        </div>
                                    </div>
                                        <?php 
                                        echo $data[0]->isi
                                    ?>
                                    </div>

                                    <!-- Post Tags -->
                                    <div class="post-tags mt-30">
                                        <ul>
                                            <li><a href="#">HealthFood</a></li>
                                            <li><a href="#">Sport</a></li>
                                            <li><a href="#">Game</a></li>
                                        </ul>
                                    </div>

                                    <!-- Post Author -->
                                    <div class="vizew-post-author d-flex align-items-center py-5">
                                        <div class="post-author-thumb">
                                            <img src="{{asset('/storage/'.$profile)}}" alt="">
                                        </div>
                                        <div class="post-author-desc pl-4">
                                            <a href="#" class="author-name">{{$penulis[0]->name}}</a>
                                            <p>Hello! My name is Nicolas Sarkozy. I’m a web designer and front-end web
                                                developer
                                                with over fifteen years of professional.</p>
                                            <div class="post-author-social-info">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- `Relate`d Post Area -->
                                    <div class="related-post-area mt-5">
                                        <!-- Section Title -->
                                        <div class="section-heading style-2">
                                            <h4>Related Post</h4>
                                            <div class="line"></div>
                                        </div>

                                        <div class="row">

                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-md-6">
                                                <div class="single-post-area mb-50">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/bg-img/11.jpg" alt="">

                                                        <!-- Video Duration -->
                                                        <span class="video-duration">05.03</span>
                                                    </div>

                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                                        <a href="single-post.html" class="post-title">Warner Bros.
                                                            Developing
                                                            ‘The accountant’ Sequel</a>
                                                        <div class="post-meta d-flex">
                                                            <a href="#"><i class="fa fa-comments-o"
                                                                    aria-hidden="true"></i>
                                                                22</a>
                                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                                                16</a>
                                                            <a href="#"><i class="fa fa-thumbs-o-up"
                                                                    aria-hidden="true"></i>
                                                                15</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-md-6">
                                                <div class="single-post-area mb-50">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/bg-img/12.jpg" alt="">

                                                        <!-- Video Duration -->
                                                        <span class="video-duration">05.03</span>
                                                    </div>

                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                                        <a href="single-post.html" class="post-title">Searching for the
                                                            'angel'
                                                            who held me on Westminste</a>
                                                        <div class="post-meta d-flex">
                                                            <a href="#"><i class="fa fa-comments-o"
                                                                    aria-hidden="true"></i>
                                                                28</a>
                                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                                                17</a>
                                                            <a href="#"><i class="fa fa-thumbs-o-up"
                                                                    aria-hidden="true"></i>
                                                                22</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="col-lg-4">
                            <div class="sidebar-area">

                                <!-- ***** Single Widget ***** -->
                                <div class="single-widget share-post-widget mb-50">
                                    <p>Share This Post</p>
                                    <div class="share-icon">
                                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>
                                            Facebook</a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            Twitter</a>
                                        <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i>
                                            Google+</a>
                                    </div>
                                </div>

                                <!-- ***** Single Widget ***** -->
                                <div class="single-widget p-0 author-widget">
                                    <div class="p-4">
                                        <img class="author-avatar" src="{{asset('/storage/'.$profile)}}" alt="">
                                        <a href="#" class="author-name">Chris Hemsworth</a>
                                        <div class="author-social-info">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                                    </div>

                                    <div class="authors--meta-data d-flex">
                                        <p>Posted<span class="counter">80</span></p>
                                        <p>Comments<span class="counter">230</span></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

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

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
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

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Active js -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
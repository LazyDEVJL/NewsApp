@extends('layouts.frontend.app')
@section('content')
<!-- Header -->
<header id="header">
    <!-- Center Header -->
    <div id="center-header">
        <div class="container">
            <div class="header-logo">
                <a href="{{route('home')}}" class="logo"><img src="{{ asset('front-end theme/img/logo.png')}}" alt=""></a>
            </div>
            <div class="header-ads">
                <img class="center-block" src="{{ asset('front-end theme/img/ad-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- /Center Header -->

    <!-- Nav Header -->
    <div id="nav-header">
        <div class="container">
            <nav id="main-nav">
                <div class="nav-logo">
                    <a href="#" class="logo"><img src="{{ asset('front-end theme/img/logo-alt.png')}}" alt=""></a>
                </div>
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    @foreach($categories as $category)
                    <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="button-nav">
                <button class="search-collapse-btn"><i class="fa fa-search"></i></button>
                <button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
                <div class="search-form">
                    <form>
                        <input class="input" type="text" name="search" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Nav Header -->
</header>
<!-- /Header -->

<!-- Owl Carousel 1 -->
<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    @foreach($featurePosts as $featurePost)
    <!-- ARTICLE -->
    <article class="article thumb-article">
        <div class="article-img article-carousel">
            <img src="{{$featurePost->thumbnail}}" alt="{{$featurePost->title}}">
        </div>
        <div class="article-body">
            <ul class="article-info">
                <li class="article-category"><a href="{{getCategoryColumn($featurePost->category_id, 'slug')}}">{{getCategoryColumn($featurePost->category_id, 'name')}}</a></li>
            </ul>
            <h2 class="article-title"><a href="{{$featurePost->slug}}">{{$featurePost->title}}</a></h2>
            <ul class="article-meta">
                <li><i class="fa fa-clock-o"></i> {{$createdDate}}</li>
            </ul>
        </div>
    </article>
    <!-- /ARTICLE -->
    @endforeach
</div>
<!-- /Owl Carousel 1 -->

<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-8">
                <!-- row -->
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- section title -->
                        <div class="section-title">
                            <h2 class="title">News</h2>
                        </div>
                        <!-- /section title -->

                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-sm-1.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-camera"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                                <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing
                                    mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare
                                    theophrastus reprehendunt vel. Et commodo menandri eam.</p>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-7.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-8.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 1 -->

                    <!-- Column 2 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- section title -->
                        <div class="section-title">
                            <h2 class="title">Sport</h2>
                        </div>
                        <!-- /section title -->

                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-sm-2.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                                <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing
                                    mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare
                                    theophrastus reprehendunt vel. Et commodo menandri eam.</p>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-9.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-10.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 2 -->
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">News</h2>
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Column 1 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-sm-3.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-camera"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                                <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing
                                    mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare
                                    theophrastus reprehendunt vel. Et commodo menandri eam.</p>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 1 -->

                    <!-- /Column 2 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-sm-4.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-camera"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                                <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing
                                    mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare
                                    theophrastus reprehendunt vel. Et commodo menandri eam.</p>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 2 -->
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-md-1.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 1 -->

                    <!-- Column 2 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-md-2.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 2 -->

                    <!-- Column 3 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-md-3.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 3 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /Main Column -->

            <!-- Aside Column -->
            <div class="col-md-4">
                <!-- Ad widget -->
                <div class="widget center-block hidden-xs">
                    <img class="center-block" src="{{ asset('front-end theme/img/ad-1.jpg')}}" alt="">
                </div>
                <!-- /Ad widget -->

                <!-- social widget -->
                <div class="widget social-widget">
                    <div class="widget-title">
                        <h2 class="title">Stay Connected</h2>
                    </div>
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a>
                        </li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a>
                        </li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
                    </ul>
                </div>
                <!-- /social widget -->

                <!-- subscribe widget -->
                <div class="widget subscribe-widget">
                    <div class="widget-title">
                        <h2 class="title">Subscribe to Newslatter</h2>
                    </div>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="input-btn">Subscribe</button>
                    </form>
                </div>
                <!-- /subscribe widget -->

                <!-- article widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h2 class="title">Most Read</h2>
                    </div>

                    <!-- owl carousel 3 -->
                    <div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-md-3.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-md-4.jpg')}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-file-text"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /owl carousel 3 -->

                    <!-- ARTICLE -->
                    <article class="article widget-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="{{ asset('front-end theme/img/img-widget-1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article widget-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="{{ asset('front-end theme/img/img-widget-2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article widget-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="{{ asset('front-end theme/img/img-widget-3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->
                </div>
                <!-- /article widget -->
            </div>
            <!-- /Aside Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->

<!-- AD SECTION -->
<div class="visible-lg visible-md">
    <img class="center-block" src="{{ asset('front-end theme/img/ad-3.jpg')}}" alt="">
</div>
<!-- /AD SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-12">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">Popular Video</h2>
                    <div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
                </div>
                <!-- /section title -->

                <!-- owl carousel 2 -->
                <div id="owl-carousel-2" class="owl-carousel owl-theme">
                    <!-- ARTICLE -->
                    <article class="article thumb-article">
                        <div class="article-img">
                            <img src="{{ asset('front-end theme/img/img-thumb-1.jpg')}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-video-camera"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article thumb-article">
                        <div class="article-img">
                            <img src="{{ asset('front-end theme/img/img-thumb-2.jpg')}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-video-camera"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article thumb-article">
                        <div class="article-img">
                            <img src="{{ asset('front-end theme/img/img-thumb-3.jpg')}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-video-camera"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article thumb-article">
                        <div class="article-img">
                            <img src="{{ asset('front-end theme/img/img-thumb-4.jpg')}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-video-camera"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /ARTICLE -->
                </div>
                <!-- /owl carousel 2 -->
            </div>
            <!-- /Main Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-8">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">Popular Posts</h2>
                </div>
                <!-- /section title -->

                <!-- ARTICLE -->
                <article class="article row-article">
                    <div class="article-img">
                        <a href="#">
                            <img src="{{ asset('front-end theme/img/img-md-1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="article-body">
                        <ul class="article-info">
                            <li class="article-category"><a href="#">News</a></li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>
                        <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                        <ul class="article-meta">
                            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                            <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                        <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te
                            inciderint cotidieque pro, ei iisque docendi qui.</p>
                    </div>
                </article>
                <!-- /ARTICLE -->

                <!-- ARTICLE -->
                <article class="article row-article">
                    <div class="article-img">
                        <a href="#">
                            <img src="{{ asset('front-end theme/img/img-md-2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="article-body">
                        <ul class="article-info">
                            <li class="article-category"><a href="#">News</a></li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>
                        <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                        <ul class="article-meta">
                            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                            <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                        <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te
                            inciderint cotidieque pro, ei iisque docendi qui.</p>
                    </div>
                </article>
                <!-- /ARTICLE -->

                <!-- ARTICLE -->
                <article class="article row-article">
                    <div class="article-img">
                        <a href="#">
                            <img src="{{ asset('front-end theme/img/img-md-3.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="article-body">
                        <ul class="article-info">
                            <li class="article-category"><a href="#">News</a></li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>
                        <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                        <ul class="article-meta">
                            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                            <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                        <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te
                            inciderint cotidieque pro, ei iisque docendi qui.</p>
                    </div>
                </article>
                <!-- /ARTICLE -->

                <!-- ARTICLE -->
                <article class="article row-article">
                    <div class="article-img">
                        <a href="#">
                            <img src="{{ asset('front-end theme/img/img-md-4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="article-body">
                        <ul class="article-info">
                            <li class="article-category"><a href="#">News</a></li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>
                        <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                        <ul class="article-meta">
                            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                            <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                        <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te
                            inciderint cotidieque pro, ei iisque docendi qui.</p>
                    </div>
                </article>
                <!-- /ARTICLE -->

                <!-- pagination -->
                <div class="article-pagination">
                    <ul>
                        <li class="active"><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /pagination -->
            </div>
            <!-- /Main Column -->

            <!-- Aside Column -->
            <div class="col-md-4">
                <!-- article widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h2 class="title">Featured Posts</h2>
                    </div>

                    <!-- owl carousel 4 -->
                    <div id="owl-carousel-4" class="owl-carousel owl-theme">
                        <!-- ARTICLE -->
                        <article class="article thumb-article">
                            <div class="article-img">
                                <img src="{{ asset('front-end theme/img/img-thumb-1.jpg')}}" alt="">
                            </div>
                            <div class="article-body">
                                <ul class="article-info">
                                    <li class="article-category"><a href="#">News</a></li>
                                    <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                </ul>
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article thumb-article">
                            <div class="article-img">
                                <img src="{{ asset('front-end theme/img/img-thumb-2.jpg')}}" alt="">
                            </div>
                            <div class="article-body">
                                <ul class="article-info">
                                    <li class="article-category"><a href="#">News</a></li>
                                    <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                </ul>
                                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /owl carousel 4 -->
                </div>
                <!-- /article widget -->

                <!-- galery widget -->
                <div class="widget galery-widget">
                    <div class="widget-title">
                        <h2 class="title">Flickr Photos</h2>
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-3.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-4.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-5.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-6.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-7.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-8.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-9.jpg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-10.jpg')}}" alt=""></a></li>
                    </ul>
                </div>
                <!-- /galery widget -->

                <!-- tweets widget -->
                <div class="widget tweets-widget">
                    <div class="widget-title">
                        <h2 class="title">Recent Tweets</h2>
                    </div>
                    <ul>
                        <li class="tweet">
                            <i class="fa fa-twitter"></i>
                            <div class="tweet-body">
                                <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros
                                    euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                            </div>
                        </li>
                        <li class="tweet">
                            <i class="fa fa-twitter"></i>
                            <div class="tweet-body">
                                <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros
                                    euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                            </div>
                        </li>
                        <li class="tweet">
                            <i class="fa fa-twitter"></i>
                            <div class="tweet-body">
                                <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros
                                    euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /tweets widget -->
            </div>
            <!-- /Aside Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->

<!-- FOOTER -->
<footer id="footer">
    <!-- Top Footer -->
    <div id="top-footer" class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <!-- footer about -->
                    <div class="footer-widget about-widget">
                        <div class="footer-logo">
                            <a href="#" class="logo"><img src="{{ asset('front-end theme/img/logo-alt.png')}}" alt=""></a>
                            <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing
                                mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
                        </div>
                    </div>
                    <!-- /footer about -->

                    <!-- footer social -->
                    <div class="footer-widget social-widget">
                        <div class="widget-title">
                            <h3 class="title">Follow Us</h3>
                        </div>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <!-- /footer social -->

                    <!-- footer subscribe -->
                    <div class="footer-widget subscribe-widget">
                        <div class="widget-title">
                            <h2 class="title">Subscribe to Newslatter</h2>
                        </div>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="input-btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- /footer subscribe -->
                </div>
                <!-- /Column 1 -->

                <!-- Column 2 -->
                <div class="col-md-4">
                    <!-- footer article -->
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h2 class="title">Featured Posts</h2>
                        </div>

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="{{ asset('front-end theme/img/img-widget-3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /footer article -->
                </div>
                <!-- /Column 2 -->

                <!-- Column 3 -->
                <div class="col-md-4">
                    <!-- footer galery -->
                    <div class="footer-widget galery-widget">
                        <div class="widget-title">
                            <h2 class="title">Flickr Photos</h2>
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-3.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-4.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-5.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-6.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-7.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-8.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-9.jpg')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('front-end theme/img/img-widget-10.jpg')}}" alt=""></a></li>
                        </ul>
                    </div>
                    <!-- /footer galery -->

                    <!-- footer tweets -->
                    <div class="footer-widget tweets-widget">
                        <div class="widget-title">
                            <h2 class="title">Recent Tweets</h2>
                        </div>
                        <ul>
                            <li class="tweet">
                                <i class="fa fa-twitter"></i>
                                <div class="tweet-body">
                                    <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros
                                        euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /footer tweets -->
                </div>
                <!-- /Column 3 -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /Top Footer -->

    <!-- Bottom Footer -->
    <div id="bottom-footer" class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- footer links -->
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <!-- /footer links -->

                <!-- footer copyright -->
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                                            class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                </div>
                <!-- /footer copyright -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /Bottom Footer -->
</footer>
<!-- /FOOTER -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->
@endsection
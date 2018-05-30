@extends('layouts.frontend.app')
@section('content')
    <!-- Header -->
    @include('layouts.frontend.header')

    <!-- Owl Carousel 1 -->
    <div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    @foreach($featurePosts as $featurePost)
        <!-- ARTICLE -->
            <article class="article thumb-article">
                <div class="article-img article-crl">
                    <img src="{{$featurePost->thumbnail}}" alt="{{$featurePost->title}}">
                </div>
                <div class="article-body">
                    <ul class="article-info">
                        <li class="article-category">
                            <a href="{{getCategoryColumn($featurePost->category_id,'slug')}}">
                                {{getCategoryColumn($featurePost->category_id,'name')}}
                            </a>
                        </li>
                        <li class="article-type">
                            <i class="fa {{getIconBySlug(getCategoryColumn($featurePost->category_id,'slug'))}}"></i>
                        </li>
                    </ul>
                    <h2 class="article-title">
                        <a href="{{$featurePost->slug}}">
                            {{$featurePost->title}}
                        </a>
                    </h2>
                    <ul class="article-meta">
                        <li>
                            <i class="fa fa-clock-o"></i>
                            {{\Carbon\Carbon::parse($featurePost->created_at)->format('F d, Y')}}
                        </li>
                        <li><i class="fa fa-comments"></i> 33</li>
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
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Mobile</h2>
                    </div>
                    <!-- /section title -->
                    <div class="infinite-scroll">
                    @foreach($posts as $post)
                        <!-- ARTICLE -->
                            <article class="article row-article">
                                <div class="article-img">
                                    <a href="{{$post->slug}}">
                                        <div class="article-post">
                                            <img src="{{$post->thumbnail}}" alt="{{$post->title}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category">
                                            <a href="{{getCategoryColumn($post->category_id,'slug')}}">
                                                {{getCategoryColumn($post->category_id,'name')}}
                                            </a>
                                        </li>
                                        <li class="article-type">
                                            <i class="fa {{getIconBySlug(getCategoryColumn($post->category_id,'slug'))}}"></i>
                                        </li>
                                    </ul>
                                    <h4 class="article-title"><a href="{{$post->slug}}">{{$post->title}}</a></h4>
                                    <ul class="article-meta">
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            {{\Carbon\Carbon::parse($post->created_at)->format('F d, Y')}}
                                        </li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                    {!!str_limit($post->description, 120)!!}
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                    {{--{{ $posts->links('frontend.partials.paginator') }}--}}

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
                        @foreach($featurePostAlls as $featurePostAll)
                            <!-- ARTICLE -->
                                <article class="article thumb-article">
                                    <div class="article-img featureAll-thumb">
                                        <img src="{{$featurePostAll->thumbnail}}" alt="{{$featurePostAll->title}}">
                                    </div>
                                    <div class="article-body">
                                        <ul class="article-info">
                                            <li class="article-category">
                                                <a href="{{getCategoryColumn($featurePostAll->category_id,'slug')}}">
                                                    {{getCategoryColumn($featurePostAll->category_id,'name')}}
                                                </a>
                                            </li>
                                            <li class="article-type">
                                                <i class="fa {{getIconBySlug(getCategoryColumn($featurePostAll->category_id,'slug'))}}"></i>
                                            </li>
                                        </ul>
                                        <h5 class="article-title"><a
                                                    href="{{$featurePostAll->slug}}">{{$featurePostAll->title}}</a></h5>
                                        <ul class="article-meta">
                                            <li><i class="fa fa-clock-o"></i>
                                                {{\Carbon\Carbon::parse($featurePostAll->created_at)->format('F d, Y')}}
                                            </li>
                                            <li><i class="fa fa-comments"></i> 33</li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- /ARTICLE -->
                            @endforeach
                        </div>
                        <!-- /owl carousel 4 -->
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
                                <a href="#" class="logo"><img src="{{asset('front-end theme/img/logo-alt.png')}}"
                                                              alt=""></a>
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
                                        <img src="{{asset('front-end theme/img/img-widget-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a>
                                    </h4>
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
                                        <img src="{{asset('front-end theme/img/img-widget-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a>
                                    </h4>
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
                                        <img src="{{asset('front-end theme/img/img-widget-3.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a>
                                    </h4>
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
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-3.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-4.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-5.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-6.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-7.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-8.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-9.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="#"><img src="{{asset('front-end theme/img/img-widget-10.jpg')}}"
                                                     alt=""></a></li>
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
                                        <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret
                                            ceteros
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
    <div id="back-to-top">
        <span><i class="fa fa-arrow-circle-up"></i></span>
    </div>
    <!-- Back to top -->
@endsection
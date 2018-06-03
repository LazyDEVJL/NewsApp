@extends('layouts.frontend.app')
@section('content')
    @include('layouts.frontend.header')

    <!-- Owl Carousel 1 -->
    <div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    @foreach($featurePostAlls as $featurePostAll)
        <!-- ARTICLE -->
            <article class="article thumb-article">
                <div class="article-img article-crl">
                    <img src="{{$featurePostAll->thumbnail}}" alt="{{$featurePostAll->title}}">
                </div>
                <div class="article-body">
                    <ul class="article-info">
                        <li class="article-category">
                            <a href="{{ action('FrontEndController@category', ['category' => getCategoryColumn($featurePostAll->category_id,'slug')])}}">
                                {{getCategoryColumn($featurePostAll->category_id,'name')}}
                            </a>
                        </li>
                        <li class="article-type">
                            <i class="fa {{getIconBySlug(getCategoryColumn($featurePostAll->category_id,'slug'))}}"></i>
                        </li>
                    </ul>
                    <h2 class="article-title">
                        <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($featurePostAll->category_id,'slug'), 'slug' => $featurePostAll->slug]) }}">
                            {{str_limit($featurePostAll->title, 80)}}
                        </a>
                    </h2>
                    <ul class="article-meta">
                        <li>
                            <i class="fa fa-clock-o"></i>
                            {{\Carbon\Carbon::parse($featurePostAll->created_at)->format('F d, Y')}}
                        </li>
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
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Hôm nay bạn đọc gì?</h2>
                        <!-- tab nav -->
                        <ul class="tab-nav pull-right">
                            <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                            @foreach($categories as $category)
                                <li><a data-toggle="tab" href="#{{$category->slug}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                        <!-- /tab nav -->
                    </div>
                    <!-- /section title -->

                    <!-- Tab content -->
                    <div class="tab-content">
                        <!-- All-->
                        <div id="all" class="tab-pane fade in active">
                            <!-- row -->
                            <div class="row">
                            @foreach($allFirst4 as $allFirst4)
                                <!-- Column 1 -->
                                    <div class="col-md-3 col-sm-6">
                                        <!-- ARTICLE -->
                                        <article class="article">
                                            <div class="article-img">
                                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($allFirst4->category_id,'slug'), 'slug' => $allFirst4->slug]) }}">
                                                    <div class="today-thumb">
                                                        <img src="{{$allFirst4->thumbnail}}"
                                                             alt="{{$allFirst4->title}}">
                                                    </div>
                                                </a>
                                                <ul class="article-info">
                                                    <li class="article-type">
                                                        <i class="fa {{getIconBySlug(getCategoryColumn($allFirst4->category_id,'slug'))}}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="article-body">
                                                <h4 class="article-title">
                                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($allFirst4->category_id,'slug'), 'slug' => $allFirst4->slug]) }}">
                                                        {{str_limit($allFirst4->title, 40)}}
                                                    </a>
                                                </h4>
                                                <ul class="article-meta">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{\Carbon\Carbon::parse($allFirst4->created_at)->format('F d, Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- /ARTICLE -->
                                    </div>
                                    <!-- /Column 1 -->
                                @endforeach
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /All -->

                        <!-- Mobile-->
                        <div id="mobile" class="tab-pane fade in">
                            <!-- row -->
                            <div class="row">
                            @foreach($mobileFirst4 as $mobileFirst4)
                                <!-- Column 1 -->
                                    <div class="col-md-3 col-sm-6">
                                        <!-- ARTICLE -->
                                        <article class="article">
                                            <div class="article-img">
                                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($mobileFirst4->category_id,'slug'), 'slug' => $mobileFirst4->slug]) }}">
                                                    <div class="today-thumb">
                                                        <img src="{{$mobileFirst4->thumbnail}}"
                                                             alt="{{$mobileFirst4->title}}">
                                                    </div>
                                                </a>
                                                <ul class="article-info">
                                                    <li class="article-type">
                                                        <i class="fa {{getIconBySlug(getCategoryColumn($mobileFirst4->category_id,'slug'))}}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="article-body">
                                                <h4 class="article-title">
                                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($mobileFirst4->category_id,'slug'), 'slug' => $mobileFirst4->slug]) }}">
                                                        {{str_limit($mobileFirst4->title, 40)}}
                                                    </a>
                                                </h4>
                                                <ul class="article-meta">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{\Carbon\Carbon::parse($mobileFirst4->created_at)->format('F d, Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- /ARTICLE -->
                                    </div>
                                    <!-- /Column 1 -->
                                @endforeach
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /Mobile -->

                        <!-- CNTT-->
                        <div id="cong-nghe-thong-tin" class="tab-pane fade in">
                            <!-- row -->
                            <div class="row">
                            @foreach($cnttFirst4 as $cnttFirst4)
                                <!-- Column 1 -->
                                    <div class="col-md-3 col-sm-6">
                                        <!-- ARTICLE -->
                                        <article class="article">
                                            <div class="article-img">
                                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($cnttFirst4->category_id,'slug'), 'slug' => $cnttFirst4->slug]) }}">
                                                    <div class="today-thumb">
                                                        <img src="{{$cnttFirst4->thumbnail}}"
                                                             alt="{{$cnttFirst4->title}}">
                                                    </div>
                                                </a>
                                                <ul class="article-info">
                                                    <li class="article-type">
                                                        <i class="fa {{getIconBySlug(getCategoryColumn($cnttFirst4->category_id,'slug'))}}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="article-body">
                                                <h4 class="article-title">
                                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($cnttFirst4->category_id,'slug'), 'slug' => $cnttFirst4->slug]) }}">
                                                        {{str_limit($cnttFirst4->title, 40)}}
                                                    </a>
                                                </h4>
                                                <ul class="article-meta">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{\Carbon\Carbon::parse($cnttFirst4->created_at)->format('F d, Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- /ARTICLE -->
                                    </div>
                                    <!-- /Column 1 -->
                                @endforeach
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /CNTT -->

                        <!-- Internet-->
                        <div id="internet" class="tab-pane fade in">
                            <!-- row -->
                            <div class="row">
                            @foreach($internetFirst4 as $internetFirst4)
                                <!-- Column 1 -->
                                    <div class="col-md-3 col-sm-6">
                                        <!-- ARTICLE -->
                                        <article class="article">
                                            <div class="article-img">
                                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($internetFirst4->category_id,'slug'), 'slug' => $internetFirst4->slug]) }}">
                                                    <div class="today-thumb">
                                                        <img src="{{$internetFirst4->thumbnail}}"
                                                             alt="{{$internetFirst4->title}}">
                                                    </div>
                                                </a>
                                                <ul class="article-info">
                                                    <li class="article-type">
                                                        <i class="fa {{getIconBySlug(getCategoryColumn($internetFirst4->category_id,'slug'))}}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="article-body">
                                                <h4 class="article-title">
                                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($internetFirst4->category_id,'slug'), 'slug' => $internetFirst4->slug]) }}">
                                                        {{str_limit($internetFirst4->title, 40)}}
                                                    </a>
                                                </h4>
                                                <ul class="article-meta">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{\Carbon\Carbon::parse($internetFirst4->created_at)->format('F d, Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- /ARTICLE -->
                                    </div>
                                    <!-- /Column 1 -->
                                @endforeach
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /Internet -->

                        <!-- Kham pha-->
                        <div id="kham-pha" class="tab-pane fade in">
                            <!-- row -->
                            <div class="row">
                            @foreach($khamPhaFirst4 as $khamPhaFirst4)
                                <!-- Column 1 -->
                                    <div class="col-md-3 col-sm-6">
                                        <!-- ARTICLE -->
                                        <article class="article">
                                            <div class="article-img">
                                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($khamPhaFirst4->category_id,'slug'), 'slug' => $khamPhaFirst4->slug]) }}">
                                                    <div class="today-thumb">
                                                        <img src="{{$khamPhaFirst4->thumbnail}}"
                                                             alt="{{$khamPhaFirst4->title}}">
                                                    </div>
                                                </a>
                                                <ul class="article-info">
                                                    <li class="article-type">
                                                        <i class="fa {{getIconBySlug(getCategoryColumn($khamPhaFirst4->category_id,'slug'))}}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="article-body">
                                                <h4 class="article-title">
                                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($khamPhaFirst4->category_id,'slug'), 'slug' => $khamPhaFirst4->slug]) }}">
                                                        {{str_limit($khamPhaFirst4->title, 40)}}
                                                    </a>
                                                </h4>
                                                <ul class="article-meta">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{\Carbon\Carbon::parse($khamPhaFirst4->created_at)->format('F d, Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- /ARTICLE -->
                                    </div>
                                    <!-- /Column 1 -->
                                @endforeach
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /Kham pha -->
                    </div>
                    <!-- /tab content -->
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
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Tin tức</h2>
                    </div>
                    <!-- /section title -->
                    <div class="infinite-scroll">
                    @foreach($posts as $post)
                        <!-- ARTICLE -->
                            <article class="article row-article">
                                <div class="article-img">
                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($post->category_id,'slug'), 'slug' => $post->slug]) }}">
                                        <div class="article-post homeArticle-thumb">
                                            <img src="{{$post->thumbnail}}" alt="{{$post->title}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category">
                                            <a href="{{ action('FrontEndController@category', ['category' => getCategoryColumn($post->category_id,'slug')])}}">
                                                {{getCategoryColumn($post->category_id,'name')}}
                                            </a>
                                        </li>
                                        <li class="article-type">
                                            <i class="fa {{getIconBySlug(getCategoryColumn($post->category_id,'slug'))}}"></i>
                                        </li>
                                    </ul>
                                    <h4 class="article-title">
                                        <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($post->category_id,'slug'), 'slug' => $post->slug]) }}">{{$post->title}}
                                        </a>
                                    </h4>
                                    <ul class="article-meta">
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            {{\Carbon\Carbon::parse($post->created_at)->format('F d, Y')}}
                                        </li>
                                        {{--<li><i class="fa fa-comments"></i> 33</li>--}}
                                    </ul>
                                    {!!str_limit($post->description, 120)!!}
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        @endforeach
                        {{$posts->links()}}
                    </div>
                </div>
                <!-- /Main Column -->

            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /SECTION -->

    {{--<!-- SECTION -->--}}
    {{--<div class="section">--}}
    {{--<!-- CONTAINER -->--}}
    {{--<div class="container">--}}
    {{--<!-- ROW -->--}}
    {{--<div class="row">--}}
    {{--<!-- Main Column -->--}}
    {{--<div class="col-md-12">--}}
    {{--<!-- section title -->--}}
    {{--<div class="section-title">--}}
    {{--<h2 class="title">Tin mới nhất</h2>--}}
    {{--<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>--}}
    {{--</div>--}}
    {{--<!-- /section title -->--}}

    {{--<!-- owl carousel 2 -->--}}
    {{--<div id="owl-carousel-2" class="owl-carousel owl-theme">--}}
    {{--@foreach($featurePostAlls as $featurePostAll)--}}
    {{--<!-- ARTICLE -->--}}
    {{--<article class="article thumb-article">--}}
    {{--<div class="article-img newestPost-thumb">--}}
    {{--<img src="{{$featurePostAll->thumbnail}}" alt="{{$featurePostAll->title}}">--}}
    {{--</div>--}}
    {{--<div class="article-body">--}}
    {{--<ul class="article-info">--}}
    {{--<li class="article-category">--}}
    {{--<a href="{{getCategoryColumn($featurePostAll->category_id,'slug')}}">--}}
    {{--{{getCategoryColumn($featurePostAll->category_id,'name')}}--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="article-type">--}}
    {{--<i class="fa {{getIconBySlug(getCategoryColumn($featurePostAll->category_id,'slug'))}}"></i>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<h4 class="article-title">--}}
    {{--<a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($featurePostAll->category_id,'slug'), 'slug' => $featurePostAll->slug]) }}">--}}
    {{--{{str_limit($featurePostAll->title, 50)}}--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--<ul class="article-meta">--}}
    {{--<li>--}}
    {{--<i class="fa fa-clock-o"></i>--}}
    {{--{{\Carbon\Carbon::parse($featurePostAll->created_at)->format('F d, Y')}}--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- /ARTICLE -->--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--<!-- /owl carousel 2 -->--}}
    {{--</div>--}}
    {{--<!-- /Main Column -->--}}
    {{--</div>--}}
    {{--<!-- /ROW -->--}}
    {{--</div>--}}
    {{--<!-- /CONTAINER -->--}}
    {{--</div>--}}
    {{--<!-- /SECTION -->--}}

    @include('layouts.frontend.footer')

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- Back to top -->
@endsection
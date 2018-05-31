@extends('layouts.frontend.app')
@section('content')
    <!-- Header -->
    @include('layouts.frontend.header')
    <!-- THUMBNAIL-->
    <div class="parallax" style="background-image: url({{$postDetail[0]->thumbnail}})"></div>
    <!-- /THUMBNAIL-->

    <!-- SECTION -->
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-8">

                    <!-- breadcrumb -->
                    <ul class="article-breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>
                            <a href="{{action('FrontEndController@category', ['category' => $categoryParam])}}">
                                {{getCategoryColumn($postDetail[0]->category_id,'name')}}
                            </a>
                        </li>
                        <li>{{$postDetail[0]->title}}</li>
                    </ul>
                    <!-- /breadcrumb -->

                    <!-- ARTICLE POST -->
                    <article class="article article-post article-post-detail">
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category">
                                    <a href="{{action('FrontEndController@category', ['category' => $categoryParam])}}">
                                        {{getCategoryColumn($postDetail[0]->category_id,'name')}}
                                    </a>
                                </li>
                                <li class="article-type"><i
                                            class="fa {{getIconBySlug(getCategoryColumn($postDetail[0]->category_id,'slug'))}}"></i>
                                </li>
                            </ul>
                            <h1 class="article-title">{{$postDetail[0]->title}}</h1>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i>
                                    {{\Carbon\Carbon::parse($postDetail[0]->created_at)->format('F d, Y')}}
                                </li>
                                {{--<li><i class="fa fa-comments"></i> 33</li>--}}
                            </ul>
                            {!! $postDetail[0]->description !!}
                            {!! $postDetail[0]->content !!}
                        </div>
                    </article>
                    <!-- /ARTICLE POST -->

                    <!-- widget tags -->
                    <div class="widget-tags">
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{action('FrontEndController@category', ['category' => $category->slug])}}">
                                    {{$category->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /widget tags -->

                    {{--<!-- article comments -->--}}
                    {{--<div class="article-comments">--}}
                        {{--<div class="section-title">--}}
                            {{--<h2 class="title">Comments</h2>--}}
                        {{--</div>--}}

                        {{--<!-- comment -->--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<img src="img/av-1.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="media-body">--}}
                                {{--<div class="media-heading">--}}
                                    {{--<h5>John Doe <span class="reply-time">April 04, 2017 At 9:30 AM</span></h5>--}}
                                {{--</div>--}}
                                {{--<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne--}}
                                    {{--nec atqui paulo,</p>--}}
                                {{--<a href="#" class="reply-btn">Reply</a>--}}
                            {{--</div>--}}

                            {{--<!-- comment -->--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<img src="img/av-2.jpg" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<div class="media-heading">--}}
                                        {{--<h5>John Doe <span class="reply-time">April 04, 2017 At 9:30 AM</span></h5>--}}
                                    {{--</div>--}}
                                    {{--<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea.--}}
                                        {{--Ne nec atqui paulo,</p>--}}
                                    {{--<a href="#" class="reply-btn">Reply</a>--}}
                                {{--</div>--}}

                                {{--<!-- comment -->--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-left">--}}
                                        {{--<img src="img/av-1.jpg" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<div class="media-heading">--}}
                                            {{--<h5>John Doe <span class="reply-time">April 04, 2017 At 9:30 AM</span></h5>--}}
                                        {{--</div>--}}
                                        {{--<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id--}}
                                            {{--mea. Ne nec atqui paulo,</p>--}}
                                        {{--<a href="#" class="reply-btn">Reply</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /comment -->--}}
                            {{--</div>--}}
                            {{--<!-- /comment -->--}}
                        {{--</div>--}}
                        {{--<!-- /comment -->--}}

                        {{--<!-- comment -->--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<img src="img/av-2.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="media-body">--}}
                                {{--<div class="media-heading">--}}
                                    {{--<h5>John Doe <span class="reply-time">April 04, 2017 At 9:30 AM</span></h5>--}}
                                {{--</div>--}}
                                {{--<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne--}}
                                    {{--nec atqui paulo,</p>--}}
                                {{--<a href="#" class="reply-btn">Reply</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /comment -->--}}
                    {{--</div>--}}
                    {{--<!-- /article comments -->--}}

                    {{--<!-- reply form -->--}}
                    {{--<div class="article-reply-form">--}}
                        {{--<div class="section-title">--}}
                            {{--<h2 class="title">Leave a reply</h2>--}}
                        {{--</div>--}}

                        {{--<form>--}}
                            {{--<input class="input" placeholder="Name" type="text">--}}
                            {{--<input class="input" placeholder="Email" type="email">--}}
                            {{--<input class="input" placeholder="Website" type="url">--}}
                            {{--<textarea class="input" placeholder="Message"></textarea>--}}
                            {{--<button class="input-btn">Send Message</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<!-- /reply form -->--}}
                </div>
                <!-- /Main Column -->

                @include('layouts.frontend.aside-column')
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
                        <h2 class="title">Tin liên quan</h2>
                    </div>
                    <!-- /section title -->

                    <!-- row -->
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                        <div class="col-md-3 col-sm-6 col-12">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img relatedPost-thumb">
                                    <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($relatedPost->category_id,'slug'), 'slug' => $relatedPost->slug]) }}">
                                        <img src="{{$relatedPost->thumbnail}}" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa {{getIconBySlug(getCategoryColumn($relatedPost->category_id,'slug'))}}"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h5 class="article-title">
                                        <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($relatedPost->category_id,'slug'), 'slug' => $relatedPost->slug]) }}">
                                            {{str_limit($relatedPost->title, 40)}}
                                        </a>
                                    </h5>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i>
                                            {{\Carbon\Carbon::parse($relatedPost->created_at)->format('F d, Y')}}
                                        </li>
                                        {{--<li><i class="fa fa-comments"></i> 33</li>--}}
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        @endforeach
                    </div>
                    <!-- /row -->
                </div>
                <!-- /Main Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /SECTION -->

    @include('layouts.frontend.footer')
@endsection
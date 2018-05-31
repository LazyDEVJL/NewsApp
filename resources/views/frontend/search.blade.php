@extends('layouts.frontend.app')
@section('content')
    <!-- Header -->
    @include('layouts.frontend.header')
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
                    <h2 class="title">Kết quả tìm kiếm</h2>
                    </div>
                    <!-- /section title -->
                    @if($numberOfResult == 0)
                        <p class="font-weight-light" style="font-size: 20px">Oops! Không tìm thấy kết quả nào với từ khoá "{{$keywords}}"</p>
                    @else
                    <div class="infinite-scroll">
                    @foreach($posts as $post)
                        <!-- ARTICLE -->
                        <article class="article row-article">
                            <div class="article-img">
                                <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($post->category_id,'slug'), 'slug' => $post->slug]) }}">
                                    <div class="article-post">
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
                        {{ $posts->links() }}
                    </div>
                    @endif
                </div>
                <!-- /Main Column -->

                @include('layouts.frontend.aside-column')
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /SECTION -->

    @include('layouts.frontend.footer')
@endsection
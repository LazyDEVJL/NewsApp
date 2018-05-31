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
                                <a href="{{ action('FrontEndController@category', ['category' => getCategoryColumn($featurePostAll->category_id,'slug')])}}">
                                    {{getCategoryColumn($featurePostAll->category_id,'name')}}
                                </a>
                            </li>
                            <li class="article-type">
                                <i class="fa {{getIconBySlug(getCategoryColumn($featurePostAll->category_id,'slug'))}}"></i>
                            </li>
                        </ul>
                        <h5 class="article-title">
                            <a href="{{ action('FrontEndController@postDetail', ['category' => getCategoryColumn($featurePostAll->category_id, 'slug'),'slug' => $featurePostAll->slug]) }}">{{str_limit($featurePostAll->title,60)}}</a>
                        </h5>
                        <ul class="article-meta">
                            <li><i class="fa fa-clock-o"></i>
                                {{\Carbon\Carbon::parse($featurePostAll->created_at)->format('F d, Y')}}
                            </li>
                            {{--<li><i class="fa fa-comments"></i> 33</li>--}}
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
<header id="header">
    <!-- Center Header -->
    <div id="center-header">
        <div class="container">
            <div class="header-logo">
                <a href="#" class="logo"><img src="{{asset('front-end theme/img/logo.png')}}" alt=""></a>
            </div>
            <div class="header-ads">
                <img class="center-block" src="{{asset('front-end theme/img/ad-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- /Center Header -->

    <!-- Nav Header -->
    <div id="nav-header">
        <div class="container">
            <nav id="main-nav">
                <div class="nav-logo">
                    <a href="#" class="logo"><img src="{{asset('front-end theme/img/logo-alt.png')}}" alt=""></a>
                </div>
                <ul class="main-nav nav navbar-nav">
                    <li class="{{$categoryParam == '/' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                    @foreach($categories as $category)
                        <li class="{{$categoryParam == $category->slug ? 'active' : ''}}"><a href="{{action('FrontEndController@category', ['category' => $category->slug])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="button-nav">
                <button class="search-collapse-btn"><i class="fa fa-search"></i></button>
                <button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
                <div class="search-form">
                    <form action="{{action('FrontEndController@search')}}" method="get">
                        <input class="input" type="text" name="search" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Nav Header -->
</header>
<!-- /Header -->
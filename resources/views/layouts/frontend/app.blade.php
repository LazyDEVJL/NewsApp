<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost/PHP/HUBT_News/NewsApp/">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{config('app.name')}}</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('front-end theme/css/bootstrap.min.css')}}"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('front-end theme/css/owl.carousel.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('front-end theme/css/owl.theme.default.css')}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('front-end theme/css/style.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('front-end theme/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('front-end themehttps://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

@yield('content')

<!-- jQuery Plugins -->
<script src="{{asset('front-end theme/js/jquery.min.js')}}"></script>
<script src="{{asset('front-end theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-end theme/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-end theme/js/main.js')}}"></script>
<script src="{{asset('back-end theme/bower_components/jscroll/dist/jquery.jscroll.min.js')}}"></script>
<script>
    /**
     * Infinite Scroll
     */
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="{{asset('front-end theme/img/loading.gif')}}" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>

</body>
</html>

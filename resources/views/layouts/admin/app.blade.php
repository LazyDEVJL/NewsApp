<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost/PHP/HUBT_News/NewsApp/">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back-end theme/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    @yield('content')
    
    <!-- jQuery -->
    <script src="{{ asset('back-end theme/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('back-end theme/bower_components/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('back-end theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('back-end theme/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('back-end theme/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('back-end theme/dist/js/demo.js') }}"></script>
    <!-- CKEditor -->
    <script src="{{ asset('back-end theme/bower_components/ckeditor/build/ckeditor.js') }}"></script>
    <!-- User Script -->
    <script src="{{ asset('back-end theme/js/user.js') }}"></script>
</body>
</html>

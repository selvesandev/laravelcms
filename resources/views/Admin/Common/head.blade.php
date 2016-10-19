@section('head')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{URL::to('assets/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/select2/dist/css/select2.css')}}">

    <link rel="stylesheet" href="{{URL::to('assets/nprogress/nprogress.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/iCheck/skins/flat/green.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/tagsinput-latest/dist/bootstrap-tagsinput.css')}}">

    <!--parse validation css-->
    <link rel="stylesheet" href="{{URL::to('assets/parsleyjs/src/parsley.css')}}">

    <!--custom css-->
    <link rel="stylesheet" href="{{URL::to('assets/build/css/custom.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/app/application.css')}}">

    <!-- jQuery -->
    <script src="{{URL::to('assets/jquery/dist/jquery.min.js')}}"></script>
    <!-- TinyMCE -->
    <script type="text/javascript" src="{{URL::to('assets/tinymce/tinymce.min.js')}}"></script>
    <!--<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>-->
</head>
<body class="nav-md">
@endsection
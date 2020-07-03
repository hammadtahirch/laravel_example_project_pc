<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Manitobas Pakistan Chapter</title>
    <link rel="icon" href="{{secure_asset('assets/logo_favicon.png')}}" type="image/png" >
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans" >
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/font-awesome.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/imagehover.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/jquery.datetimepicker.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/style.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

@include("shared.top_nav")
@include("shared.banner")
@yield('content')

<script src="{{secure_asset('js/jquery.min.js')}}"></script>
<script src="{{secure_asset('js/jquery.easing.min.js')}}"></script>
<script src="{{secure_asset('js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('js/jquery.datetimepicker.js')}}"></script>
<script src="{{secure_asset('js/custom.js')}}"></script>
@include("shared.footer")
</body>
</html>

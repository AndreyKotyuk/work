<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--SLICK--}}
    <link rel="stylesheet" type="text/css" href="{{asset('slick-1.6.0/slick/slick.css')}} "/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick-1.6.0/slick/slick-theme.css')}}"/>
    <link href="{{ asset('/css/main.css ') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('slick-1.6.0/slick/slick.min.js')}}"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

@yield('header')

@yield('content')

@yield('footer')

<script type="text/javascript" src="{{asset('js/footer.js')}}"></script>

</body>
</html>

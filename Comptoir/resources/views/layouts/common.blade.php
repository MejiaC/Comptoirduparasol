<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/main.js"></script>

</head>
<body>

    @include('layouts.header')

<div class="main container_24">

    @yield('content')

</div>
<footer>

@include('layouts.footer')

</footer>
    </body>
</html>

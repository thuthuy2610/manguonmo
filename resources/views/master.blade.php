<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>
    <base href="{{asset('')}}">

    <!-- Favicon  -->
    <link rel="icon" href="soft/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="soft/css/core-style.css">
    <link rel="stylesheet" href="soft/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    @include('pages.header')
    @yield('content')
    @include('pages.footer')
    
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="soft/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="soft/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="soft/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="soft/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="soft/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="soft/js/active.js"></script>

</body>

</html>
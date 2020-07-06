<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/responsive.css') }} ">
</head>

<body>
    <div class="wrapper">
        @include('web/layouts/head')

        @section('main-content')
            @show()

        @include('web/layouts/footer')
    
    </div>
    <script src="{{ asset('web/js/jquery-3.1.1.min.js') }} "></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('web/js/active.js') }} "></script>
</body>

</html>
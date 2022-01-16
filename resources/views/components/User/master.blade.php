<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ComicReader | @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/assets2/img/ComicReaderIcon.png">
        <link rel="shortcut icon" type="image/x-icon" href="/assets2/img/ComicReaderIcon.png">
        <!-- Load Require CSS -->
        <link href="/assets2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font CSS -->
        <link href="/assets2/css/boxicon.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
        <!-- Load Tempalte CSS -->
        <link rel="stylesheet" href="/assets2/css/templatemo.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="/assets2/css/custom.css">
    </head>

    <body>
        @include('components.User.header')

        @yield('content')

        @include('components.User.footer')


        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Load jQuery require for isotope -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Isotope -->
        <script src="assets/js/isotope.pkgd.js"></script>
        <!-- Page Script -->
        <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
        </script>
        <!-- Templatemo -->
        <script src="assets/js/templatemo.js"></script>
        <!-- Custom -->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
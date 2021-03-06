<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Coming Soon | W3MSys Hotels Directory</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/page_coming_soon_v1.css')}}">
</head>

<body class="coming-soon-page">
<div class="coming-soon-bg-cover"></div>
<!--=== Content Part ===-->
<div class="container cooming-soon-content valign__middle">
    <!-- Coming Soon Content -->
    <div class="row">
        <div class="col-md-12 coming-soon">
            <h1>Hi, we're <span class="color-green">W3MSys</span></h1>
            <h2 class="test-info">Our Website is Coming Soon!</h2><br>
            <h3 class="test-info1">Hotels </h3>

            <!-- Coming Soon Plugn -->
            <div class="coming-soon-plugin">
                <div id="defaultCountdown"></div>
            </div>
            <!-- End Coming Soon Plugn -->
        </div>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Sticky Footer ===-->
<div class="sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">
                <p class="color-light">
                    2018 &copy; W3MSys. ALL Rights Reserved.
                </p>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="list-inline coming-soon-social">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=== End Sticky-Footer ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{asset('assets/plugins/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/smoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/countdown/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/countdown/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/backstretch/jquery.backstretch.min.js')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/page_coming_soon.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        PageComingSoon.initPageComingSoon();
    });
</script>

<!-- Background Slider (Backstretch) -->
<script>
    $.backstretch([
        "assets/img/bg/19.jpg",
        "assets/img/bg/1.jpg",
        "assets/img/bg/18.jpg"
    ], {
        fade: 1000,
        duration: 7000
    });
</script>

<!--[if lt IE 9]>
<script src="{{asset('assets/plugins/respond.js')}}"></script>
<script src="{{asset('assets/plugins/html5shiv.js')}}"></script>
<script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
<![endif]-->

</body>
</html>

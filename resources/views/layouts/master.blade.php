<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>W3MSys Hotel | @yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/page_log_reg_v2.css')}}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/theme-colors/default.css')}}" id="style_color">
    <link rel="stylesheet" href="{{asset('assets/css/theme-skins/dark.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>

@yield('content')
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{asset('assets/plugins/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/backstretch/jquery.backstretch.min.js')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<script type="text/javascript">
    $.backstretch([
        "{{asset('assets/img/bg/19.jpg')}}",
        "{{asset('assets/img/bg/18.jpg')}}"
    ], {
        fade: 1000,
        duration: 7000
    });
</script>

<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function() {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!--[if lt IE 9]>
<script src="{{asset('assets/plugins/respond.js')}}"></script>
<script src="{{asset('assets/plugins/html5shiv.js')}}"></script>
<script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
<![endif]-->

</body>
</html>

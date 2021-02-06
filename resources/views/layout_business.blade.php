
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" >
    <title>Welcome To Group Reedisha | Corporate Website</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" >
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" >
    <!-- Template Styles -->
    <link rel="stylesheet" href="{{asset('style.css')}}" >
    <script>
        document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');</script>
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!--...........Email Validation Start............ -->
    <script type="text/javascript" src="{{asset('js/utility.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jsval.js')}}"></script>

    <style>
        #ti{
            height: 50px;
            width: 750px;
            float: left;
            margin-left:140px;
            /*background: red;*/
        }
    </style>
</head>


<body>
    <header class="header">

        <div class="container">
            <div class="site-header clearfix">

			@include('layoutContent.layout_header_logo')

            </div><!-- site header -->

            <div id="nav">
			@include('layoutContent.laout_navbar')
            </div><!-- nav -->
            <!-- title area -->
        </div><!-- end container -->

    </header><!-- end header -->
        <section class="section1">
        @yield('content')
        </section><!-- end section -->
    
    <div class="dmtop">Scroll to Top</div>

    <!-- Main Scripts-->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.unveilEffects.js')}}"></script>
    <script src="{{asset('js/retina-1.1.0.js')}}"></script>
    <script src="{{asset('js/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('js/jetmenu.js')}}"></script>
    <script src="{{asset('js/jquery.hoverex.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <link rel="stylesheet" href="{{asset('colorbox.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{asset('jquery.colorbox.js')}}"></script>
</body>
</html>

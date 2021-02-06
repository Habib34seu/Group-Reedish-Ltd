<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap sticky top menu, navbar, CSS examples" />
<meta name="description" content="Bootstrap sticky header menu for any type of project, Bootstrap 4" />  

<title>Demo - Sticky navbar sample. html code example </title>

<!-- Google Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- Google Fonts -->	
<!-- jQuery -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->

<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/jetmenu.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/carousel.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/welcom-to.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/colors.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/footer.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/about_md.css')}}" rel="stylesheet" type="text/css"/>

<link href="{{asset('frontend/css/layout_strategic _business.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('frontend/js/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
</head>
<body>

<header class="section-header py-xl-5 bg-light header-css">
     @include('layoutContent.layout_header_logo')
</header> <!-- section-header.// -->
<!-- ========================= SECTION CONTENT ========================= -->
<div class="container">
		<nav class="navbar  navbar-dark sticky-top jetmenu blue">
		 @include('layoutContent.laout_navbar_certificate')
		</nav>
</div>
        @yield('content')
</body>
  <!-- Main Scripts-->
  <script src="{{asset('assets/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.unveilEffects.js')}}"></script>	
        <script src="{{asset('js/retina-1.1.0.js')}}"></script>
        <script src="{{asset('js/jquery.hoverdir.js')}}"></script>
        <script src="{{asset('js/jetmenu.js')}}"></script>	
        <script src="{{asset('js/jquery.hoverex.min.js')}}"></script>
        <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('js/jquery.jigowatt.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>

       
        
	
        <script type="text/javascript">
            $(document).ready(function() {
                $("#popularposts").owlCarousel({
                    items: 4,
                    lazyLoad: true,
                    navigation: false,
                    autoPlay: true,
                    stopOnHover: false,
                    rewindNav: true
                });
                $("#popularposts1").owlCarousel({
                    items: 8,
                    lazyLoad: true,
                    navigation: false,
                    autoPlay: 7000,
                    stopOnHover: false,
                    rewindNav: true
                });
            });</script>

        <script src="{{asset('js/jquery.animate-enhanced.min.js')}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
        <script type="text/javascript">
            $('.chart').easyPieChart({
                easing: 'easeOutBounce',
                size: 200,
                animate: 2000,
                lineWidth: 10,
                lineCap: 'square',
                lineWidth : 19,
                        barColor: false,
                trackColor: '#F5F5F5',
                scaleColor: false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent) + '%');
                }
            });</script>

        <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
        <script type="text/javascript">
            (function($) {
                "use strict";
                var $container = $('.portfolio'),
                        $items = $container.find('.portfolio-item'),
                        portfolioLayout = 'fitRows';
                if ($container.hasClass('portfolio-centered')) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);
                }

                $('nav.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({filter: selector}, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function getColumnNumber() {
                    var winWidth = $(window).width(),
                            columnNumber = 1;
                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                            columnNumber = getColumnNumber(),
                            itemWidth = Math.floor(winWidth / columnNumber);
                    $container.find('.portfolio-item').each(function() {
                        $(this).css({
                            width: itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function() {
                    setPortfolio();
                });
                $(window).on('resize', function() {
                    setPortfolio();
                });
            })(jQuery);</script>



        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{{asset('js/jquery.gmap.js')}}"></script>
        <script type="text/javascript">
            var mapMarkers = [{
                    address: "Saskatoon, SK S7V 0A4 Canada",
                    html: "<strong>We Are ENVATO!</strong><br>Saskatoon, SK S7V 0A4 Canada<br><br><a href='#' onclick='mapCenterAt({latitude: 52.100343, longitude: -106.551482, zoom: 16}, event)'>[+] View Original Map</a>",
                    icon: {
                        image: "http://www.groupreedisha-bd.com/images/pin.png",
                        iconsize: [100, 100],
                        iconanchor: [64, 45]
                    }
                }];
            var initLatitude = 52.100343;
            var initLongitude = -106.551482;
            var mapSettings = {
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 5
            };
            var map = $("#googlemaps").gMap(mapSettings);
            var mapCenterAt = function(options, e) {
                e.preventDefault();
                $("#googlemaps").gMap("centerAt", options);
            }
        </script>





</html>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" >
    <title>Welcome To Group Reedisha | Corporate Website</title>
    <link rel="shortcut icon" href="http://www.groupreedisha-bd.com/favicon.ico">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" >
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" >
    <!-- Template Styles -->
    <link rel="stylesheet" href="{{asset('style.css')}}" >

    <!-- Layer Slider -->
    <link rel="stylesheet" href="{{asset('layerslider/css/layerslider.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" >

    <!-- Switcher Only -->




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



<section class="slideshow-wrapper">
      @include('layoutContent.layout-carousel')
</section><!-- end slideshow-wrapper -->
 
<section class="section5">
    <div class="message" style="text-align: center;">
        <h3 style="margin-top: 6px; font-size: 30px;" class="big-title">Welcome to Group Reedisha</h3>

    </div><!-- end message -->
</section><!-- end section2 -->
<section class="section1">
    <div class="container clearfix">

        <div class="content clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 style="font-size: 17.52px; padding: 5px 0;">Strategic Business Units of Group Reedisha</h4>
                <ul class="nav nav-tabs nav-stacked">
                    <li ><a href="/rkl">Reedisha Knitex Limited</a></li>
                    <li><a href="/rsl">Reedisha Spinning Limited</a></li>
                    <li><a href="/rtsl">Reedisha Texstripe Limited</a></li>
                    <li><a href="/paknit">P.A. Knit Composite Limited</a></li>
                    <li><a href="/rppl">Reedisha Printing & Packaging Limited</a></li>
					<li><a href="/rfbl">Reedisha Foods and Beverage Limited</a></li>
					<li><a href="/rbyl">Reedisha Blended Yarn Limited</a></li>


                </ul>
            </div><!-- end sidebar -->

            <div class="col-lg-8 col-md-8 col-sm-12 columns">
                <div class="widget clearfix">
                    <div class="services_lists">

                        <div class="services_lists_boxes clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="servicebox text-center">
                                                                            <div class="service-icon">
                                            <!--<div class="dm-icon-effect-1" data-effect="slide-left" style="float: left;">
                                                <a href="#" class="">   <img style=" border: 2px solid #ddd; margin: 0 15px 10px 0; " src="http://www.groupreedisha-bd.com/images/managing_director/1427138158.JPG" > </a>
                                            </div>-->
                                            <div class="servicetitle">
                                                <h2 style="font-size: 20px;letter-spacing:1px; font-weight:700; text-align: center;">Welcome to Group Reedisha</h2>

                                            </div>
                                            <p>..</p><br>
                                            <p><a style="font-weight: 500; text-align: center;" href="/rkl" class="btn btn-sm btn-danger">Read More</a></p>
                                        </div><!-- service-icon -->
                                                                    </div><!-- servicebox -->
                            </div><!-- large-4 -->
                        </div><!-- services_lists_boxes -->


                    </div><!-- services_lists -->
                </div><!-- end widget -->
            </div><!-- large-6 -->
        </div><!-- end content -->

    </div><!-- end container -->
</section><!-- end section -->

<section class="section1">
@include('layoutContent.footer_carousel')
</section>

    
    <footer class="footer">
	   @include('layoutContent.layout_footer')
    </footer><!-- end footer -->
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

    <script type="text/javascript">
        $(document).ready(function() {
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel: 'group1'});

        });
    </script>
    <!-- LayerSlider script files -->
    <script src="{{asset('layerslider/js/greensock.js')}}" type="text/javascript"></script>
    <script src="{{asset('layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
    <script src="{{asset('layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>
    <!-- Initializing the slider -->
    <script type="text/javascript">
        jQuery("#layerslider").layerSlider({
            pauseOnHover: false,
            autoPlayVideos: false,
            responsive: false,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: 'v5',
            //skinsPath: 'http://www.groupreedisha-bd.com/layerslider/skins/'
        });</script>

    <script src="{{asset('js/owl.carousel.js')}}"></script>
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



    <!-- <script type="text/javascript" src="http://www.groupreedisha-bd.com/switcher/js/fswit.js"></script>
    <script type="text/javascript" src="http://www.groupreedisha-bd.com/switcher/js/jquery.backstretch.js"></script> -->

</body>
</html>




<link href="{{asset('frontend/css/navbar_layout.css')}}" rel="stylesheet" type="text/css"/>
    <div id="nav">
    <div class="container clearfix layout_navbar_css"  style="    margin-left: -1%;margin-top: 1px;">
        <ul id="jetmenu" class="jetmenu blue">
            <li class="active"><a href="/" style="padding-right: 40Px;">Home</a></li>
            <li><a href="" style="padding-right: 45Px;">About Us</a>
                <ul class="dropdown">
                    <li ><a href="/mission" ><span>Mission & Vision</span></a></li>
                    <li ><a href="/md" ><span>A Brief About Managing Director</span></a></li>
                    <li ><a href="/md" ><span>Message From Managing Director</span></a></li>
                    <li ><a href="/management" ><span>Management Body</span></a></li>
                            
                </ul></li>
        

            <li><a href="#" style="padding-right: 40Px;">Business Units</a>
                <ul class="dropdown">
                    <!--                                    <li><a > </a>-->
                    <li><a style="padding-right: 55px;"> Current Projects</a>
                            <ul class="dropdown">
                            <li ><a href="/rkl" ><span>Reedisha Knitex Limited</span></a></li>
                            <li ><a href="/rsl" ><span>Reedisha Spinning Limited</span></a></li>
                            <li ><a href="/rtsl" ><span>Reedisha Texstripe Limited</span></a></li>
                            <li ><a href="/paknit" ><span>P.A. Knit Composite Limited</span></a></li>
                            <li ><a href="/rppl" ><span>Reedisha Printing & Packaging Limited</span></a></li>
                            <li ><a href="" ><span>Reedisha Blended Yarn Ltd.</span></a></li>
                            <li ><a href="" ><span>Reedisha Foods Ltd</span></a></li>

                    
                        </ul>
                    </li>

                    <li><a style="padding-right: 55Px;"> Upcoming Projects</a>
                        <ul class="dropdown">
                        <li ><a href="" ><span>Expansion of Reedisha Foods and Beverage Ltd.</span></a></li>
                            <li ><a href="" ><span>Expansion of P.A. Knit Composite Ltd.</span></a></li>
                        </ul>
                    </li>


                </ul>


            </li>
            <!--<li><a href="#">Management Body</a></li>-->
            <li><a href=""style="padding-right: 45Px;">Certificates</a>
                <ul class="dropdown">
                    <li> <a href="/paknit_cr"><span>P.A. knit Composite Ltd</span></a></li>
                    <li> <a href="/rkl_cr">Reedisha Knitex Ltd</a></li>
                    <li> <a href="rsl_cr">Reedisha Spinning Ltd</a></li>
                    <li> <a href="/rtsl_cr">Reedisha Texstripe Ltd</a></li>
                </ul></li>

            <li><a href="#"style="padding-right: 45Px;">Photo Gallery</a>
                <ul class="dropdown">
                    <li ><a href="" ><span>Garden </span></a></li>
                    <li ><a href="" ><span> RND</span></a></li>
                    <li ><a href="" ><span>Products</span></a></li>
                    <li ><a href="" ><span>Machineries</span></a></li>
                </ul>
            </li>


            <li><a href="#"style="padding-right: 45Px;">Career</a>
                <ul class="dropdown">
                    <li ><a href="" ><span>Current Vacancy </span></a></li>
                    <li ><a href="" ><span>  Submit your CV</span></a></li>

                </ul>
            </li>
            <li><a href="/contact"style="padding-right: 54Px;">Contact Us</a></li>
        
            

        </ul>
        
    </div>
</div><!-- nav -->   
<!-- title area -->
</div><!-- end container -->

       

<style>

    .urun1 {

        display: block;

        float: left;

        line-height: 22px;

        margin: 0px 25px 10px 0;

        padding: 0;

        width: 100%;

    }

    .urun1 .uResim1 {display:block;float:left;margin:0px 10px 0px 0}

    .urun1 .uResim1 img{

        margin: 0 20px 10px 0;

    }

</style>
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

        <script src="http://www.groupreedisha-bd.com/js/jquery.animate-enhanced.min.js"></script>
        <script src="http://www.groupreedisha-bd.com/js/jquery.easypiechart.min.js"></script>
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

        <script src="http://www.groupreedisha-bd.com/js/jquery.isotope.min.js"></script>
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
        <script src="http://www.groupreedisha-bd.com/js/jquery.gmap.js"></script>
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




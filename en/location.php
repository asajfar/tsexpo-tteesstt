<?php 
  $page = 'location';
  $srplink = 'location';
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>CONTACT | TRAFFIC SOLUTIONS EXPO</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Traffic Solutions Expo, Novi Sad Fair, City of Novi Sad, Serbia">
  <meta name="author" content="ASajfar">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav - responsive Mobile menu -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Site CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />

  <!-- Site JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuXfv3kkJPDC7ursHL4Dc-yUkjSrsJ4KA&callback=initMap" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
  

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <!-- Google Analytics Code -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76465485-1', 'auto');
  ga('send', 'pageview');

  </script>

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <?php 
      include 'header-en.php';
    ?>
    <!-- End Header Section -->

    <!-- Start Map -->
    <div id="map" data-position-latitude="45.258118" data-position-longitude="19.822759"></div>
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>Novi Sad Fair | Hajduk Veljkova 11</h4><p>21000 Novi Sad, Serbia, +381 21 483 0000</p></div>',
            icon_url: 'images/map-icon.png'/*$('#map').data('marker-img')*/,
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>
    <!-- End Map -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>More about Novi Sad Fair</span></h4>

            <div>
              <div>
                <img src="" alt="">
              </div>
                <!-- Start Touch Slider -->
                <div class="touch-slider slider-margin" data-slider-navigation="true" data-slider-pagination="true">
                  <div class="item"><img alt="" src="images/sajam/001_slika-sajam.jpg"></div>
                  <div class="item"><img alt="" src="images/sajam/004_slika-sajam.jpg"></div>
                  <div class="item"><img alt="" src="images/galerija2017/39_Otvaranje.jpg"></div>
                  <div class="item"><img alt="" src="images/galerija2017/123_Edukativni deo.jpg"></div>
                  <div class="item"><img alt="" src="images/sajam/005_slika-sajam.jpg"></div>
                  <div class="item"><img alt="" src="images/sajam/006_slika-sajam.jpg"></div>
                </div>
                <!-- End Touch Slider -->
            </div>

          </div>

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Congress Centre "Master" Novi Sad Fair</span></h4>

            <!-- Some Info -->
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p> -->

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong> Hajduk Veljkova, 21000 Novi Sad, Serbia</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> kongresnicentar@sajam.net</li>
              <li><i class="fa fa-globe"></i> <strong>Web:</strong> <a href="http://www.sajam.net" target='_blank'>www.sajam.net</a> or <a href="http://www.kongresnicentar.sajam.net">www.kongresnicentar.sajam.net</a></li>
              <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +381 (0)21 483 07 77</li>
            </ul>
            <div class="hr1" style="margin-bottom:10px;"></div>
            <h4 class="classic-title"><span>Public connection</span></h4>
            <ul class="icons-list">
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> office@ts-expo.rs</li>
              <li><i class="fa fa-mobile"></i> <strong>Mobile:</strong> +381 (0)64 124 97 57 and +381 (0)63 417 555</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <!-- <h4 class="classic-title"><span>"Master" Congress Centre</span></h4> -->

            <!-- Info - List -->
            <!-- <ul class="icons-list">
              <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong> Hajduk Veljkova, 21000 Novi Sad, Serbia</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> congresscentre@novisadexpo.com</li>
              <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +381 (0)21 483 0777, 483 0778</li>
              <li><i class="fa fa-globe"></i> <strong>Web:</strong> <a href="http://www.novisadexpo.com" target='_blank'>www.novisadexpo.com</a></li>
            </ul> -->

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->


    <!-- Start Footer -->
    <?php 
      include 'footer-en.php';
    ?>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <!--<div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>-->

  <script type="text/javascript" src="js/script.js"></script>

  <script type="text/javascript">
    //Contact Form

    $('#submit').click(function() {

      $.post("php/send.php", $(".contact-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;

    });
  </script>

  <!-- Google Analytics Code -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76465485-1', 'auto');
  ga('send', 'pageview');

  </script>

</body>

</html>
<?php
 switch ($englink) {
    case "naslovna":
        $link = '../en/index.php';
        break;
    case "profil-izlagaca":
        $link = '../en/exhibitors-profile.php';
        break;
    case "uslovi-izlaganja":
        $link = '../en/exhibitors-terms.php';
        break;
    case "tlocrt":
        $link = '../en/ground-plan.php';
        break;
    case "posetioci":
        $link = '../en/visitors.php';
        break;
    case "program":
        $link = '../en/program_en.php';
        break;
    case "lokacija":
        $link = '../en/location.php';
        break;
    case "smestaj":
        $link = '../en/accommodation.php';
        break;
    case "ts-expo-2017":
        $link = '../en/ts-expo-en-2017.php';
        break;
    case "virtual-tour":
        $link = '../en/virtual-tour.php';
        break;
    default:
        $link = '../en/index.php';
}
?>

<div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Novi Sad Fair, City of Novi Sad, Serbia</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> office@ts-expo.rs</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +381 (0) 64 12 49 757</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <!--<li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="callto://+***********"><i class="fa fa-skype"></i></a>
                </li>-->
                <li>
                  <a class="language-choose" href="<?php echo $link;?>"><i>EN</i></a>
                </li>
                <li>
                  <a class="language-choose active" href="#"><i>SR</i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <img alt="" src="../en/images/tslogo.png" class="logo-full">
              <img alt="" src="../en/images/tslogo2.png" class="logo-mobile">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!--End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li><a <?php if($page == 'naslovna'): ?> class="active"<?php endif ?> href="index.php">NASLOVNA</a></li>
              <!-- <li><a href="ts-exposr.html">TS-EXPO</a></li> -->
              <li class="drop"><a style="cursor: pointer; pointer-events: none;" <?php if($page == 'izlaganje'): ?> class="active"<?php endif ?> href="#">IZLAGAČI</a>
              <ul class="dropdown">
              <!-- <li><a href="izlagaci-2018.html">SPISAK IZLAGAČA 2018</a></li> -->                  
                  <li><a href="profil-izlagaca.php">PROFILI IZLAGAČA</a></li>
                  <li><a href="uslovi-izlaganja.php">USLOVI ZA IZLAGANJE</a></li>
                  <li><a href="tlocrt.php">TLOCRT</a></li> 
                </ul>
              </li>
              <li><a <?php if($page == 'posetioci'): ?> class="active"<?php endif ?> href="posetioci.php">POSETIOCI</a></li>
              <li><a <?php if($page == 'program'): ?> class="active"<?php endif ?> href="program.php">PROGRAM</a></li>
              <li><a <?php if($page == 'lokacija'): ?> class="active"<?php endif ?> href="lokacija.php">KONTAKT</a>
                <ul class="dropdown">
                  <li><a href="smestaj.php">SMEŠTAJ</a></li>
                </ul>
              </li>
              <li><a <?php if($page == 'previous'): ?> class="active"<?php endif ?> href="ts-expo-2017.php" style="color: #29aae2; font-weight: 600;">TS-EXPO 2017</a>
                <ul class="dropdown">
                  <li><a href="virtual-tour.php">VIRTUALNA TURA 360°</a></li>
                </ul>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li><a <?php if($page == 'naslovna'): ?> class="active"<?php endif ?> href="index.php">NASLOVNA</a></li>
          <!-- <li><a href="ts-exposr.html">TS-EXPO</a></li> -->
          <li><a class="not-link" <?php if($page == 'izlaganje'): ?> class="active"<?php endif ?> href="#">IZLAGAČI</a>
            <ul class="dropdown">
             <!--  <li><a href="izlagaci-2018.html">SPISAK IZLAGAČA 2018</a></li> -->
              <li><a href="profil-izlagaca.php">PROFILI IZLAGAČA</a></li>
              <li><a href="uslovi-izlaganja.php">USLOVI ZA IZLAGANJE</a></li>
              <li><a href="tlocrt.php">TLOCRT</a></li>
            </ul>
          </li>
          <li><a <?php if($page == 'posetioci'): ?> class="active"<?php endif ?> href="posetioci.php">POSETIOCI</a></li>
          <li><a <?php if($page == 'program'): ?> class="active"<?php endif ?> href="program.php">PROGRAM</a></li>
          <li><a <?php if($page == 'lokacija'): ?> class="active"<?php endif ?> href="lokacija.php">KONTAKT</a>
            <ul class="dropdown">
              <li><a href="smestaj.php">SMEŠTAJ</a></li>
            </ul>
          </li>
          <li><a <?php if($page == 'previous'): ?> class="active"<?php endif ?> href="ts-expo-2017.php" style="color: #29aae2; font-weight: 600;">TS-EXPO 2017</a>
            <ul class="dropdown">
              <li><a href="virtual-tour.php">VIRTUALNA TURA 360°</a></li>
            </ul>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
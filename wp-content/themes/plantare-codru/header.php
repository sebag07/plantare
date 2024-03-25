<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/fonts/style.css?ver=1">
    <link rel="icon" href="/wp-content/themes/plantare-codru/images/logocodru.png">"

    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/js/main.js">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/style.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
  		<script>
		!function (w, d, t) {
		w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

		ttq.load('CBPU1SJC77U40OTR44OG');
		ttq.page();
		}(window, document, 'ttq');
		</script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <title>Plantare Codru 2023</title>
  </head>
  <body <?php post_class();?>>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar">
      <div class="container-fluid row">
          <div class="site-logo col-lg-5 col-10"><a href="https://codrufestival.ro"><img src="/wp-content/themes/plantare-codru/images/logocodru.png" alt=""></a></div>
          <div class="mx-auto site-navigation right-cta-menu text-right d-flex aligin-items-center col-lg-8 col-2">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <?php
                  $menu = get_menu_with_children("PrimaryMenu");
                  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                  foreach ($menu as $item) {
                    if (isset($item->child_items)) {
                      echo "<li class='has-children'><a href='$item->url' class='nav-link'>$item->title</a>
                            <ul class='dropdown arrow-top'>";
                      foreach ($item->child_items as $child_item) {
                        echo "<li><a href='$child_item->url' class='nav-link'>$child_item->title</a></li>";
                      }
                      echo "</ul>
                            </li>";
                    } else {
                      echo "<li><a href='$item->url' class='nav-link'>$item->title</a></li>";
                    }
                }
                    ?>
                <a class="heroButtonMenu" href="https://docs.google.com/forms/d/e/1FAIpQLSf0fPTd5mFafR5I1CCypEitEUrVmqWpx6hqb8nldLvhVWgWeg/viewform" target="_blank">ÎNSCRIE-TE</a>
            </ul>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

    </header>
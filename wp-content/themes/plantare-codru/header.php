<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="/wp-content/themes/plantare-codru/js/popper.min.js"></script>

    <link rel="stylesheet" href="/wp-content/themes/plantare-codru/fonts/style.css?ver=7">
    <link rel="icon" href="/wp-content/themes/plantare-codru/images/oxigen-planting-festival-icon.png">

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

    <title>Oxigen - Planting Festival</title>
    <script>
    jQuery(function() {
      jQuery(document).ready(function() {
        jQuery("body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu  li.page_item_has_children")
                .append('<a href="#" class="mobile-toggle"></a>');
                jQuery('ul.et_mobile_menu li.menu-item-has-children .mobile-toggle, ul.et_mobile_menu li.page_item_has_children .mobile-toggle')
                .click(function(event) {
                    event.preventDefault();
                    jQuery(this).parent('li').toggleClass('dt-open');
                    jQuery(this).parent('li').find('ul.children').first().toggleClass('visible');
                    jQuery(this).parent('li').find('ul.sub-menu').first().toggleClass('visible');
                });
            iconFINAL = 'P';
            jQuery('body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu li.page_item_has_children')
                .attr('data-icon', iconFINAL);
                jQuery('.mobile-toggle').on('mouseover', function() {
                  jQuery(this).parent().addClass('is-hover');
            }).on('mouseout', function() {
              jQuery(this).parent().removeClass('is-hover');
            })
        });
    });
    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php post_class();?>>

<div class="headerHalfCircle">
    <!-- <div class="text-center"><img src="/wp-content/themes/plantare-codru/images/soare.png" alt=""></div> -->
</div>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body">
        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <?php 
    
    $mobile_menu = get_menu_with_children("mobileMenu"); 
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    foreach ($mobile_menu as $item) {
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
            <span class="headerSocials">
                <a href="https://www.facebook.com/codrufestival" target="_blank"><img
                        src="/wp-content/themes/plantare-codru/images/facebookcodru.svg" alt=""></a>
                <a href="https://www.instagram.com/codrufestival/" target="_blank"><img
                        src="/wp-content/themes/plantare-codru/images/instagramcodru.svg" alt=""></a>
                <a href="https://www.linkedin.com/company/codrufestival/" target="_blank"><img
                        src="/wp-content/themes/plantare-codru/images/linkedincodru.svg" alt=""></a>
                <a href="https://www.youtube.com/@codrufestival" target="_blank"><img
                        src="/wp-content/themes/plantare-codru/images/youtubecodru.svg" alt=""></a>
            </span>
            <a class="heroButtonMenu" href="<?php echo get_field('sign_up_btn_url', 'options'); ?>" target="_blank"><?php echo get_field('sign_up_btn_text', 'options'); ?></a>
        </ul>
    </div>
</div> <!-- .site-mobile-menu -->

<!-- NAVBAR -->
<header class="site-navbar">
    <div class="container-fluid row m-0 justify-content-center">
        <div
            class="mx-auto site-navigation right-cta-menu d-flex aligin-items-center leftMenu justify-content-left col-lg-5 col-2">
            <ul class="site-menu d-none d-xl-block ml-0 pl-0 desktop-only">
                <?php
              $menu = get_menu_with_children("leftMenu");
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
            </ul>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none ml-3"><span
                    class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>

        <div class="site-logo col-lg-2 col-10"><a href="/"><img src="/wp-content/themes/plantare-codru/images/whitelogoplantare.png"
                    alt=""></a></div>



        <div
            class="mx-auto site-navigation right-cta-menu d-flex aligin-items-center rightMenu justify-content-right col-lg-6 col-2">
            <ul class="site-menu d-none d-xl-block ml-0 pl-0 desktop-only">
                <?php
              $menu = get_menu_with_children("rightMenu");
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
                <span class="headerSocials">
                    <a href="https://www.facebook.com/codrufestival" target="_blank"><img
                            src="/wp-content/themes/plantare-codru/images/facebookcodru.svg" alt=""></a>
                    <a href="https://www.instagram.com/codrufestival/" target="_blank"><img
                            src="/wp-content/themes/plantare-codru/images/instagramcodru.svg" alt=""></a>
                    <a href="https://www.linkedin.com/company/codrufestival/" target="_blank"><img
                            src="/wp-content/themes/plantare-codru/images/linkedincodru.svg" alt=""></a>
                    <a href="https://www.youtube.com/@codrufestival" target="_blank"><img
                            src="/wp-content/themes/plantare-codru/images/youtubecodru.svg" alt=""></a>
                </span>
                <a class="heroButtonMenu" href="<?php echo get_field('sign_up_btn_url', 'options'); ?>" target="_blank"><?php echo get_field('sign_up_btn_text', 'options'); ?></a>
            </ul>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none ml-3"><span
                    class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>

</header>


   
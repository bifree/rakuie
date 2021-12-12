<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <script>
    (function(d) {
      var config = {
        kitId: 'lxc8vep',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>

<header>
  <div class="l-header">
    <div class="header-wrapper">
      <div class="containerTop">
        <div class="inner">
          <h1>大阪市で相続不動産売却ならラクイエまで</h1>
        </div>
      </div>
      <div class="containerMiddle">
        <div class="inner">
          <div class="box-left">
            <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="株式会社ラクイエ">
            </div>
            <ul class="group-button">
              <li><span>幅広い広告戦略</span></li>
              <li><span>仲介×買取りMIXプラン</span></li>
              <li><span>空き家・空き地無料管理</span></li>
            </ul>
          </div>
          <div class="box-right">
            <ul class="contact">
              <li class="phone">
                <p>無料査定・相続不動産売却に関するご相談</p>
                <a href="tel:0120071778" class="phoneLink">0120-071-778</a>
                <span>営業時間 10：00～18：30 | 定休日 水曜日</span>
              </li>
              <li class="mail">
                <a href="">相続不動産売却の<br>無料査定はこちら</a>
              </li>
            </ul>
          </div>
          <div class="c-hamburger js-hamburger" role="button">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div id="header-nav">
        <nav>
          <?php 
            wp_nav_menu( array( 
            'theme_location' => 'header-nav', 
            'container' => 'nav'
          ) ); ?>
        </nav>
      </div>
    </div>
  </div>
  <div class="l-navigation__back"></div>
</header>
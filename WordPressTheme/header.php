<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </div>
            <div class="group-button">
              <div class="yellow-green">
                <div class="inner">幅広い<br>
                広告戦略</div>
              </div>
              <div class="red">
                <div class="inner">仲介<br>×<br>買取りMIXプラン</div>
              </div>
              <div class="orange">
                <div class="inner">空き家・空き地<br>無料管理</div>
              </div>
            </div>
          </div>
          <div class="box-right">
            <dl>
              <dt>売却専門不動産会社だからできるスキームがあります</dt>
              <dd>
                <ul class="contact">
                  <li class="phone">
                    <a href="" class="phoneLink">0120-071-778</a>
                    <span>営業時間 10：00～18：30 | 定休日 水曜日</span>
                  </li>
                  <li class="mail">
                    <a href="">相続不動産売却の<br>無料査定はこちら</a>
                  </li>
                </ul>
              </dd>
            </dl>
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
</header>
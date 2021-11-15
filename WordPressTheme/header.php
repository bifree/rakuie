<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style2.css">
		<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
		<header>
      <div class="l-header">
        <div class="header-top ">
          <div class="header-top__left">
            <a class="left__logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
          </div>

          <div class="header-top__right">
            <div class="right__tel">
              <a class="right__tel__btn" href="tel:090-4607-3624">
                <p ><i class="fas fa-phone-square-alt"></i></p>
                <div class="right__tel__text">
                  <p class="right__tel__time">診察予約はお電話：9:00-22:00</p>
                  <p class="right__tel__number">090-4607-362</p>
                </div>	
              </a>
            </div>
            <div class="right__mail">
              <a class="right__mail__btn" href=""><i class="far fa-envelope"></i>メールでのご予約</a>
            </div>
          </div>
        </div>
          
        <div class="pc-menu">
          <ul class="pc-menu__list">
            <li class="pc-menu__list__item"><a href="#"></span>トップページ</a></li>
            <li class="pc-menu__list__item"><a href="#fascia">Fascia療法とは</a></li>
            <li class="pc-menu__list__item"><a href="#voice">お客様の声</a></li>
            <li class="pc-menu__list__item"><a href="#profile-thought">院長プロフィール</a></li>
            <li class="pc-menu__list__item"><a href="#select">選ばれる理由</a></li>
            <li class="pc-menu__list__item"><a href="#treatment">施術の流れ</a></li>
            <li class="pc-menu__list__item"><a href="#suitable">こんな方はNG</a></li>
          </ul>
        </div>

        <div id="open" class="sp-menu-btn">
          <span class="menu-btn__text"><i class="fas fa-bars open"></i><br>menu</span>
        </div> 
        
        <div id="close" class="hide sp-menu-btn">
          <span class="menu-btn__text"><i class="fas fa-times close"></i><br>close</span>
        </div>

        <div class="sp-menu">
          <ul class="sp-menu__list">
            <li class="sp-menu__list__item">
              <a href="#">
                <p>トップページ</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a>
            </li>
            <li class="sp-menu__list__item">
              <a href="#fascia">
                <p>Fascia療法とは</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a>
            </li>
            <li class="sp-menu__list__item">
              <a href="#voice">
                <p>お客様の声</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a></li>
            <li class="sp-menu__list__item">
              <a href="#profile-thought">
                <p>院長プロフィール</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a>
            </li>
            <li class="sp-menu__list__item">
              <a href="#select">
                <p>選ばれる理由</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a></li>
            <li class="sp-menu__list__item">
              <a href="#treatment">
                <p>施術の流れ</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a>
            </li>
            <li class="sp-menu__list__item">
              <a href="#suitable">
                <p>こんな方はNG</p>
                <p><i class="fas fa-arrow-circle-right"></i></p>
              </a>
            </li>
          </ul>
        </div>
      </div>
		</header>

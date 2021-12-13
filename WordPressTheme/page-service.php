<?php get_header(); ?>

<main class="service">
  <div class="service__top">
    <div class="container lowpage__mv">
     <h2 class="service__top__text">会社案内</h2>
    </div>
  </div>

  <div class="container">
    <div class="service__navi">
      <ul class="service__navi__list">
        <li><a href="">HOME</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;</li>
        <li>会社案内</li>
      </ul>
    </div>

    <div class="service__content">
      <h3 class="service__content__title"><span>ラクイエへのご相談・査定依頼はこちらから</span></h3>

      <h4 class="service__content__sub-title">ご相談・査定依頼フォーム</h4>
      <div class="service__form">
       <?php echo do_shortcode('[mwform_formkey key="6"]'); ?>
      </div>
    </div>

  </div>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="contact">
  <div class="contact__top">
    <div class="container lowpage__mv">
     <h2 class="contact__top__text">会社案内</h2>
    </div>
  </div>

  <div class="container">
    <div class="contact__navi">
      <ul class="contact__navi__list">
        <li><a href="">HOME</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;</li>
        <li>会社案内</li>
      </ul>
    </div>

    <div class="contact__content">
      <h3 class="contact__content__title"><span>ラクイエへのご相談・査定依頼はこちらから</span></h3>

      <h4 class="contact__content__sub-title">ご相談・査定依頼フォーム</h4>
      <div class="contact__form">
       <?php echo do_shortcode('[mwform_formkey key="6"]'); ?>
      </div>
    </div>

  </div>

</main>

<?php get_footer(); ?>
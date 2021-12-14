<?php get_header(); ?>

<main class="contact">

  <div class="c-lowpage__mv">
    <div class="container">
      <h2 class="contact__top__text">ご相談・<br class="is_sp">査定依頼フォーム</h2>
    </div>
  </div>

  <div class="container">
    <div class="c-breadcrumbs">
      <ol>
        <li><a href="">HOME</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;</li>
        <li>ご相談・査定依頼フォーム</li>
      </ol>
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
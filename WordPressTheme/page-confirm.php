<?php get_header(); ?>

<main class="contact">

    <div class="c-lowpage__mv">
        <div class="container">
        <h2>ご相談・査定依頼フォーム</h2>
        </div>
    </div>

    <div class="container">
        <div class="c-breadcrumb">
        <?php breadcrumb(); ?>
        </div>

        <div class="contact__content">
        <h3 class="contact__content__title"><span>ラクイエへのご相談・査定依頼はこちらから</span></h3>

        <div class="contact__form">
            <?php the_content(); ?>
        </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
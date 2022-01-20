<?php get_header(); ?>

<article>
    <div class="article">
        <div class="c-lowpage__mv">
            <div class="container">
                <h2>社長ブログ</h2>
            </div>
        </div>
        <div class="c-breadcrumb"><?php breadcrumb(); ?></div>
        <div class="article__container">
            <div class="article__container__title">
                <?php // タイトルを表示する start ?>
                <h1 class="blog-detail__title"><?php the_title(); ?></h1>
                <?php // タイトルを表示する end ?>
            </div>
            <?php // 本文を表示する start ?>
            <div class="article__container__body">
                <div class="blog-content cms-blog">
                    <?php echo the_content(); ?>
                </div>
            </div>
            <?php // 本文を表示する end ?>
            <?php // SNSシェア ?>
            <div class="article__container__sns">
                <div class="share-btn">
                    <a href=""></a>
                </div>
            </div>
            <?php // SNSシェア end ?>
            <?php //一覧へ戻る ?>
            <div class="article__container__bottom">
                <div class="btn">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップへ戻る</a>
                </div>
            </div>
            <?php //一覧へ戻る end ?>
        </div>
    </div>
</article>



<?php get_footer(); ?>
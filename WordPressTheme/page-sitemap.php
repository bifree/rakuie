<?php get_header(); ?>

<main class="sitemap">

    <div class="c-lowpage__mv">
        <div class="container">
            <h2>サイトマップ</h2>
        </div>
    </div>

    <div class="container">
        <div class="c-breadcrumb"><?php breadcrumb(); ?></div>
        <article>
            <div class="inner">
                <ul>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="first">トップページ</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="first">サービス内容</a>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/service#promise' ) ); ?>">５つの約束</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/service#merit' ) ); ?>">ラクイエの強み</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/service#tokuten' ) ); ?>">特典情報</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="first">ご相談・査定依頼フォーム</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="first">よくあるご質問</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/company' ) ); ?>" class="first">会社案内</a>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/company#about' ) ); ?>">会社概要</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/company#message' ) ); ?>">代表挨拶</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/company#access' ) ); ?>">アクセス</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="first">プライバシーポリシー</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>" class="first">サイトマップ</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>

</main>

<?php get_footer(); ?>
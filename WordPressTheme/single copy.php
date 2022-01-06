<?php get_header(); ?>

<article>
    <div class="article">
        <div class="c-lowpage__mv">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="c-breadcrumb"><?php breadcrumb(); ?></div>
        <div id="content">
            <div class="section">
                <div class="case_info">
                    <div class="case_row">
                        <dl class="info_name">
                            <dd><?php the_title(); ?></dd>
                        </dl>
                    </div>
                    <div class="case_row">
                        <dl class="case_info_sta">
                            <dt>最寄り駅</dt>
                            <dd>
                                <br>
                                <br>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="section">
                <p class="imagePost">
                    <img src="" alt="">
                </p>
                <ul class="listThumbs">
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                </ul>
            </div>
            <h4 class="title">
                物件概要
            </h4>

            <div class="section">
                <div class="table">
                    <dl>
                        <dt>建物構造</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>築年月</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>土地権利</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>小学校区</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>地上階</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>棟総戸数</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>管理形態</dt>
                        <dt></dt>
                    </dl>
                    <dl>
                        <dt>中学校区</dt>
                        <dt></dt>
                    </dl>
                </div>
            </div>
            <h4 class="title">
                売買事例
            </h4>

            <div class="section">
                <table>
                    <tbody>
                        <tr>
                            <th class="w-15">売却状況</th>
                            <th class="w-15">預り日</th>
                            <th class="w-15">売却日</th>
                            <th class="w-15">平米数</th>
                            <th class="w-15">間取り</th>
                            <th class="w-15">売却価格（万円）</th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                <div class="contact-btn">
                    <h3>ご相談フォームはこちら</h3>
                </div>
            </a>
        </div>
    </div>
</article>



<?php get_footer(); ?>
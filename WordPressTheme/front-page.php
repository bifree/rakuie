<?php get_header(); ?>
	<div class="sp-none">
		<?php get_template_part('template/main-views');?>
	</div>
	<!-- <div class="pc-none"> -->
		<//?php get_template_part('template/main-sp-views');?>
	<!-- </div> -->
	<main id="main">
		<div class="container">
			<div class="rakuie-omakase js-inview">
				<h2 class="omakase-title">相続不動産の売却は<br>ラクイエにお任せください</h2>
				<div class="shigyou-box">
					<div class="inner">
						<h2 class="shigyo-title"><span class="yellow">司法書士・税理士・行政書士</span>など各士業との<span class="yellow">連携</span>でサポート</h2>
						<div class="flex">
							<div class="left">
								<h3><span class="orange">ラクイエ</span>なら<br class="sp-none">すべて対応可能</h3>
								<div class="left-inner">
									<div class="img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shigyo.jpg" alt="">
									</div>
									<div class="text">
										<p><span class="small">いろいろなところで相談する</span><br><span class="small">手間が省けて</span>ラクラク</p>
									</div>
								</div>
							</div>
							<div class="right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shigous.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<p>『司法書士・行政書士・宅地建物取引士・相続診断士』の<br class="is_pc"><strong>専門資格の連携</strong>で<br class="is_pc">多様な相続不動産のケースにご対応が可能です。</p>
				<p>相続には時として、さまざまな専門家の力が必要になります。<br>
					相続に関する専門家の取りまとめ、窓口役となり<br class="is_pc">
					事務手続きや提携士業との連携で<br class="is_pc">
					<strong>相続問題をワンストップで</strong><br>ラクイエが解決いたします。</p>
					<p><span class="orange">ご売却・ご相談</span>は<span class="orange">不動産相続専門</span>の<span class="orange">ラクイエ</span>にお任せ下さい！</p>
				<nav class="c-button">
					<a href="https://www.rakuie.jp/service/">選ばれる理由</a>
				</nav>
			</div>
		</div>

		<div class="top-onayami">
			<h3>相続でこんなことで<br>お困りではありませんか？</h3>
			<div class="inner">
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/onayami01.jpg" alt="">
				</div>
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/onayami02.jpg" alt="">
				</div>
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/onayami03.jpg" alt="">
				</div>
			</div>
			<p class="orange">
				ラクイエが全て親身になって解決いたします！
			</p>
		</div>

		<div class="top-covid">
			<div class="pc">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-c01.jpg" alt="">
				</a>
			</div>
			<div class="sp">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-c02.jpg" alt="">
				</a>
			</div>
		</div>

		<div class="free-contact">
			<div class="pc">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/free-dial.jpg" alt="">
			</div>
			<div class="sp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/freedial-sp.jpg" alt="">
			</div>
		</div>

		<div class="rakuie-ceo js-inview">
			<div class="inner">
				<p>『安心・安全な不動産取引』をお約束<br>すべてのご家族に<br class="is_sp">笑顔と幸せをお届けします！</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/card.jpg" alt="" class="is_pc">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/card_sp2.png" alt="" class="is_sp">
			</div>
		</div>
		<div class="covid">
			<div class="inner">
				<h4>【新型ウイルス感染防止対策について】</h4>
				<p>弊社では、お客様に安心してご来店・ご利用いただけるよう、<br>以下の対策を行っております。</p>
				<div class="covid_flow">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/taisaku.png" alt="">
				</div>
				<div class="covid_flow-sp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/taisaku02.png" alt="">
				</div>
				<div class="online">
					<p>全国対応！相談無料！簡単操作！<br>
						遠方の方や〇〇など、ZOOM等でご相談ください！</p>
				</div>
			</div>
		</div>
		<div class="muryo-satei">
			<h2>お気軽に無料査定をお申し込みください</h2>
			<p>フリーダイアル <span class="num">0120-071-778</span></p>
		</div>
		<div class="container">
			<div class="blogs-box js-inview">
				<div class="top_blog">
					<div class="ttl-Box">
						<p class="ttl">社長ブログ</p>
					</div>
					<div class="scroll_box">
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$the_query = new WP_Query( array(
						'post_status' => 'publish',
						'paged' => $paged,
						'posts_per_page' => 5, // 表示件数
						'orderby'     => 'date',
						'order' => 'DESC'
							) );
						if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post(); ?>
			
						<div class="news-list__outline">
							<div class="news-list__box">
								<div class="news-list__left">
									<span class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>" style=""><?php the_category(); ?></span><span class="post-date"><?php echo get_the_date('Y.n.j'); ?></span>
									<div class="list-title">
										<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									</div>
								</div>
								<div class="news-list__right">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
			
						<?php endwhile; endif; ?>
						<dl></dl>
					</div>
				</div>

			</div>
			<!-- <div class="suggestion">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="">
			</div> -->
		</div>
		<div class="rakuie-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d420125.9754026142!2d135.24020243281248!3d34.64878830000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f0.2!3m3!1m2!1s0x6000ddb7145b1b6d%3A0x8d0ec4ee45879a2a!2z5qCq5byP5Lya56S-44Op44Kv44Kk44Ko!5e0!3m2!1sja!2sjp!4v1639232120303!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<p id="homebanner">
			<span class="text_wide">
				下記いずれかでお気軽にお問合せください<br>
			今すぐ無料査定
			</span>
			<span class="img_wide">
				<a href="">
					<span>無料査定</span>
				</a>
			</span>
			<span class="img_wide">
				<a href="">
					<span>LINEで相談する</span>
				</a>
			</span>
		</p>
	</main>
<?php get_footer(); ?>

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
				<h2>相続不動産の売却は<br>ラクイエにお任せください</h2>
				<p>『司法書士・行政書士・宅地建物取引士・相続診断士』の<br class="is_pc"><strong>専門資格の連携</strong>で<br class="is_pc">多様な相続不動産のケースにご対応が可能です。</p>
				<p>相続には時として、さまざまな専門家の力が必要になります。<br>
					相続に関する専門家の取りまとめ、窓口役となり<br class="is_pc">
					事務手続きや提携士業との連携で<br class="is_pc">
					<strong>相続問題をワンストップで</strong><br>ラクイエが解決いたします。</p>
				<nav class="c-button">
					<a href="https://www.rakuie.jp/service/">選ばれる理由</a>
				</nav>
			</div>
		</div>
		<div class="second-box parallax">
			<div class="title">
				<div class="inner">
					<h2>ラクイエに依頼する<br class="is_sp">4つのメリット</h2>
				</div>
			</div>
			<div class="content">
				<div class="inner">
					<div class="wrapItems js-inview">
						<dl class="item">
							<dt>各所への相談がラクイエで完結</dt>
							<dd>
								<p class="ttl">
									多様な専門家との連携により、<br class="is_pc">お客さまがあちこち相談に行く手間と時間が省けます。
								</p>
							</dd>
						</dl>
						<dl class="item">
							<dt>ご相談者の立場に立ったご提案</dt>
							<dd>
								<p class="ttl">
									ノルマを撤廃し、<br class="is_pc">お客さまに寄り添ったご提案をさせていただきます。
								</p>
							</dd>
						</dl>
						<dl class="item">
							<dt>どんなご相談も可能</dt>
							<dd>
								<p class="ttl">
									相続以外にも、<br class="is_pc">リフォーム依頼・新築一戸建て建築相談等もお任せください。
								</p>
							</dd>
						</dl>
						<dl class="item">
							<dt>丁寧に分かりやすくご説明</dt>
							<dd>
								<p class="ttl">
									専門用語を使わず、<br class="is_pc">ご理解・ご納得いただけるまでご対応させていただきます。
								</p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="rakuie-baikyaku">
				<h2>売却までの流れ</h2>
				<ol class="js-inview">
					<li>
						<span>STEP<em>01</em></span>
						<dl>
							<dt>査定のご依頼</dt>
							<dd>お電話・メールにてご相談ください。物件の立地や、建物の内部など状態を確認して査定いたします。</dd>
						</dl>
					</li>
					<li>
						<span>STEP<em>02</em></span>
						<dl>
							<dt>売却内容のご相談</dt>
							<dd>査定結果に基づいて、売却価格や契約方法のご説明・ご相談をさせていただきます。</dd>
						</dl>
					</li>
					<li>
						<span>STEP<em>03</em></span>
						<dl>
							<dt>媒介契約</dt>
							<dd>ご希望の内容で媒介契約を行います。</dd>
						</dl>
					</li>
					<li>
						<span>STEP<em>04</em></span>
						<dl>
							<dt>広告・お客さま対応</dt>
							<dd>弊社のポータルサイトにて物件を掲載、お客さまからのお問い合わせの対応などをいたします。</dd>
						</dl>
					</li>
					<li>
						<span>STEP<em>05</em></span>
						<dl>
							<dt>売買契約</dt>
							<dd>購入希望者との間で、売買契約を締結いたします。</dd>
						</dl>
					</li>
				</ol>
				<nav class="c-button">
					<a href="https://www.rakuie.jp/service/">サービス内容</a>
				</nav>
			</div>
		</div>
		<div class="rakuie-ceo js-inview">
			<div class="inner">
				<p>『安心・安全な不動産取引』をお約束<br>すべてのご家族に<br class="is_sp">笑顔と幸せをお届けします！</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/card.jpg" alt="" class="is_pc">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/card_sp2.png" alt="" class="is_sp">
			</div>
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
				<div class="top_blog">
					<div class="ttl-Box">
						<p class="ttl">売買事例</p>
					</div>
					<div class="scroll_box">
						<dl></dl>
					</div>
				</div>
			</div>
			<!-- <div class="suggestion">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="">
			</div> -->
		</div>
		<div class="rakuie-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d420125.9754026142!2d135.24020243281248!3d34.64878830000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f0.2!3m3!1m2!1s0x6000ddb7145b1b6d%3A0x8d0ec4ee45879a2a!2z5qCq5byP5Lya56S-44Op44Kv44Kk44Ko!5e0!3m2!1sja!2sjp!4v1639232120303!5m2!1sja!2sjp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<p id="homebanner">
			<span class="text_wide">
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

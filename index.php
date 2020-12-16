	<?php get_header(); ?>


	<!-- main -->
	<main>
		<div class="content-page">
			<!-- home のページ -->
			<div id="page0" class="active">
				<div class="main-top">
					<img src="<?php echo get_template_directory_uri(); ?>/logo-img/castle-art.jpg" alt="お城の絵" class="img-bg">
					<img src="<?php echo get_template_directory_uri(); ?>/logo-img/kunigami.jpg" alt="お城の絵" class="img-bg2">
					<h1 class="main-title">Amis World</h1>
				</div>
				<section class="welcome">
					<div class="animate-margin">
						<div class="subtitle right-animate">
							<h2 class="amis js-amis">AmisWorldへようこそ</h2>
						</div>
					</div>
					<div class="subtext js-first-text">
						<h3 class="big-font">～井上亜美の世界～</h3>
						<p class="text-font">AmisWorldへようこそ
							<br>とある県の大学生、井上亜美さんの描く
							<br>独特な世界観と、絵を見ていて考えさせられるメッセージ性のある構成。
							<br>そのどれもが美しく、多くの人々を魅了しています。
							<br>そんな井上亜美さんの絵画の世界を一緒にのぞいてみましょう！
							<br>Let's Go!!!!
						</p>
						<img class="neko-img" src="<?php echo get_template_directory_uri(); ?>/logo-img/nago-edit-photo.jpg" alt="">
					</div>
				</section>
				<section class="explane">
					<div>
						<div class="subtitle left-animate">
							<h2 class="amis02 js-amis02">ストーリーを楽しもう</h2>
						</div>
					</div>
					<div class="subtext js-second-text">
						<h3 class="big-font">～よく見ると見えてくる～</h3>
						<p class="text-font">作品の中にはシリーズとして関連性のある作品が存在する
							<br>その作品は実際に井上亜美さんが現地へ遊びに行き
							<br>そこでの体験・風景・感じたことなどから描かれている。彼女も冒険をしているのだが彼女の描く絵の中にも彼女のように冒険をしてる存在が……！？
							<br>さて、どんなストーリーがあるのでしょうか
						</p>
						<img class="neko-img" src="<?php echo get_template_directory_uri(); ?>/logo-img/nanjo-edit-photo.jpg" alt="">
					</div>
				</section>
				<!-- blog & news -->
				<div class="blog-news">
					<h3>Amis blog & news</h3>
					<ul class="blog-news-container">
						<?php while (have_posts()): the_post(); ?>
						<li id="post-<?php the_ID(); ?>" class="blog-news-block">
							<img src="logo-img/きらりん紳士2.png" alt="ブログ、ニュースのサムネイル画像">
							<section>
								<h4 class="blog-news-title">
									<a href="">今日の出来事</a>
								</h4>
								<p class="blog-news-time">2000年12月05日</p>
								<p class="blog-news-text">
									<a href="">今日は空全体が雲に覆われて来ましたが、沖縄ってそんなに寒くないのかな…</a>
								</p>
								<a class="read-more" href="">続きを見る</a>
							</section>
						</li>
						<li class="blog-news-block">
							<?php the_post_thumbnail(array(80,80)); ?>
							<!-- <img src="logo-img/きらりん紳士2.png" alt="ブログ、ニュースのサムネイル画像"> -->
							<section>
								<h4 class="blog-news-title">
									<a href="">今日の出来事</a>
								</h4>
								<p class="blog-news-time"><?php the_time('Y年m月d日'); ?></p>
								<p class="blog-news-text">
									<a href="">今日は空全体が雲に覆われて…</a>
								</p>
								<a class="read-more" href="">続きを見る</a>
							</section>
						</li>
						<li class="blog-news-block">
							<img src="logo-img/きらりん紳士2.png" alt="ブログ、ニュースのサムネイル画像">
							<section>
								<h4 class="blog-news-title">
									<a href="">今日の出来事</a>
								</h4>
								<p class="blog-news-time">2000年12月05日</p>
								<p class="blog-news-text">
									<a href="">今日は空全体が雲に覆われて…</a>
								</p>
								<a class="read-more" href="">続きを見る</a>
							</section>
						</li>
					</ul>
					<div class="all-blog">
						<a href="">もっと見る</a>
					</div>
				</div>
				<!-- スライドギャラリー -->
				<aside class="art-gallery">
					<!-- Slider main container -->
					<div class="swiper-container">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/logo-img/castle-art.jpg" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/logo-img/fruits-art.jpg" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/logo-img/onna.jpg" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/logo-img/mitate-art.jpg" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/logo-img/nanjo.jpg" alt=""></div>

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>
					</div>
				</aside>
				
<?php get_footer(); ?>
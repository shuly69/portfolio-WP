<?php get_header() ?>
	<main>
		<h1 class="hidden-title">Human Skills</h1>
		<section class="part-header container">
			<h2 class="hidden-title">Talk me, my name Robert Fox</h2>
			<div class="part-header__left info-person">
				<p class="info-person__text-top"><span class="color-red">Hello,</span>I'm</p>
				<p class="info-person__title"><?php echo get_theme_mod('header-title')?> <span class="info-person__title--line"></span></p>
				<p class="info-person__text-bottom"><?php echo get_theme_mod('header-subtitle')?></p>
				<a class=" button-red" href="#about-me">let's talk</a>
			</div>
			<article class="part-header__right social-media">
				<?php echo portfolioRenderingSocial('social-media__wrapper', '#ffffff')?>
			</article>
		</section>
		<section class="about-me container" id="about-me">
			<h2 class="hidden-title">About me</h2>
			<div class="details-numbers">
				<div class="details-numbers__age">
					<img class="details-numbers__img" src="<?php echo get_theme_mod('about-img-customer')?>" alt="year1">
					<div class="details-numbers__wrapper details-numbers__wrapper--bottom">
						<p class="details-numbers__text">Saticfied <br> Customers</p>
						<span class="details-numbers__span color-red"><?php echo get_theme_mod('about-customer')?></span>
					</div>
				</div>
				<div class="details-numbers__experience">
					<img class="details-numbers__img" src="<?php echo get_theme_mod('about-img-experience')?>" alt="year1">
					<div class="details-numbers__wrapper details-numbers__wrapper--top">
						<span class="details-numbers__span color-red"><?php echo get_theme_mod('about-experience')?></span>
						<p class="details-numbers__text">Year <br> of experience</p>
					</div>
				</div>
			</div>
			<div class="about-me__info">
				<div class="section-title">
					<span class="section-title__item--span color-red">01</span>
					<h3 class="section-title__item">about me</h3>
				</div>
				<p class="about-me__description mb-15"><?php echo get_theme_mod('about-description')?> </p>
				<p class="about-me__description"><?php echo get_theme_mod('about-description-secondary')?></p>
			</div>
		</section>
		<?php get_template_part('template-part/download-cv')?>
		<section class="service-space container">
			<div class="service-space__title section-title">
				<span class="section-title__item--span color-red">02</span>
				<h3 class="section-title__item">my service</h3>
			</div>
			<?php get_template_part('template-part/service-card') ?>
		</section>
		<?php get_template_part('template-part/portfolio-slider')?>
		<?php echo get_template_part('template-part/testimonial-slider') ?>
	</main>
<?php get_footer() ?>
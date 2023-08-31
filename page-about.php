<?php get_header() ?>
<main class="about-padding">
	<?php echo get_template_part('template-part/breadcrumb-part') ?>
	<section class="about-description container">
		<h2 class="hidden-title">Section about description</h2>
		<img class="about-description__img" src="<?php echo get_theme_mod('about-img-page')?>" alt="men">
		<div class="about-description__wrapper description">
			<div class="description__title section-title">
				<span class="section-title__item--span color-red">01</span>
				<h3 class="section-title__item">about me</h3>
			</div>
			<div class="description__group">
				<hr class="description__hr">
				<div class="description__text-box">
					<h4 class="description__subtitle"><?php echo get_theme_mod('about-title')?></h4>
					<p class="description__text"><?php echo get_theme_mod('about-description')?></p>
					<p class="description__text"><?php echo get_theme_mod('about-description-secondary')?></p>
				</div>
				<div class="description__numbers">
					<div class="details-numbers__wrapper">
						<span class="details-numbers__span color-red"><?php echo get_theme_mod('about-experience')?></span>
						<p class="details-numbers__text">Year <br> of experience</p>
					</div>
					<div class="details-numbers__wrapper">
						<span class="details-numbers__span color-red"><?php echo get_theme_mod('about-customer')?></span>
						<p class="details-numbers__text">Saticfied <br> Customers</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-skills bg-grey">
		<h2 class="hidden-title">Section about of skills</h2>
		<div class="section-skills__group container">
			<div class="section-skills__first-block">
				<div class="section-skills__title section-title">
					<span class="section-title__item--span color-red">02</span>
					<h3 class="section-title__item">My Skills</h3>
				</div>
				<p class="section-skills__text"><?php echo get_theme_mod('skills-text')?></p>
				<button class="button-red">download cv</button>
			</div>
			<ul class="section-skills__secondary-block skills-scale">
				<li class="skills-scale__list">
					<p class="skills-scale__title"><?php echo get_theme_mod('skills-first-title')?><span class="skills-scale__span"><?php echo get_theme_mod('skills-first')?>%</span></p>
					<div class="skills-scale__strip">
						<div class="skills-scale__strip--access" style="width: <?php echo get_theme_mod('skills-first')?>%"></div>
					</div>
				</li>
				<li class="skills-scale__list">
					<p class="skills-scale__title"><?php echo get_theme_mod('skills-secondary-title')?><span class="skills-scale__span"><?php echo get_theme_mod('skills-secondary')?>%</span>
					</p>
					<div class="skills-scale__strip">
						<div class="skills-scale__strip--access" style="width: <?php echo get_theme_mod('skills-secondary')?>%"></div>
					</div>
				</li>
				<li class="skills-scale__list">
					<p class="skills-scale__title"><?php echo get_theme_mod('skills-third-title')?><span class="skills-scale__span"><?php echo get_theme_mod('skills-third')?>%</span></p>
					<div class="skills-scale__strip">
						<div class="skills-scale__strip--access" style="width: <?php echo get_theme_mod('skills-third')?>%"></div>
					</div>
				</li>
				<li class="skills-scale__list">
					<p class="skills-scale__title"><?php echo get_theme_mod('skills-fourth-title')?><span class="skills-scale__span"><?php echo get_theme_mod('skills-fourth')?>%</span></p>
					<div class="skills-scale__strip">
						<div class="skills-scale__strip--access" style="width: <?php echo get_theme_mod('skills-fourth')?>%"></div>
					</div>
				</li>
			</ul>
		</div>

	</section>
	<section class="section-experience container">
		<h2 class="hidden-title">Section about of experience</h2>
		<div class="section-experience__title section-title">
			<span class="section-title__item--span color-red">03</span>
			<h3 class="section-title__item">My experiences</h3>
		</div>
		<div class="section-experience__box experience">
			<?php
			$args = [
				'post_type'           => 'experience-cards',
				'order'             => 'asc'
			];
			$query = new WP_Query($args);

			?>
			<?php if($query->have_posts()) : ?>
			<?php while($query->have_posts()) : ?>
			<?php $query->the_post();
				$class = get_post_custom()['article-class'][0];
				$titleNum = get_post_custom()['title-num'][0];
				$titleDate = get_post_custom()['title-date'][0];
				$svg = get_post_custom()['svg'][0];
			?>

			<?php //var_dump(get_post_custom()) ;?>
			<article class="experience-item <?php echo $class?>">
				<?php echo $svg?>
				<div class="experience-item__title-wrapper">
					<span class="experience-item__span color-red"><?php echo $titleNum?></span>
					<h4 class="experience-item__title"><?php the_title();?><span
							class="experience-item__title--span color-red"><?php echo $titleDate?></span></h4>
				</div>
				<p class="experience-item__text"><?php the_content();?></p>
			</article>
				<?php endwhile;?>
				<?php endif;?>
		</div>
	</section>
	<?php echo get_template_part('template-part/download-cv') ?>

</main>
<?php get_footer() ?>

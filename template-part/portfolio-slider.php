<?php
$num = is_front_page() ? 3 : 1;
$color = is_front_page() ? 'bg-grey' : '';
?>
<section class="portfolio-space <?php echo $color?>">
	<div class="container portfolio-space__wrapper">
		<div class="portfolio-space__header">
			<div class="portfolio-space__title section-title">
				<span class="section-title__item--span color-red">0<?php echo $num?></span>
				<h3 class="section-title__item">portfolio</h3>
			</div>
			<nav class="menu-slider">
				<ul class="menu-slider__wrapper">
					<li class="menu-slider__item menu-slider__item--active">all</li>
					<?php foreach (get_categories() as $category) : ?>
						<li class="menu-slider__item"><?php echo $category->name; ?></li>
					<?php endforeach;?>
				</ul>
				<div class="arrow">
					<div class="arrow__item arrow-prev"><img class="arrow__img" src="<?php echo get_template_directory_uri()?>/assets/img/Arrow-left.png" alt="arrow left"></div>
					<div class="arrow__item arrow-next"><img class="arrow__img" src="<?php echo get_template_directory_uri()?>/assets/img/Arrow-right.png" alt="arrow right"></div>
				</div>
			</nav>
		</div>
		<div class="portfolio-slider">
			<div class="portfolio-slider__wrapper slider">
				<div class="portfolio-slider__item portfolio-slider__all slider">
					<?php $postDefault = new WP_Query(['post_type' => 'post']);?>
					<?php if ($postDefault->have_posts()) : ?>
						<?php while ($postDefault->have_posts()) : ?>
							<?php $postDefault->the_post(); ?>
							<?php $cat = get_the_category($post->ID);?>
							<div class="slider__list"><img class="slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="laptop"><div class="slider__background"><span class="slider__span">mobile design</span><?php echo $cat[0]->name ?></div></div>
						<?php endwhile ?>
						<?php wp_reset_postdata(); ?>
					<?php endif ?>
				</div>
				<div class="portfolio-slider__item portfolio-slider__ui-design" style="display:none">
					<?php $ui = new WP_Query(['category_name' => 'ui-ux-design']);?>
					<?php if ($ui->have_posts()) : ?>
						<?php while ($ui->have_posts()) : ?>
							<?php $ui->the_post(); ?>
							<?php $cat = get_the_category($post->ID);?>
							<div class="slider__list"><img class="slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="laptop"><div class="slider__background"><span class="slider__span">mobile design</span><?php echo $cat[0]->name ?></div></div>
						<?php endwhile ?>
						<?php wp_reset_postdata(); ?>
					<?php endif ?>
				</div>
				<div class="portfolio-slider__item portfolio-slider__product-design" style="display:none">
					<?php $product = new WP_Query(['category_name' => 'product-design']);?>
					<?php if ($product->have_posts()) : ?>
						<?php while ($product->have_posts()) : ?>
							<?php $product->the_post(); ?>
							<?php $cat = get_the_category($post->ID);?>
							<div class="slider__list"><img class="slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="laptop"><div class="slider__background"><span class="slider__span">mobile design</span><?php echo $cat[0]->name ?></div></div>
						<?php endwhile ?>
						<?php wp_reset_postdata(); ?>
					<?php endif ?>
				</div>
				<div class="portfolio-slider__item portfolio-slider__branding" style="display:none">
					<?php $branding = new WP_Query(['category_name' => 'branding']);?>
					<?php if ($branding->have_posts()) : ?>
					<?php while ($branding->have_posts()) : ?>
						<?php $branding->the_post(); ?>
						<?php $cat = get_the_category($post->ID);?>
							<div class="slider__list"><img class="slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="laptop"><div class="slider__background"><span class="slider__span">mobile design</span><?php echo $cat[0]->name ?></div></div>
					<?php endwhile ?>
						<?php wp_reset_postdata(); ?>
					<?php endif ?>
				</div>
				<div class="portfolio-slider__item portfolio-slider__web-design" style="display:none">
					<?php $webDesign = new WP_Query(['category_name' => 'web-design']);?>
					<?php if ($webDesign->have_posts()) : ?>
						<?php while ($webDesign->have_posts()) : ?>
							<?php $webDesign->the_post(); ?>
							<?php $cat = get_the_category($post->ID);?>
							<div class="slider__list"><img class="slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="laptop"><div class="slider__background"><span class="slider__span">mobile design</span><?php echo $cat[0]->name ?></div></div>
						<?php endwhile ?>
						<?php wp_reset_postdata(); ?>
					<?php endif ?>
				</div>
			</div>
			<div class="portfolio-dots">
				<div class="slider-dots__item slider-dots__item--active"></div>
				<div class="slider-dots__item"></div>
				<div class="slider-dots__item"></div>
			</div>
		</div>
	</div>
</section>
<?php
$args = [
	'post_type'           => 'testimonial-cards',
];
$query = new WP_Query($args);
$arrayImg = [];
$arrayContent = [];
$arrayPerson = [];
$arrayPosition = [];
$numTitle  = is_front_page() ? '4' : '3';
?>

<?php if($query->have_posts()) : ?>
	<?php while($query->have_posts()) : ?>
		<?php $query->the_post();?>
		<?php
		$arrayImg[] = get_the_post_thumbnail_url();
		$arrayContent[] = get_the_content();
		$arrayPerson[] = get_post_custom()['name-testimonial'][0];
		$arrayPosition[] = get_post_custom()['position-testimonial'][0];

		?>
	<?php endwhile;?>
<?php endif;?>

<section class="testimonial-space container">
	<div class="testimonial-header__title--hidden section-title">
		<span class="section-title__item--span color-red">0<?php echo $numTitle ?></span>
		<h3 class="section-title__item">testimonial</h3>
	</div>
	<h2 class="hidden-title">testimonial for person</h2>
	<div class="testimonial-wrapper">
		<ul class="testimonial-slider">
			<?php for($i = 0; $i < count($arrayImg); $i++) :  ?>
			<li class="testimonial-slider__list"><img class="slider__img" src="<?php echo $arrayImg[$i]?>" alt="person">
			</li>
			<?php endfor; ?>
		</ul>
	</div>

	<div class="testimonial-space__right">
		<div class="testimonial-header">
			<div class="testimonial-header__title section-title">
				<span class="section-title__item--span color-red">0<?php echo $numTitle ?></span>
				<h3 class="section-title__item">testimonial</h3>
			</div>
			<p class="testimonial-header__text color-grey"><span
					class="testimonial-header__span color-red">01</span>/03</p>
		</div>

		<div class="testimonial-main">
			<svg class="quote">
				<use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/img.svg#quote"></use>
			</svg>
			<div class="testimonial-container">
				<ul class="testimonial-text">
					<?php
					for($i = 0; $i < count($arrayContent); $i++) :  ?>
					<li class="testimonial-text__item">
						<?php echo $arrayContent[$i] ?>
						<p class="testimonial-main__name">
							<span class="testimonial-main__span color-red"><?php echo $arrayPerson[$i] ?></span>
							<?php echo $arrayPosition[$i] ?></p>
					</li>
					<?php endfor; ?>
				</ul>
			</div>

			<div class="testimonial-main__slider-details">
				<div class="testimonial-dots">
					<div class="slider-dots__item slider-dots__item--active"></div>
					<div class="slider-dots__item"></div>
					<div class="slider-dots__item"></div>
				</div>
				<div class="arrow">
					<div class="arrow__item testimonial-prev"><img class="arrow__img" src="<?php echo get_template_directory_uri()?>/assets/img/Arrow-left.png"
					                                               alt="arrow left"></div>
					<div class="arrow__item testimonial-next"><img class="arrow__img" src="<?php echo get_template_directory_uri()?>/assets/img/Arrow-right.png"
					                                               alt="arrow right"></div>
				</div>
			</div>
		</div>
	</div>
</section>

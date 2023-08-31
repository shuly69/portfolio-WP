<?php get_header() ?>
<main>
	<?php echo get_template_part('template-part/breadcrumb-part') ?>
	<section class="service-space container">
		<div class="service-space__title section-title">
			<span class="section-title__item--span color-red">01</span>
			<h3 class="section-title__item">my service</h3>
		</div>
		<?php get_template_part('template-part/service-card') ?>
	</section>
	<?php echo get_template_part('template-part/download-cv') ?>
	<?php echo get_template_part('template-part/testimonial-slider') ?>
	<?php echo get_template_part('template-part/question') ?>

</main>

<?php get_footer() ?>

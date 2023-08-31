<?php get_header() ?>

<main>
	<?php echo get_template_part('template-part/breadcrumb-part') ?>
	<?php get_template_part('template-part/contact-part')?>
	<section class="location-space container">
		<div class="location-space__title section-title">
			<span class="section-title__item--span color-red">02</span>
			<h3 class="section-title__item">location</h3>
		</div>
		<map class="map" name="map">
			<?php echo do_shortcode('[leaflet-map]')?>
		</map>
	</section>
</main>

<?php get_footer() ?>

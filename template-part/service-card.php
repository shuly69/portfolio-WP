<?php
$args = [
	'post_type'           => 'service-cards',
];
$query = new WP_Query($args);
?>
<div class="card">
	<?php if($query->have_posts()) : ?>
	<?php while($query->have_posts()) : ?>
	<?php $query->the_post();?>
			<article class="card__item">
				<?php the_content();?>
			</article>
	<?php endwhile;?>
	<?php endif;?>
</div>
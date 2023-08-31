<?php
$args = [
	'post_type'           => 'question-cards',
];
$query = new WP_Query($args);
//var_dump(is_page('portfolio'));
?>

<section class="<?php echo is_page('portfolio') ? 'portfolio-question' : ''  ?> question-space container bg-grey">
	<div class="question-space__box">
		<div class="question-space__title section-title">
			<span class="section-title__item--span color-red">04</span>
			<h3 class="section-title__item">Have any question?</h3>
		</div>
		<hr class="question-space__hr">
		<ul class="question-space__elements question">
			<?php if($query->have_posts()) : ?>
			<?php while($query->have_posts()) : ?>
			<?php $query->the_post();?>
			<li class="question__list">
				<h4 class="question__title"><?php the_title()?></h4>
				<?php the_content() ?>
			</li>
			<?php endwhile;?>
			<?php endif;?>
		</ul>
	</div>

</section>

<section class="contact-space container">
	<h2 class="hidden-title">Contacts form for person</h2>
	<div class="contact-space__first contact-details">
		<div class="contact-space__title section-title">
			<span class="section-title__item--span color-red">05</span>
			<h3 class="section-title__item">contact</h3>
		</div>
		<div class="contact-details__wrapper">
			<div class="contact-details__item">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9.53168 10.1875C13.5208 14.1754 14.4257 9.56181 16.9656 12.0999C19.4142 14.5478 20.8216 15.0383 17.7192 18.1398C17.3306 18.4521 14.8615 22.2093 6.18454 13.5348C-2.49354 4.85909 1.26152 2.38753 1.57391 1.99904C4.68381 -1.11107 5.1658 0.304471 7.61443 2.75242C10.1543 5.29158 5.5426 6.1995 9.53168 10.1875Z" fill="#FE390C"/>
				</svg>
				<div class="details">
					<p class="details__title">Phone</p>
					<p class="details__text"><?php echo get_theme_mod('contact-phone')?></p>
				</div>
			</div>
			<div class="contact-details__item">
				<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.9394 0.715088C16.2804 0.715088 17.5704 1.24509 18.5194 2.19609C19.4694 3.14509 20.0004 4.42509 20.0004 5.76509V13.6651C20.0004 16.4551 17.7304 18.7151 14.9394 18.7151H5.06037C2.26937 18.7151 0.000366211 16.4551 0.000366211 13.6651V5.76509C0.000366211 2.97509 2.25937 0.715088 5.06037 0.715088H14.9394ZM16.0704 5.91509C15.8604 5.90409 15.6604 5.97509 15.5094 6.11509L11.0004 9.71509C10.4204 10.1961 9.58937 10.1961 9.00037 9.71509L4.50037 6.11509C4.18937 5.88509 3.75937 5.91509 3.50037 6.18509C3.23037 6.45509 3.20037 6.88509 3.42937 7.18509L3.56037 7.31509L8.11037 10.8651C8.67037 11.3051 9.34937 11.5451 10.0604 11.5451C10.7694 11.5451 11.4604 11.3051 12.0194 10.8651L16.5304 7.25509L16.6104 7.17509C16.8494 6.88509 16.8494 6.46509 16.5994 6.17509C16.4604 6.02609 16.2694 5.93509 16.0704 5.91509Z" fill="#FE390C"/>
				</svg>
				<div class="details">
					<p class="details__title">Email</p>
					<p class="details__text"><?php echo get_theme_mod('contact-email')?></p>
				</div>
			</div>
			<div class="contact-details__item">
				<svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 0.715088C4.0374 0.715088 0 4.64173 0 9.46819C0 15.0299 3.7107 18.3854 6.17175 20.6061C6.95475 21.3461 7.98165 21.7151 9.0063 21.7151C10.0287 21.7151 11.0489 21.3475 11.8206 20.6135C14.2812 18.3929 18 15.0356 18 9.46819C18 4.64173 13.9626 0.715088 9 0.715088ZM9 12.9694C7.01505 12.9694 5.4 11.3987 5.4 9.46819C5.4 7.53769 7.01505 5.96695 9 5.96695C10.985 5.96695 12.6 7.53769 12.6 9.46819C12.6 11.3987 10.985 12.9694 9 12.9694Z" fill="#FE390C"/>
				</svg>
				<div class="details">
					<p class="details__title">Address</p>
					<p class="details__text"><?php echo get_theme_mod('contact-location')?></p>
				</div>
			</div>
		</div>
		<?php if(is_front_page()) : ?>
		<?php echo portfolioRenderingSocial('contact-details__social', '#ffffff')?>
		<?php else :?>
		<?php echo portfolioRenderingSocial('contact-details__social', '#111214')?>
		<?php endif ?>

	</div>
	<div class="contact-space__secondary contact-form">
		<h3 class="contact-form__title">I'm always open to discussing <span class="contact-form__span color-red">product design work</span>  or partnership </h3>
		<?php echo do_shortcode('[fluentform id="3"]')?>
	</div>
</section>
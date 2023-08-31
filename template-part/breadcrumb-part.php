<?php
global $arrayUri;
?>
<section class="part-header container">
	<h1 class="part-header__title"><?php echo $arrayUri[2]?></h1>
	<div class="breadcrumbs">
		<a class="breadcrumbs__page-prev" href="<?php echo home_url()?>">home</a>
		<span class="breadcrumbs__separator">/</span>
		<a class="breadcrumbs__page-current" href="<?php echo $arrayUri[2]?>"><?php echo $arrayUri[2]?></a>
	</div>
</section>
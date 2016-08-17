<?php /* Template Name: LoadByCategoryPage */ ?>
<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>	
<div class="container">
	<div class="row card-featured-wrapper">
		<h2 class="text-center"><?php single_cat_title();?></h2>
	</div>
</div>
<?php endwhile; wp_reset_query();?>
<?php get_footer(); ?>
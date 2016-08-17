<?php /* Template Name: aboutus */ ?>
<?php get_header();?>
<div class="container">
	<div class="row about-us">
		<h2 class="mrl-5">About Us</h2>
		<p>This is a page specially about Handmade Greeting cards for kids, young &amp elders too.<br>We are willing to give THE BEST!!!</p>
	</div>
</div>
<div class="container">
	<h2 class="mrl-5">Testimonials</h2>

	<?php $args = array(
            'post_type' => 'testimonialsp',
            'posts_per_page' => -1,
            's' => $text
            );
        $query = new WP_Query($args);

        while ($query -> have_posts()): $query -> the_post();
	 ?>

	<div class="testimonials">
		<div class="carousel-info">
			<div class="pull-left">
				<?php the_post_thumbnail('full');?>
			</div>
			
			<div class="pull-left">
				<span class="testimonials-name"><?php the_title();?></span>
				<span class="testimonials-post"><?php the_secondary_title(); ?></span>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
	<div style="height:20px;"></div>
</div>
<?php get_footer();?>
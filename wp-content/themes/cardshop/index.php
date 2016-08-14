<?php get_header(); ?>
<?php include 'search-bar.php';?>
<div class="container">
	<div class="row card-featured-wrapper">
		<h2 class="text-center"><?php single_cat_title();  ?></h2>
	</div>
</div>
<div class="container" id="card-block">
	<div class="row">
		<?php query_posts( 'posts_per_page=3&cat=4' ); ?>
		<?php while(have_posts()) : the_post(); ?>	
		<div class="col-md-3" id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="panel panel-default card-ml-mr">
				<div class="panel-body two-tone">
					<div class="card-img-holder">
						<!-- <img src="img/card-002-featured.png"/> -->
						<?php the_post_thumbnail('full');?>
						<h5 class="text-center"><?php the_title();?></h5>
						<div class="card-price text-center"><?php the_secondary_title(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn btn-default btn-xs">View</a>

					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div><!--end-of-container -->
</div><!--end-of-wave-grid -->
<?php get_footer(); ?>


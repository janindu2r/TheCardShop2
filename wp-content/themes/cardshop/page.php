<?php get_header(); ?>
<!-- <div class="container" id="card-block">
	<div class="row">
		<?php if ( have_posts( ) while( have_posts() ) : the_post(); ?>	
		<div class="col-md-3" id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="panel panel-default" >
				<div class="panel-body two-tone">
					<div class="card-img-holder">
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
</div><!--end-of-container --> -->
<?php get_footer(); ?>
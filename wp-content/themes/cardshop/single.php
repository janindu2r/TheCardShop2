<?php get_header(); ?>
<div class="container">
	<div class="row card-featured-wrapper">
		<h2 class="text-center"><?php the_title();?></h2>
	</div>
</div>
<div class="container" id="card-block">
	<div class="row">
		<?php while(have_posts()) : the_post(); ?>	
		<div class="col-md-3 text-center" id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="panel panel-default" >
				<div class="panel-body two-tone">
					<div class="card-img-holder">
						<!-- <img src="img/card-002-featured.png"/> -->
						<?php the_post_thumbnail('full');?>
						<h5 class="text-center"><?php the_title();?></h5>
						<div class="card-price text-center"><?php the_meta(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn btn-default btn-xs">View</a>

					</div>
				</div>

			</div>

		</div>
		<div id="myModal-<? the_ID(); ?>" class="modal hide fade" 
			tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
			aria-hidden="true">

			<div class="modal-body">
				<div class="panel-body two-tone">
					<div class="card-img-holder">
						<!-- <img src="img/card-002-featured.png"/> -->
						<?php the_post_thumbnail('full');?>
						<h5 class="text-center"><?php the_title();?></h5>
						<h6 class="text-center">Rs.200</h6>
						<a href="<?php echo get_permalink(); ?>" class="btn btn-default btn-xs" data-toggle="modal" data-target="#squarespaceModal">View</a>
						
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="close" data-dismiss="modal" 
				aria-hidden="true">×</button>
			</div>
		</div>
	<?php endwhile; ?>
	<script type="text/javascript">
	 $(document).ready(function(){  
	    $("#clickme").on
	      ("click", function(){ $("#myModal-" + $(this).attr('data-id')).modal();});
	  });
	</script>
</div>
</div><!--end-of-container -->
</div><!--end-of-wave-grid -->
<?php get_footer(); ?>


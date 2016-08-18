<?php get_header(); ?>
<div class="container" id="card-block">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-3" id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="panel panel-default">
				<div class="panel-body two-tone">
					<div class="card-img-holder">
						<!-- <img src="img/card-002-featured.png"/> -->
						<?php the_post_thumbnail('full');?>
						<h5 class="text-center"><?php the_title();?></h5>
						<div class="card-price text-center"><?php the_secondary_title(); ?></div>
						<a href="#" data-toggle="modal" data-target="" class="btn btn-default btn-xs">View</a>

					</div>
				</div>
			</div>
		</div>
		<div class="js-modal">
			<div class="modal fade" id="" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<div class="modal-body">
							<?php the_post_thumbnail('full');?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; else : ?>
			<p class="sorry-message"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div><!--end-of-container -->
<script>
    $(function(){
    var i=0;
    $('.card-img-holder').find('a').each(function(){
        var temp='#b'+i;
        $(this).attr('data-target',temp);
        ++i;
        console.log($(this).attr('id'));
    });
  });

    $(function(){
    var y=0;
    $('.js-modal').find('.fade').each(function(){
        var temp='b'+y;
        $(this).attr('id',temp);
        ++y;
        // console.log($(this).attr('id'));
    });
  });
</script>
<?php get_footer(); ?>


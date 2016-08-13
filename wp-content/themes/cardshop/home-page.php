<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<div class="row">
	<div class="container">
		<div class="card-welcome">
			<div class="card-welcome-heading text-center">
				<h3>WELCOME to The Card Store</h3>
				<h4><em>Offering a wide selectton of cards on thousand topics at low prices</em></h4>
			</div>
		</div>
	</div>
</div>


<!-- search -->
<div class="container card-search-block">
	<div class="row">
		<form class="card-search" role="search" action= method="GET">
			<div class="row">
				<div class="col-lg-12 card-search-padding">
					<div class="col-lg-4">
						<input type="text" class="form-control" aria-label="..." placeholder="Search Cards">
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<select class="form-control" id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
					</div>
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</form>
	</div>
</div>
<div class="container">
	<div class="row card-featured-wrapper">
		<h2 class="text-center">Featured Cards</h2>
	</div>
</div>
<div class="container" id="card-block">
	<div class="row">
		
		<?php query_posts( 'posts_per_page=3&cat=2' ); ?>
			<?php if ( have_posts() ) : ?>
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
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	</div>
</div><!--end-of-container -->
</div><!--end-of-wave-grid -->
<?php get_footer(); ?>


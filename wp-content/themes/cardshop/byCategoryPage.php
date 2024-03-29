<?php /* Template Name: byCategoryPage */ ?>
<?php get_header();?>
<div class="container">
	<div class="row card-featured-wrapper">
		<h2 class="text-center"><?php single_cat_title(); ?></h2>
	</div>
</div>
<div class="container" id="card-block" style="margin-top: 73px;margin-bottom: 173px;">
	<div class="row no-padding">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="<?php bloginfo('url'); ?>/?cat=1">
				<div class="panel panel-default cate-shrink" id="cat-01">
					<div class="panel-body category-wrap" >
						<div class="cate-wrapper">
							<div class="card-img-holder">
								<img src="img/card-001-featured.png"/>
								<h4 class="text-center">ss Card</h4>

							</div>
						</div>

					</div>
				</div>
			</a>
			
		</div>	
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="<?php bloginfo('url'); ?>/?cat=5">
				<div class="panel panel-default cate-shrink" id="cat-02">
					<div class="panel-body category-wrap">
						<div class="cate-wrapper">
							<div class="card-img-holder">
								<img src="img/card-002-featured.png"/>
								<h4 class="text-center">Fathers Day Card</h4>

							</div>
						</div>

					</div>
				</div>
			</a>
			
		</div>	
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="<?php bloginfo('url'); ?>/?cat=2">
				<div class="panel panel-default cate-shrink" id="cat-03">
					<div class="panel-body category-wrap">
						<div class="cate-wrapper">
							<div class="card-img-holder">
								<img src="img/card-003-featured.png"/>
								<h4 class="text-center">Birthday Card</h4>

							</div>
						</div>

					</div>
				</div>
			</a>
			
		</div>	
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="<?php bloginfo('url'); ?>/?cat=2">
				<div class="panel panel-default cate-shrink" id="cat-04">
					<div class="panel-body category-wrap">
						<div class="cate-wrapper">
							<div class="card-img-holder">
								<img src="img/card-004-featured.png"/>
								<h4 class="text-center">dd Card</h4>

							</div>
						</div>

					</div>
				</div>
			</a>
			
		</div>	
	</div>
</div>
<?php get_footer(); ?>
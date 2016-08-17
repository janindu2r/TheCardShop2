<?php /* Template Name: custom-search */ ?>
<?php get_header();?>
<?php
   if($_GET['search_text'] && !empty($_GET['search_text'])){
        $text = $_GET['search_text'];
   }

    if($_GET['type'] && !empty($_GET['type'])){
        $type = $_GET['type'];
    }
?>

<div class="container">
    <div class="row card-featured-wrapper">
        <h2 class="text-center">Searching for: <?php echo $text; ?> <?php echo 'in '.$type. ' category';?></h2>
    </div>
</div>
<div class="container" id="card-block">
    <div class="row">
        <?php
        $args = array(
            'post_type' => $type,
            'posts_per_page' => -1,
            's' => $text
            );
        $query = new WP_Query($args);

        if ( $query -> have_posts() ) : while ($query -> have_posts()): $query -> the_post();

        ?>
        <div class="col-sm-12 col-md-3 col-lg-3">
<!--            --><?php //if(get_post_type() == 'birthday_cards'){ echo 'Birthday';} ?>
<!--            --><?php //if(get_post_type() == 'post'){ echo 'Post';} ?>
            <div class="panel panel-default">
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

    <?php endwhile; else : ?>
        <p class="sorry-message"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
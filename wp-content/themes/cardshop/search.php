<?php /* Template Name: custom-search */ ?>
<?php get_header();?>
<?php
   if($_GET['search_text'] && !empty($_GET['search_text'])){
        $text = $_GET['search_text'];
   }

    if($_GET['type'] && !empty($_GET['type'])){
        $text = $_GET['type'];
    }
?>


    <div class="container" id="card-block">
        <div class="row">
            <?php
            $args = array(
                    'post_type' => $type,
                    'posts_per_page' => -1,
                    's' => $text
            );
            $query = new WP_Query($args);

            while ($query -> have_posts()): $query -> the_post();

            ?>
                <div class="col-md-3">
                    <?php if(get_post_type() == 'birthday_cards'){ echo 'Birthday';} ?>
                    <?php if(get_post_type() == 'post'){ echo 'Post';} ?>
                    <div class="panel panel-default card-ml-mr">
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

            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

<?php get_footer(); ?>
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
</div>
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
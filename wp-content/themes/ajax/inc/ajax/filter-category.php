<?php

add_action('wp_ajax_nopriv_filter','filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

$category =$_POST['category'];

$data = $_POST;


$args=array(
    'post_type'=> 'post',
    'posts_per_page'=>-1
);
if(!empty($category)){

    $args['category__in'] = array($category);

}

$posts = new WP_Query($args);



if($posts->have_posts()):?>
    <div class= "loop">
        <?php while ($posts->have_posts()) : $posts->the_post();?>
        <article class="loop-item">
            <?php the_title();?>
            <?php the_excerpt();?>
    </article>
    <?php endwhile;
     wp_reset_postdata();?>
    <?php endif;
   ?>
  

    </div> 
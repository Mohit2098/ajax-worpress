<?php 
// Template Name: Landing-Template

get_header();
?>
<div class="js-filter">

<?php
$args=array(
    'post_type'=> 'post',
    'posts_per_page'=>-1);
    
    
$query = new WP_Query($args);

if($query->have_posts()):?>
   
        <?php while ($query->have_posts()) : $query->the_post();?>
      
            <?php the_title();?>
            <?php the_excerpt();?>
  
    <?php endwhile;?>
    <?php endif;
    wp_reset_postdata();?>
</div>

 <div class="categories">
    <ul>
        <li class ="js-filter-item"><a href="<?= home_url();?>">ALL</a></li>
        <?php
        $cat_args = array(
            'exclude' =>array(1),
            'option_all'=>'All'
        );
        $categories = get_categories($cat_args);

        foreach($categories as $cat_args):?>

        <li class="js-filter-item"><a  data-category="<?= $cat_args->term_id?> "href="<?= get_category_link($cat_args->term_id);?>"><?= $cat_args->name;?></a></li>
        <?php endforeach; ?>
    </ul> 
</div>  
<?php get_footer();?>



</body>
</html>
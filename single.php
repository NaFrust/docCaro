<?php
get_header();

while(have_posts()){
    the_post();?>
    <div class="container bgUnico">
    <h2 class="text-center"><?php the_title()?></h2>
    <?php the_content(); ?>
    </div>
<?php }
get_footer();

?>
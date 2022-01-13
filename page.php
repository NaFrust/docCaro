<?php
get_header();
?>
<div class="container bgUnico">
<?php
while(have_posts()){
    the_post();?>    
    <h2 class="text-center"><?php the_title()?></h2>
    <div class="container">
        <?php the_content(); ?>
    </div>
    
</div>
<div class="container-fluid">
<?php }
get_footer();

?>
</div>
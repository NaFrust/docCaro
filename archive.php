<?php
get_header();
?>
<h1 class="text-center"> <?php echo str_replace('Categoría: ','',get_the_archive_title()); ;?></h1>
<p><?php the_archive_description()?></p>
<div class="container mt-3">
        <div class="row">
<?php 
while(have_posts()){
    the_post();?>
   
            <div class="col-md-4">
                <a href="<?php the_permalink();?>" class="notasCuadrado" style="background-image:url(<?php the_post_thumbnail_url() ?>);">
                    <div class="slideTituloNota"><?php the_title(); ?></div>
                </a>
            </div>


<?php }
echo paginate_links();
get_footer();
?>
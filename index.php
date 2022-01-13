<?php
get_header();
?>
<div><h1>titulo</h1></div>
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
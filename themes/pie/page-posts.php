<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pie
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
        if ( have_posts()) : ?>



    <div class="row">
        <?php
		while ( have_posts() ) :
            the_post()	;
            		
		?>

        <?php  $i=0; foreach(get_posts() as $post) : 	?>
            
        <div class="row">
        <?php   if($i<5) :	?>
            <?php if($i==0): ?>
            <div class="col-lg-6">
                <img class="img_posts" src="<?=  get_field('photo')?>"></img> 
            </div>
            <?php endif ?>
            <div class="col-lg-6">
                <div class="row">
                 <?php if($i==1): ?>
                    <div class="col-lg-6">
                        <div class="row">
                        <img class="img_posts" src="<?=  get_field('photo')?>"></img> <?php endif ?>
                        </div>
                        <?php if($i==2): ?>
                            <div class="row">
                            <img class="img_posts" src="<?=  get_field('photo')?>"></img> <?php endif ?>
                    </div>
                            </div>
                        
                    <div class="col-lg-6">
                        <?php if($i==3): ?>
                        <img class="img_posts" src="<?=  get_field('photo')?>"></img> <?php endif ?>
                        <?php if($i==4): ?>
                        <img class="img_posts" src="<?=  get_field('photo')?>"></img> <?php endif ?>
                    </div>
                </div>


            </div>
            <!-- <h2 class="titre_posts"> <?= $post->post_title	?> </h2> 
         <p class="description_posts">  <?= get_field('description')?> </p> -->


            <?php $i++; endif;  endforeach; ?>




        </div>
    </div>
    <?php  endwhile; // End of the loop. 
 endif;
 ?>

</main><!-- #main -->

<?php
/*get_sidebar();*/
get_footer();



?>
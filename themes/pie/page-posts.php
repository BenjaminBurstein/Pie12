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
    <?php if ( have_posts()) : ?>
        <?php
		while ( have_posts() ) :
            the_post()	;  		
		?>
        <?php  
        $img = []; 
        foreach(get_posts() as $post) : 
               $img[] = get_field("img");
        endforeach; ?>
        <div class="row">
           <div class="col-lg-6">
            <?php if(isset($img[0])) :  ?>
              <img src="<?= $img[0] ?>">
           <?php endif; ?>
           </div>
           <div class="col-lg-6">
           <div class="row">
                <div class="col-lg-6">
                    <?php if(isset($img[1])) :  ?>
                        <img src="<?= $img[1] ?>">
                    <?php endif; ?>
                    <?php if(isset($img[2])) :  ?>
                        <img src="<?= $img[2] ?>">
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <?php if(isset($img[3])) :  ?>
                        <img src="<?= $img[3] ?>">
                    <?php endif; ?>
                    <?php if(isset($img[4])) :  ?>
                        <img src="<?= $img[4] ?>">
                    <?php endif; ?>
                </div>
           </div>
           </div>
        </div>
    <?php endwhile; // End of the loop. 
 endif;
 ?>

</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
?>
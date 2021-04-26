
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
        <div>
        
        <?php  foreach(get_posts() as $post) : 	?>
         <h2 class="titre_posts"> <?= $post->post_title	?> </h2> 
         <p class="description_posts">  <?= get_field('description')?> </p>    
         <img class="img_posts" src="<?=  get_field('photo')?>"></img> 
         <?php  endforeach; ?> 
        

          

        </div>
</div>
 <?php   endwhile; // End of the loop. 
 endif;
 ?>
 
	</main><!-- #main -->

<?php
/*get_sidebar();*/
get_footer();



?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pie
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php //$query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );
		if(have_posts() ) :
			while (/*$the_query->*/have_posts() ) :
				the_post();
				$primaryTitle = get_the_title();
				?>
					<div>
						<div>
							<h2><?= the_title() ?></h2>
							<img src="<?= get_field("img") ?>" alt="">
							<p><?= get_field("desc") ?></p>
						</div>
					<div>
			<?php endwhile; 
			endif;?>
				<hr>
				<h2>Autre article</h2>
					<?php  
					setlocale (LC_TIME, 'fr_FR.utf8','fra');
					$nbArticle = 0;
					foreach(get_posts() as $post) : 
						if($nbArticle < 3) :
							if($post->post_title != $primaryTitle ) :  
						?>  
							<div>
								<p style="color: black;" class="date"><?= strftime("%d %B %G", strtotime($post->post_date)); ?></p>
								<img src="<?= get_field("img") ?>" alt="">
								<h3><?= the_title() ?></h3>
								<p><?= get_field("desc") ?></p>
								<a href="/<?= $post->post_name?>" ><p>Lire la suite</p></a>
							</div>	
						<?php 
							$nbArticle++;
							endif;
						endif; 
					endforeach;?>	
				</div>
			</div>
	</main>
<?php

get_footer();
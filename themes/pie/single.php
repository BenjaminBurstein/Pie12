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

		<?php
		while ( have_posts() ) :
			the_post();
			?>
				<div>
					<div>
						<h2></h2>
						<img src="" alt="">
						<p></p>
					</div>

					<hr>
					<h2>Autre article</h2>
					<div>
						<div>
							<p></p>
							<img src="" alt="">
							<h3></h3>
							<p></p>
							<a href=""><p>Lire la suite</p></a>
						</div>
						<div>
							<p></p>
							<img src="" alt="">
							<h3></h3>
							<p></p>
							<a href=""><p>Lire la suite</p></a>
						</div>
						<div>
							<p></p>
							<img src="" alt="">
							<h3></h3>
							<p></p>
							<a href=""><p>Lire la suite</p></a>
						</div>
						
					</div>
				</div>
				<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dc883addae.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="site-header">
        <div id="header-left">
            <?php the_custom_logo(); ?>
            <div id="header-left-slogan">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
            </div>
        </div>

        <ul id="header-right">

            <?php
            $items = wp_get_nav_menu_items(
                get_nav_menu_locations("main-menu")['main-menu']
            );
            foreach ($items as $menuItem) : ?>
                    <li><a href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a></li>
            <?php endforeach; ?>
            <li><a id="login-link" href=""><i class="fas fa-user"></i></a></li>
        </ul>
    </header>

	<!--<a class="skip-link screen-reader-text" href="#primary"><?php /*esc_html_e( 'Skip to content', 'pie' ); */?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
/*			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				*/?>
				<h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
				<?php
/*			else :
				*/?>
				<p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
				<?php
/*			endif;
			$pie_description = get_bloginfo( 'description', 'display' );
			if ( $pie_description || is_customize_preview() ) :
				*/?>
				<p class="site-description"><?php /*echo $pie_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */?></p>
			<?php /*endif; */?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'pie' ); */?></button>
			<?php
/*			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			*/?>
		</nav>
	</header>-->

</div>

</body>
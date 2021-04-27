<?php

// REDIRECT IF LOGIN
/*if(is_user_logged_in()) {
    wp_redirect('/profile');
}*/

$error = false;
if(isset($_POST['login_submit'])) {
    $user = wp_signon($_POST);
    if(is_wp_error($user)) {
        $error = $user->get_error_message();
    }else {
        wp_redirect('/profile');
    }
}else if(isset($_POST['register_submit'])) {
    $p = $_POST;
    if($p['user_pass'] !== $p['user_pass_confirm']) {
        $error = "Les mots de passes ne correspondent pas";
    }else {
        $user = wp_insert_user([
            'user_login' => $p['user_login'],
            'user_pass' => $p['user_password'],
            'user_email' => $p['user_email'],
            'user_registered' => date('Y-m-d H:i:s'),
            'user_url' => $p['user_url']
        ]);
        if(is_wp_error($user)) {
            $error = $user->get_error_message();
        }else {
            add_user_meta($user, 'name', $p['user_name']);
            add_user_meta($user, 'company', $p['user_company']);
            add_user_meta($user, 'country', $p['user_country']);
            add_user_meta($user, 'city', $p['user_city']);
            add_user_meta($user, 'products', $p['user_products']);
            add_user_meta($user, 'motivation', $p['user_motivation']);
            $msg = 'Vous êtes maintenant inscrit';
            $headers = 'From : '.get_option('admin_email')."\r\n";
            wp_mail($p['user_email'], 'Inscription réussie', $msg, $headers);
            $p = [];
            wp_signon($p);
            wp_redirect('/profile');
        }
    }
}

get_header();
?>

	<main id="primary" class="auth-main site-main">

        <section id="auth-img" style="background: url(<?= get_field('img_back') ?>) no-repeat; background-size: cover;"></section>

        <!--LOGIN BLOCK-->
        <section data-active="true" class="auth-block">
            <?php the_custom_logo(); ?>
            <h2 id="auth-block-title"><?php bloginfo( 'name' ); ?></h2>

            <?php if($error): ?>
                <div id="error-block">
                    <i class="fas fa-exclamation-triangle"></i> <?= $error ?>
                </div>
            <?php endif ?>

            <form class="auth-block-form" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                <div class="auth-block-form-input">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="user_login" placeholder="Email" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="user_password" placeholder="Mot de passe" required>
                </div>

                <div class="auth-block-form-remember">
                    <input type="checkbox" name="remember" id="remember" value="1">
                    Se souvenir de moi
                </div>

                <p id="auth-block-forget">mot de passe oublié ? <a href="<?= wp_lostpassword_url() ?>">Cliquez-ici</a></p>

                <button type="submit" name="login_submit">Connexion</button>

            </form>

            <p id="auth-block-type">Pas encore membre ? <span class="auth-toggle">Créer un compte</span></p>

        </section>

        <!--REGISTER BLOCK-->
        <section data-active="false" class="auth-block">
            <?php the_custom_logo(); ?>
            <h2 id="auth-block-title"><?php bloginfo( 'name' ); ?></h2>

            <?php if($error): ?>
                <div id="error-block">
                    <i class="fas fa-exclamation-triangle"></i> <?= $error ?>
                </div>
            <?php endif ?>

            <form class="auth-block-form" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

                <div class="auth-block-form-input">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_login" placeholder="Identifiant" value="<?= isset($_POST['user_login']) ? $_POST['user_login'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="user_email" placeholder="Adresse email" value="<?= isset($_POST['user_email']) ? $_POST['user_email'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="user_password" placeholder="Mot de passe" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="user_password_confirm" placeholder="Confirmer le mot de passe" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_name" placeholder="Prénom et nom du contact" value="<?= isset($_POST['user_name']) ? $_POST['user_name'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-building"></i>
                    <input type="text" name="user_company" placeholder="Nom d'entreprise" value="<?= isset($_POST['user_company']) ? $_POST['user_company'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-globe-europe"></i>
                    <input type="text" name="user_country" placeholder="Pays" value="<?= isset($_POST['user_country']) ? $_POST['user_country'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-city"></i>
                    <input type="text" name="user_city" placeholder="Pays" value="<?= isset($_POST['user_city']) ? $_POST['user_city'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fab fa-chrome"></i>
                    <input type="text" name="user_url" placeholder="Lien du site" value="<?= isset($_POST['user_url']) ? $_POST['user_url'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <i class="fas fa-list-alt"></i>
                    <input type="text" name="user_products" placeholder="Produits et services vendus" value="<?= isset($_POST['user_products']) ? $_POST['user_products'] : '' ?>" required>
                </div>

                <div class="auth-block-form-input">
                    <textarea name="user_motivation" placeholder="Pourquoi voulez vous devenir créateur d'événements ?" required><?= isset($_POST['user_motivation']) ? $_POST['user_motivation'] : '' ?></textarea>
                </div>

                <button type="submit" name="register_submit">S'inscrire</button>

            </form>

            <p id="auth-block-type">Déjà membre ? <span class="auth-toggle">Se connecter</span></p>

        </section>

	</main><!-- #main -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/pages/auth.js"></script>

<?php
/*get_sidebar();*/


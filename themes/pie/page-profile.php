<?php

get_header();
?>

	<main id="primary" class="site-main">

        <section id="profile-top">
            <h2>Nom du profil</h2>
            <div id="profile-top-counts">
                <div class="profile-top-count">
                    <p class="profile-top-count-value">
                        29/01/2021
                    </p>
                    <p class="profile-top-count-label">
                        Date de création
                    </p>
                </div>
                <div class="profile-top-count">
                    <p class="profile-top-count-value">
                        30
                    </p>
                    <p class="profile-top-count-label">
                        Événements
                    </p>
                </div>
            </div>

            <img id="profile-top-img" src="<?php echo get_template_directory_uri(); ?>/img/unknown.png" alt="#"/>
        </section>

        <section id="profile-content">
            <ul id="profile-content-nav">
                <li data-action="informations" class="active profile-content-nav-btn">
                    <i class="fas fa-info"></i>
                    Informations
                </li>
                <li data-action="events" class="profile-content-nav-btn">
                    <i class="fas fa-newspaper"></i>
                    Événements
                </li>
            </ul>

            <div data-active="true" data-type="informations" class="profile-content-menu">
                <h3>Informations de votre compte</h3>

                <h4>Contact</h4>
                <p>Téléphone: <span>+33 6 85 96 84 75</span></p>
                <p>Email: <span>test@gmail.com</span></p>

                <h4>Localisation</h4>
                <p>Adresse: <span>89 rue de la Poule</span></p>
                <p>Ville: <span>Paris</span></p>
                <p>Code Postal: <span>75000</span></p>

                <h4>Compte</h4>
                <p>Nom: <span>Nom du profil</span></p>
                <p>Mot de passe: <span>********</span></p>
                <button>Modifier</button>
            </div>

            <div data-active="false" data-type="events" class="profile-content-menu">
                <h3>Liste de vos événements</h3>

                <?php foreach (range(0,3) as $i) {?>

                <div class="event-block">
                    <img class="profile-top-img" src="<?php echo get_template_directory_uri(); ?>/img/unknown.png" alt="#"/>
                    <div class="event-infos">
                        <h4 class="event-infos-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </h4>
                        <p class="event-infos-date">
                            <i class="fas fa-calendar-alt"></i>
                            17 février 2021
                        </p>
                        <p class="event-infos-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto, asperiores assumenda ex exercitationem ipsa ipsam quisquam. Alias aspernatur atque, aut itaque iusto nihil praesentium quia quibusdam. Enim, odio.
                        </p>
                    </div>

                    <button>Modifier</button>
                </div>

                <?php } ?>

            </div>
        </section>

	</main><!-- #main -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/profile.js"></script>

<?php
/*get_sidebar();*/
get_footer();

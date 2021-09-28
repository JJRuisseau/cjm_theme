<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header class="flex justify-center">
        <div class="container flex flex-col items-center my-10 lg:my-5" x-data="{navbarOpen:false}">
            <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline mb-5" @click="navbarOpen = !navbarOpen">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-10 h-10">
                    <path x-show="!navbarOpen" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="navbarOpen" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="flex flex-col lg:inline-flex lg:flex-row lg:justify-between gap-8 items-center" :class="{'hidden':!navbarOpen, 'flex':'navbarOpen'}">
                <nav>
                <?php wp_nav_menu(array(
                    'menu_class' => 'font-body font-semibold text-sm text-bleunoir flex flex-col lg:flex-row items-center gap-6',
                    'theme_location' => 'header-menu',
                    'container' => 'false',
                    'add_li_class'  => 'lien'
                ));
                ?>
                    <!-- <ul class="font-body font-semibold text-base text-bleunoir flex flex-col lg:flex-row items-center gap-6">
                        <li class="lien"><a href="<?php echo site_url('/articles'); ?>">Articles</a></li>
                        <li class="lien"><a href="<?php echo site_url('/entretiens'); ?>">Entretiens & vidéos</a></li>
                        <li class="lien"><a href="<?php echo site_url('/dossiers'); ?>">Dossiers</a></li>
                        <li class="lien"><a href="<?php echo site_url('/evenements'); ?>">Evénements</a></li>
                        <li class="lien"><a href="<?php echo site_url('/aeropostales'); ?>">VolsLitteraires</a></li>
                        <li class="lien"><a href="<?php echo site_url('/partenaires'); ?>">Partenaires</a></li>
                        <li class="lien"><a href="<?php echo site_url('/cjm'); ?>">Cercle Jean Mermoz</a></li>
                    </ul> -->
                </nav>
                <div class="flex flex-col items-center lg:flex-row lg:items-start gap-6">
                    <!-- RECHERCHE V2 -->
                    <!-- <input class="border-2 border-bleunoir placeholder-gray-900 rounded-md text-bleunoir text-sm leading-10 px-5 py-2  max-w-full" type="text" placeholder="Rechercher..." /> -->
                    <a href="<?php echo site_url('/contact'); ?>" class="text-white font-bold transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:bg-bleunoir bg-rouge max-w-xl mx-auto py-4 px-8 rounded-xl" title="Contactez le Cercle Jean Mermoz">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION ENTETE -->

    <section class="bg-bleunoir flex flex-col items-center">
        <div class="container pt-20 pb-20 px-4 lg:flex lg:justify-center">
            <a href="<?php echo site_url(); ?>" class="flex flex-col items-center lg:flex-row lg:items-start lg:w-3/5 xl:w-2/5">
                <div class="transform hover:scale-110 delay-150 duration-700 ease-in-out"><img src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>"/></div>
                <div class="flex flex-col text-white lg:ml-5">
                    <h1 class="font-title font-semibold text-5xl flex flex-col text-center lg:text-left">Cercle<span class="font-extrabold leading-3">Jean Mermoz</span></h1>
                    <cite class="mt-8 italic font-light text-2xl text-center leading-6 lg:text-left">« Nul n’est libre dans une nation qui ne l’est plus. »</cite>
                    <p class="italic font-light text-center mt-3 lg:text-right">Régis Debray</p>
                </div>
            </a>
        </div>
    </section>

    <!-- FIN SECTION ENTETE -->

    <!-- SECTION ARTICLES -->
    <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 5
        ));
    ?>

    <section class="pt-20 pb-20 lg:pt-24">
        <div class="container mx-auto px-4 flex flex-col items-center lg:flex-row lg:items-start lg:justify-between lg:gap-6">
            <div class="flex flex-col mt-8 relative">
                <h2 class="font-title font-bold text-2xl text-center leading-6 lg:text-left relative">
                    <a href="<?php echo site_url('/articles'); ?>"><span class="text-rouge trait-titre">Derniers articles</span> du Cercle Jean Mermoz</a></h2>
                <div class="flex flex-wrap gap-4 mt-16 justify-center ">
                    <?php
                    while($homepagePosts->have_posts()) {
                        $homepagePosts->the_post(); 
                        ?>
                        <!-- h-48 w-80 box-content -->
                        <div class="rounded-xl flex flex-col items-center py-8 px-10 mb-5 text-center text-white relative h-2/5 w-full sm:w-1/2 md:w-1/2 lg:w-1/3 box-border transition delay-150 duration-300 ease-in-out transform hover:scale-105"> 
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div style="
                                    border-radius: 0.75rem;
                                    z-index:0;
                                    content:'';
                                    position:absolute;
                                    top: 0; left: 0;
                                    width: 100%; height: 100%;
                                    background: linear-gradient(rgba(20,33,68,.7), rgba(20,33,68,.6)), url(<?php the_post_thumbnail_url('large')  ?>) no-repeat; 
                                    background-size: cover; 
                                "></div>
                                </a>
                            <div class="z-10">
                                <h3 class="font-title font-bold text-3xl lg:text-xl leading-7 lg:leading-5 max-w-xs"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                <p class="bg-rouge text-sm opacity-60 py-2 px-5 rounded-lg max-w-xs mx-auto mt-3"><?php echo get_the_category_list(', ') ?></p>
                                <p class="text-sm mt-2"><?php the_time('j F Y'); ?></p>
                                <p class="text-sm">par <?php the_author_posts_link(); ?></p>
                            </div>
                        </div>
                        
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('/articles'); ?>" title="Tous les articles du Cercle Jean Mermoz" class="bg-grisnoir font-semibold text-sm py-5 px-8 text-white rounded-md max-w-lg mx-auto transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:bg-bleunoir">Tous les articles du Cercle Jean Mermoz <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
                <div class="bg-rouge rounded-xl py-12 px-10 mt-8 mb-8 text-white flex flex-col items-center md:max-w-md transition delay-150 duration-300 ease-in-out transform hover:scale-105">
                    <a href="<?php echo site_url('/cjm'); ?>" class="transform hover:scale-110 delay-150 duration-700 ease-in-out"><img width="96" height="96" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>"/></a>
                    <h2 class="font-title font-extrabold text-4xl text-center leading-9 mt-5"><a href="<?php echo site_url('/cjm'); ?>" title="Qui est le Cercle Jean Mermoz">Qui est le Cercle Jean Mermoz ?</a></h2>
                    <p class="text-center mt-3">Le cercle Jean Mermoz est un cercle d’étude et de discussion situé à Toulouse. Celui-ci a pour fondement la promotion d’un certain esprit français, alliant liberté de ton et intelligence du style, notamment  par la valorisation d'œuvres, de penseurs et d'écrivains contemporains.</p>
                    <cite class="italic font-light text-center mt-5 mb-5">« Dans la France contemporaine, où l’intelligence est surabondante, c’est le courage qui manque » - Chantal Delsol</cite>
                    <svg class="w-12" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                </div>
            
        </div>
    </section>

    <!-- FIN SECTION ARTICLES -->

    <!-- SECTION ENTRETIENS -->

    <?php 
        $homepageEntretiens = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'entretiens',
        ));
    ?>

    <section class="bg-bleunoir px-4 mt-16 flex justify-center">
        <div class="container pt-20 pb-20 flex flex-col items-center">
            <h2 class="text-white font-title font-bold text-2xl text-center leading-6 max-w-sm lien-titre"><a href="<?php echo site_url('/entretiens'); ?>">Derniers entretiens et vidéos du Cercle Jean Mermoz</a></h2>
            <div class="flex flex-wrap justify-center gap-6 mt-10 ">
                <?php
                    while($homepageEntretiens->have_posts()) {
                    $homepageEntretiens->the_post(); 
                ?> 
                    <div class="flex flex-col text-white text-center mt-5 max-w-sm transition delay-150 duration-300 ease-in-out transform hover:scale-105">
                        <div class="embed-container">
                            <?php 
                                the_field('video');
                            ?>
                        </div>
                        <h3 class="font-title font-bold text-lg mt-5"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <p class="text-sm mt-2"><?php the_time('j F Y'); ?></p>
                    </div>
                <?php 
                    } 
                ?>
            </div>
        </div>
    </section>

    <div class="flex flex-col items-center">
        <a href="<?php echo site_url('/entretiens'); ?>" title="Tous les entretiens">
            <div class="border-4 border-white -mt-5 rounded-full bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-rouge transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:text-bleunoir" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </a>
        <a href="<?php echo site_url('/entretiens'); ?>" class="text-rouge text-center hover:text-bleunoir" title="Tous les entretiens">Tous les entretiens</a>
    </div>

    <!-- FIN SECTION ENTRETIENS -->

    <!-- SECTION AERO & EVENEMENTS -->

    <?php 
        $homepageAero = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'aeropostales',
        ));

        $today = date('Ymd');
        $homepageEvent = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'evenements',
            'meta_key' => 'date',
            'orderedby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                )
            )
        ));
    ?>

    <section class="mt-24 flex justify-center">
        <div class="container px-4 flex flex-col items-center lg:flex-row lg:items-start lg:justify-around">
            <?php
                while($homepageAero->have_posts()) {
                $homepageAero->the_post();
            ?>
                <div class="flex flex-col items-center ">
                    <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center leading-6 hover:text-rouge"><a href="<?php echo site_url('/aeropostales'); ?>">L'aéropostale des lettres</a></h2>
                    <div class="mt-5 transition delay-150 duration-300 ease-in-out transform hover:scale-105">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php
                        $relatedLivres = get_field('livres'); 
                        if($relatedLivres) {
                            foreach($relatedLivres as $livre) { 
                                $featured_img_url = get_post_thumbnail_id( $livre->ID );
                                echo '<img src="'. wp_get_attachment_image_url( $featured_img_url, 'large' ) . '" />';
                                } ?>
                        <?php } ?>
                        </a>
                    </div>
                    <h3 class="font-title text-bleunoir font-bold text-lg mt-5 hover:text-rouge">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="text-bleunoir font-bold text-lg leading-3 ">par <span class="italic font-normal hover:text-rouge"><?php the_author_posts_link(); ?></span></p>
                    <a href="<?php echo site_url('/aeropostales'); ?>" class="bg-rouge p-5 transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:bg-bleunoir text-white rounded-md mt-16 max-w-sm" title="Voir toute l'aéropostale des lettres du Cercle Jean Mermoz">Voir toute l'aéropostale des lettres du Cercle Jean Mermoz <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg></a>
                </div>
            <?php
                }
            ?>
            
            <div class="flex flex-col text-bleunoir mt-16 lg:mt-0 items-center">
                <h2 class="font-title font-bold text-2xl text-grisnoir text-center leading-6 max-w-sm hover:text-rouge"><a href="<?php echo site_url('/evenements'); ?>">Prochains événements du Cercle Jean Mermoz</a></h2>
                <?php
                    while($homepageEvent->have_posts()) {
                    $homepageEvent->the_post();
                    $date = get_field('date', false, false);
                    $eventDate = new DateTime($date);
                ?>
                <a href="<?php echo site_url('/evenements'); ?>" title="Tous les événements du Cercle Jean Mermoz">
                    <div class="rounded-2xl border-2 border-bleunoir flex flex-col justify-center mt-5 pb-8 px-5 max-w-sm lg:max-w-lg items-center lg:flex-row lg:gap-4 transition delay-150 duration-300 ease-in-out transform hover:scale-110">
                        <div class="rounded-full border-4 border-rouge font-title font-black text-5xl flex flex-col text-center p-8 leading-8  justify-center mt-5"><?php echo $eventDate->format('d'); ?><span class="text-3xl"><?php echo $eventDate->format('M'); ?></span></div>
                        <div class="flex flex-col text-center items-center lg:text-left">
                            <h3 class="font-title font-bold text-3xl mt-5 leading-7 "><?php the_title(); ?></h3>
                            <p class="text-rouge text-lg mt-2 lg:text-left"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /> 
                            </svg><?php the_field('lieu');?> à <?php the_field('heure');?>h</p>
                            <p class="mt-2 lg:text-left"><?php the_content(); ?></p>
                        </div>
                    </div>
                    </a>
                <?php
                    }
                ?>
                <a href="<?php echo site_url('/evenements'); ?>" class="bg-bleunoir p-5 text-white rounded-md mt-8 max-w-sm transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:bg-rouge" title="Consulter tous les événements du Cercle Jean Mermoz">Consulter tous les événements du Cercle Jean Mermoz <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
        </div>
    </section>

    <!-- FIN SECTION AERO & EVENEMENTS -->

    <!-- SECTION DOSSIERS -->
    <?php 
        $homepageDossier = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'dossiers',
        ));
    ?>
    <section class="bg-grisnoir mt-24 flex justify-center">
        <div class="container pt-16 pb-16 px-4 flex flex-col items-center">
            <h2 class="text-white font-title font-bold text-2xl text-center leading-6 max-w-sm lien-titre"><a href="<?php echo site_url('/dossiers'); ?>">Les dossiers & conférences du Cercle Jean Mermoz</a></h2>
            <div class="flex flex-wrap items-center justify-center mt-10 gap-8">
                <?php
                    while($homepageDossier->have_posts()) {
                    $homepageDossier->the_post();
                ?>
                    <div class="flex flex-col text-white text-center max-w-sm transition delay-150 duration-300 ease-in-out transform hover:scale-110">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        
                        <h3 class="font-title font-bold text-lg mt-5"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                <?php } ?>
            </div>
            
        </div>
    </section>

    <div class="flex flex-col items-center -mt-5">
        <a href="<?php echo site_url('/dossiers'); ?>" class="text-white" title="Tous les dossiers & conférences">
            <div class="border-8 border-white rounded-full bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-grisnoir transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:text-rouge" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" /></svg>
            </div>
        </a>
        <a href="<?php echo site_url('/dossiers'); ?>" class="text-grisnoir hover:text-rouge" title="Tous les dossiers & conférences">Tous les dossiers & conférences</a>
    </div>

    <!-- FIN SECTION DOSSIERS -->

    <section class="flex justify-center mb-24">
        <div class="container pt-32 px-4 flex flex-col items-center lg:flex-row lg:justify-around lg:gap-6">
            <div class="bg-rouge rounded-2xl text-white flex flex-col items-center text-center px-4 pb-8 max-w-xl lg:px-16 transition delay-150 duration-300 ease-in-out transform hover:scale-110">
                <img class="-mt-16" width="133" height="133" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>" />
                <h2 class="font-title font-extrabold text-4xl mt-8 leading-10"><a href="<?php echo site_url('/cjm'); ?>">Vous aussi vous souhaitez contribuer, aider, participer au Cercle Jean Mermoz ?</a></h2>
                <p class="mt-5 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet posuere diam. Proin ut sem aliquet eros blandit egestas nec vitae justo. Sed vitae molestie magna.</p>
                <a href="<?php echo site_url('/cjm'); ?>" class="text-grisnoir font-extrabold font-title text-3xl bg-white max-w-lg max-auto py-3 px-6 rounded-lg">Contact <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-grisnoir inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <!-- <div class="bg-bleunoir rounded-2xl text-white flex flex-col items-center text-center mt-24 lg:mt-0 px-4 pb-8 max-w-xl lg:px-16">
                <img class="-mt-16" width="133" height="133" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>" />
                <h2 class="font-title font-extrabold text-4xl mt-8 leading-10">Restez informés des dernières nouveautés du Cercle Jean Mermoz</h2>
                <input type='email' name="courriel" placeholder="Adresse courriel" class="placeholder-gray-900 rounded-md text-bleunoir text-sm leading-10 px-5 py-2 mt-8 max-w-full">
                <label for='rgpd' class=" items-center mt-5">
                    <input type='checkbox' id="rgpd" class="form-checkbox text-rouge p-3 mr-2">
                    <span>Je confirme avoir lu, compris et accepté la politique de confidentialité du site.</span>
                </label>
                <a href="#" class="text-rouge font-bold text-xl bg-white mx-w-lg mx-auto py-4 px-8 rounded-xl mt-5 transition delay-150 duration-300 ease-in-out transform hover:scale-110">S'inscrire <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div> -->
        </div>
    </section>
    <?php get_footer(); ?>

</body>
</html>

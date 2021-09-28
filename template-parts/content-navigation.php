<header class="flex justify-center">
    <div class="container flex flex-col items-center my-10 lg:my-5" x-data="{navbarOpen:false}">
        <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline mb-5" @click="navbarOpen = !navbarOpen">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-10 h-10">
                <path x-show="!navbarOpen" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="navbarOpen" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="flex flex-col lg:inline-flex lg:flex-row lg:justify-between gap-8 items-center" :class="{'hidden':!navbarOpen, 'flex':'navbarOpen'}">
            <nav class="flex flex-col items-center lg:flex-row gap-6 ">
                <a class="transform hover:rotate-180 delay-150 duration-700 ease-in-out" href="<?php echo site_url(); ?>">
                    <img class="w-24" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>"/>
                </a>
                <?php wp_nav_menu(array(
                    'menu_class' => 'font-body font-semibold text-sm text-bleunoir flex flex-col lg:flex-row items-center gap-6',
                    'theme_location' => 'header-menu',
                    'container' => 'false',
                    'add_li_class'  => 'lien'
                ));
                ?>
                <!-- <ul class="font-body font-semibold text-sm text-bleunoir flex flex-col lg:flex-row items-center gap-6">
                    <li class="lien"><a href="<?php echo site_url('/articles'); ?>">Articles</a></li>
                    <li class="lien"><a href="<?php echo site_url('/entretiens'); ?>">Entretiens & vidéos</a></li>
                    <li class="lien"><a href="<?php echo site_url('/dossiers'); ?>">Dossiers</a></li>
                    <li class="lien"><a href="<?php echo site_url('/evenements'); ?>">Evénements</a></li>
                    <li class="lien"><a href="<?php echo site_url('/aeropostales'); ?>">VolsLitteraires</a></li>
                    <li class="lien"><a href="<?php echo site_url('/partenaires'); ?>">Partenaires</a></li>
                    <li class="lien"><a href="<?php echo site_url('/cjm'); ?>">Cercle Jean Mermoz</a></li>
                </ul> -->
            </nav>
            <div class="flex flex-col items-center lg:flex-row gap-6">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-bleunoir" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd" />
                </svg> -->
                <a href="<?php echo site_url('/contact'); ?>" class="text-white font-bold transition delay-150 duration-300 ease-in-out transform hover:scale-110 hover:bg-bleunoir bg-rouge max-w-xl mx-auto py-4 px-8 rounded-xl" title="Contactez le Cercle Jean Mermoz">Contact</a>
            </div>
        </div>
    </div>
</header>


        <footer class="bg-bleunoir text-white mt-24 flex justify-center">
            <div class="container pt-8 px-4">
                <div class="flex flex-col items-center lg:flex-row lg:gap-16 lg:justify-between">
                    <div class="flex flex-col items-center lg:flex-row lg:items-start lg:gap-6 max-w-sm">
                        <a href="<?php echo site_url(); ?>" class="transform hover:scale-110 delay-150 duration-700 ease-in-out"><img src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>" width="102" height="102"/></a>
                        <a href="<?php echo site_url(); ?>" class="flex flex-col text-white ">
                            <h1 class="font-title text-4xl flex flex-col text-center lg:text-left">Cercle<span class="font-extrabold leading-3">Jean Mermoz</span></h1>
                            <cite class="mt-5 italic font-light text-lg text-center lg:text-left">« Nul n’est libre dans une nation qui ne l’est plus. »</cite>
                            <p class="italic font-light text-center lg:text-right">Régis Debray</p>
                        </a>
                    </div>
                    <nav class="text-center mt-5 flex flex-col lg:flex-row lg:gap-8 text-sm">
                        <?php wp_nav_menu(array(
                                'menu_class' => 'flex flex-col lg:flex-wrap gap-2',
                                'theme_location' => 'footer-menu-1',
                                'container' => 'false',
                                'add_li_class'  => 'lien-footer'
                            ));
                        ?>
                        <ul>
                        <?php wp_nav_menu(array(
                                'menu_class' => 'flex flex-col lg:flex-wrap gap-2',
                                'theme_location' => 'footer-menu-2',
                                'container' => 'false',
                                'add_li_class'  => 'lien-footer'
                            ));
                        ?>
                        <ul class="text-white flex justify-center gap-2 mt-5">
                            <li class="transform hover:scale-125 delay-150 duration-700 ease-in-out ">
                                <a href="https://www.facebook.com/cerlejeanmermoz">
                                    <svg class="svg-icon h-8 w-8 " viewBox="0 0 20 20">
                                        <path fill="none" d="M11.344,5.71c0-0.73,0.074-1.122,1.199-1.122h1.502V1.871h-2.404c-2.886,0-3.903,1.36-3.903,3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l0.32-2.718h-2.724L11.344,5.71z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="transform hover:scale-125 delay-150 duration-700 ease-in-out ">
                                <a href="https://twitter.com/cercle_toulouse">
                                    <svg class="svg-icon h-8 w-8" viewBox="0 0 20 20">
                                    <path fill="none" d="M18.258,3.266c-0.693,0.405-1.46,0.698-2.277,0.857c-0.653-0.686-1.586-1.115-2.618-1.115c-1.98,0-3.586,1.581-3.586,3.53c0,0.276,0.031,0.545,0.092,0.805C6.888,7.195,4.245,5.79,2.476,3.654C2.167,4.176,1.99,4.781,1.99,5.429c0,1.224,0.633,2.305,1.596,2.938C2.999,8.349,2.445,8.19,1.961,7.925C1.96,7.94,1.96,7.954,1.96,7.97c0,1.71,1.237,3.138,2.877,3.462c-0.301,0.08-0.617,0.123-0.945,0.123c-0.23,0-0.456-0.021-0.674-0.062c0.456,1.402,1.781,2.422,3.35,2.451c-1.228,0.947-2.773,1.512-4.454,1.512c-0.291,0-0.575-0.016-0.855-0.049c1.588,1,3.473,1.586,5.498,1.586c6.598,0,10.205-5.379,10.205-10.045c0-0.153-0.003-0.305-0.01-0.456c0.7-0.499,1.308-1.12,1.789-1.827c-0.644,0.28-1.334,0.469-2.06,0.555C17.422,4.782,17.99,4.091,18.258,3.266"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="transform hover:scale-125 delay-150 duration-700 ease-in-out ">
                                <a href="https://www.youtube.com/c/CercleJeanMermoz">
                                    <svg class="svg-icon h-8 w-8" viewBox="0 0 20 20">
                                    <path fill="none" d="M9.426,7.625h0.271c0.596,0,1.079-0.48,1.079-1.073V4.808c0-0.593-0.483-1.073-1.079-1.073H9.426c-0.597,0-1.079,0.48-1.079,1.073v1.745C8.347,7.145,8.83,7.625,9.426,7.625 M9.156,4.741c0-0.222,0.182-0.402,0.404-0.402c0.225,0,0.405,0.18,0.405,0.402V6.62c0,0.222-0.181,0.402-0.405,0.402c-0.223,0-0.404-0.181-0.404-0.402V4.741z M12.126,7.625c0.539,0,1.013-0.47,1.013-0.47v0.403h0.81V3.735h-0.81v2.952c0,0-0.271,0.335-0.54,0.335c-0.271,0-0.271-0.202-0.271-0.202V3.735h-0.81v3.354C11.519,7.089,11.586,7.625,12.126,7.625 M6.254,7.559H7.2v-2.08l1.079-2.952H7.401L6.727,4.473L6.052,2.527H5.107l1.146,2.952V7.559z M11.586,12.003c-0.175,0-0.312,0.104-0.405,0.204v2.706c0.086,0.091,0.213,0.18,0.405,0.18c0.405,0,0.405-0.451,0.405-0.451v-2.188C11.991,12.453,11.924,12.003,11.586,12.003 M14.961,8.463c0,0-2.477-0.129-4.961-0.129c-2.475,0-4.96,0.129-4.96,0.129c-1.119,0-2.025,0.864-2.025,1.93c0,0-0.203,1.252-0.203,2.511c0,1.252,0.203,2.51,0.203,2.51c0,1.066,0.906,1.931,2.025,1.931c0,0,2.438,0.129,4.96,0.129c2.437,0,4.961-0.129,4.961-0.129c1.117,0,2.024-0.864,2.024-1.931c0,0,0.202-1.268,0.202-2.51c0-1.268-0.202-2.511-0.202-2.511C16.985,9.328,16.078,8.463,14.961,8.463 M7.065,10.651H6.052v5.085H5.107v-5.085H4.095V9.814h2.97V10.651z M9.628,15.736h-0.81v-0.386c0,0-0.472,0.45-1.012,0.45c-0.54,0-0.606-0.515-0.606-0.515v-3.991h0.809v3.733c0,0,0,0.193,0.271,0.193c0.27,0,0.54-0.322,0.54-0.322v-3.604h0.81V15.736z M12.801,14.771c0,0,0,1.03-0.742,1.03c-0.455,0-0.73-0.241-0.878-0.429v0.364h-0.876V9.814h0.876v1.92c0.135-0.142,0.464-0.439,0.878-0.439c0.54,0,0.742,0.45,0.742,1.03V14.771z M15.973,12.39v1.287h-1.688v0.965c0,0,0,0.451,0.405,0.451s0.405-0.451,0.405-0.451v-0.45h0.877v0.708c0,0-0.136,0.901-1.215,0.901c-1.08,0-1.282-0.901-1.282-0.901v-2.51c0,0,0-1.095,1.282-1.095S15.973,12.39,15.973,12.39 M14.69,12.003c-0.405,0-0.405,0.45-0.405,0.45v0.579h0.811v-0.579C15.096,12.453,15.096,12.003,14.69,12.003"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        </ul>
                        
                    </nav>
                    <div class="flex flex-col items-center">
                        <!-- <input type='text' name="rechercher" placeholder="Rechercher" class="rounded-md text-bleunoir text-sm leading-10 px-5 py-2 mt-8 max-w-full block">
                        <label id="courriel" class="mt-5 text-sm">S'inscrire à la lettre d'informations</label>
                        <input for="courriel" type='email' name="courriel" placeholder="Adresse courriel" class="rounded-md text-bleunoir text-sm leading-10 px-5 py-2 max-w-full block mt-3">
                        <label for='rgpd' class=" items-center mt-5 text-center max-w-xs text-xs">
                            <input type='checkbox' id="rgpd" class="form-checkbox text-rouge mr-2 ">
                            <span>Je confirme avoir lu, compris et accepté la politique de confidentialité du site.</span>
                        </label> -->
                    </div>
                </div>
                <div class="mt-24 pb-6 text-center text-xs">
                    <a href="<?php echo site_url('/mentions-legales'); ?>" class="lien-footer" title="Mentions légales du Cercle Jean Mermoz">Mentions légales</a> | Réalisé en 🇫🇷 et avec ❤️ par l'équipe du Cercle Jean Mermoz - 2021
                </div>
            </div>
        </footer>
    </body>
</html>
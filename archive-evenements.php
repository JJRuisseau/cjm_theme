<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>

<section class="bg-bleunoir flex justify-center py-24">
    <h1 class="font-title text-white font-semibold text-5xl max-w-sm leading-none text-center lien-titre">Les événements du Cercle Jean Mermoz</h1>
</section>
<section class="flex justify-center">
    <div class="container px-4 flex flex-col items-center">
        <p class="max-w-md text-center mt-16"><?php echo the_field('resume'); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac venenatis risus, nec luctus purus. Aliquam fringilla imperdiet nisi non tempus. Vivamus lectus mauris, scelerisque et elit nec, ultricies auctor elit.</p>
    </div>
</section>
<section class="flex justify-center mt-16">
    <div class="container px-4 flex flex-col items-center">
        <div>
            <?php 
                setlocale(LC_TIME, "fr_FR");
            ?>
            <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center lg:text-left">Mois de <?php echo strftime("%B %G"); ?> <a href="#" class="ml-4 bg-bleunoir px-4 py-1 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg></a></h2>
        </div>
        <p>Actuellement non fonctionnel au niveau des dates à venir</p>
        <div class="flex flex-col text-bleunoir mt-8 lg:mt-6 items-center">
            <?php

                $today = date('Ymd');
                $EventsAVenir = new WP_Query(array(
                    'paged' => get_query_var('paged', 1),
                    'post_type' => 'evenements',
                    'meta_key' => 'date',
                    'orderedby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'date',
                            'compare' => '>',
                            'value' => $today,
                            'type' => 'numeric'
                        )
                    )
                ));

                while($EventsAVenir->have_posts()) { 
                    $EventsAVenir->the_post(); 
                $date = get_field('date', false, false);
                $eventDate = new DateTime($date);
            ?>

                <div class="rounded-2xl border-2 border-bleunoir flex flex-col justify-center mt-5 pb-8 px-5 max-w-sm lg:max-w-lg items-center lg:flex-row lg:gap-4">
                    <div class="rounded-full border-4 border-rouge font-title font-black text-5xl flex flex-col text-center p-8 leading-8  justify-center mt-5"><?php echo $eventDate->format('d'); ?><span class="text-3xl"><?php echo $eventDate->format('M'); ?></span></div>
                    <div class="flex flex-col text-center items-center lg:text-left">
                        <h3 class="font-title font-bold text-3xl mt-5 leading-7 "><?php the_title(); ?></h3>
                        <p class="text-rouge text-lg mt-2 lg:text-left"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /> 
                        </svg><?php the_field('lieu');?> à <?php the_field('heure');?>h</p>
                        <p class="mt-2 lg:text-left"><?php the_content(); ?></p>
                    </div>
                </div>

            <?php
                }
            ?>
        </div>
    </div>
    
</section>
<section class="flex justify-center mb-24">
        <div class="container pt-32 px-4 flex flex-col items-center lg:flex-row lg:justify-around lg:gap-6">
            <div class="bg-rouge rounded-2xl text-white flex flex-col items-center text-center px-4 pb-8 max-w-xl lg:px-16">
                <img class="-mt-16" width="133" height="133" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>" />
                <h2 class="font-title font-extrabold text-4xl mt-8 leading-10">Vous aussi vous souhaitez contribuer, aider, participer au Cercle Jean Mermoz ?</h2>
                <a href="#" class="text-grisnoir font-extrabold font-title text-3xl bg-white max-w-lg max-auto py-3 px-6 rounded-lg mt-8">Contact <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-grisnoir inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
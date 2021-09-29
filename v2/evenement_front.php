<!-- Evenements pour le Front -->
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
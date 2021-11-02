<?php

get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<?php
    while(have_posts()) {
        the_post(); 

?>
<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex flex-col items-center text-white ">
        <h1 class="font-title  font-semibold text-5xl max-w-lg leading-none text-center"><?php the_title(); ?></h1>
        <a href="<?php echo site_url('/aeropostales'); ?>" class="font-semibold text-center mt-10 lien-titre">L'aéropostale des lettres</a>
    </div>
</section>
<section class="flex flex-col items-center justify-center">
    <div class="container px-4 flex flex-col items-center">
        <?php the_post_thumbnail('large', array('class' => 'border-4 border-white rounded-lg -mt-48')); ?>
    </div>
    <div class="bg-grisnoir rounded-3xl text-white -mt-10 py-3 px-8 flex flex-col lg:flex-row text-center items-center gap-4 w-8/12 md:w-1/3 md:justify-around">
        <p><?php the_time('j F Y'); ?> par <?php the_author_posts_link(); ?></p>
        <p class="bg-rouge text-sm opacity-60 py-2 px-5 rounded-lg max-w-xs mt-3 lg:mt-0">
            <?php echo get_the_category_list(', '); ?></p>
    </div>
</section>
<section class="flex justify-center mt-8 lg:mt-24">
    <div class="container px-8 flex flex-col lg:flex-row lg:justify-left gap-x-16">
        <div class="flex flex-col lg:items-start items-center">
            <?php
                $relatedLivres = get_field('livres'); 
                if($relatedLivres) {
                    foreach($relatedLivres as $livre) { 
                        
                        $featured_img_url = get_post_thumbnail_id( $livre->ID );
                        echo '<img src="'. wp_get_attachment_image_url( $featured_img_url, 'medium' ) . '" />';
                        
                    ?>    
                <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center lg:text-left mt-8"><?php echo $livre->post_title; ?></h2>
                <ul class="text-center lg:text-left text-sm">
                    <li> <span class='font-semibold'>
                        <?php 
                            $relatedAuteurs = get_field('auteur', $livre->ID);
                            
                            echo ($length > 2) ? "Auteurs : " : "Auteur : ";
                            echo "</span>";
                            if ($relatedAuteurs) {
                                $length = count($relatedAuteurs);
                                foreach($relatedAuteurs as $key => $auteur) {
                                    echo ($auteur->post_title);
                                    echo ($key !== count($relatedAuteurs) -1) ? ", " : "";
                                }
                            } else {
                                echo "Pas d'auteur";
                            }
                        ?>
                    </li>
                    <li><span class="font-semibold">Date parution : </span>
                        <?php echo get_field('date_parution', $livre->ID); ?>
                    </li>
                    <li><span class="font-semibold">Difficulté : </span><?php echo get_field('difficulte', $livre->ID); ?> / 5</li>
                    <li><span class="font-semibold">Note : </span><?php echo get_field('note', $livre->ID); ?> / 5</li>
                    <li><span class="font-semibold">ISBN : </span><?php echo get_field('isbn', $livre->ID); ?></li>
                    <li><span class="font-semibold">Edition : </span><?php echo get_field('edition', $livre->ID); ?></li>
                </ul>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="flex justify-center mt-8 lg:mt-0">
            <div class="text-md text-justify content-article-aero max-w-screen-lg lg:text-left">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    
</section>




<?php } ?>
<?php get_footer(); ?>
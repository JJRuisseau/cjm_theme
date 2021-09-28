<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>

<section class="bg-bleunoir flex justify-center py-24">
    <h1 class="font-title text-white font-semibold text-5xl max-w-md leading-10 text-center lien-titre">L'aéropostale des lettres</h1>
</section>

<section class="flex justify-center">
    <div class="container pt-16 pb-16 flex flex-col items-center px-4">
        <div class="flex flex-wrap justify-center gap-8">
            <?php
            
                while(have_posts()) { 
                    the_post(); 
            ?> 
                <div class="flex flex-col text-center mt-5 max-w-sm items-center transition delay-150 duration-300 ease-in-out transform hover:scale-105">
                    <div class="rounded-md">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php 
                                $relatedLivres = get_field('livres'); 
                                if($relatedLivres) {
                                    foreach($relatedLivres as $livre) { 
                                        $featured_img_url = get_post_thumbnail_id( $livre->ID );
                                        echo '<img src="'. wp_get_attachment_image_url( $featured_img_url, 'medium' ) . '" />';
                                    }
                                }
                            ?>
                        </a>
                    </div>
                        
                    <h3 class="font-title text-bleunoir font-bold text-lg mt-5 hover:text-rouge"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <p class="text-sm mt-2"><?php the_time('j F Y'); ?></p>
                    <p class="mt-2 text-sm"><?php echo excerpt(20); ?></p>
                </div>
            <?php 
                } 
            ?>
            
        </div>
        <div class="mt-10">
            <?php echo the_posts_pagination(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
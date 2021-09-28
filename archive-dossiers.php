<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>

<section class="bg-bleunoir flex justify-center py-24">
    <h1 class="font-title text-white font-semibold text-5xl max-w-md leading-10 text-center lien-titre">Les dossiers du Cercle Jean Mermoz</h1>
</section>

<section class="flex justify-center">
    <div class="container pt-16 pb-16 flex flex-col items-center px-4">
        <div class="flex flex-wrap justify-center gap-8">
            <?php
                while(have_posts()) { 
                    the_post(); 
            ?> 
                <div class="flex flex-col text-center mt-5 max-w-sm transition delay-150 duration-300 ease-in-out transform hover:scale-105">
                    <div class="rounded-md">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php 
                                the_post_thumbnail('large', array('class' => 'rounded-3xl shadow'));
                            ?>
                        </a>
                    </div>
                        
                    <h3 class="font-title text-bleunoir font-bold text-lg mt-5 hover:text-rouge"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
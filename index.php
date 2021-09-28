<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>

<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex justify-center">
        <h1 class="font-title text-white font-semibold text-5xl max-w-lg leading-10 text-center lien-titre">Les articles du Cercle Jean Mermoz</h1>
    </div>
</section>
<section class="mt-16 flex flex-col items-center justify-center">
    <div class="container flex flex-wrap justify-center px-4 gap-8">      
        <?php
        while(have_posts()) {
            the_post(); ?>
                <div class="rounded-xl flex flex-col items-center py-8 px-10 mb-5 text-center text-white relative h-2/5 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 box-border transition delay-150 duration-300 ease-in-out transform hover:scale-105"> 
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
                        <p class="text-sm">par <?php the_author_posts_link() ?></p>
                    </div>
                </div>
        <?php } ?>
        
    </div>
    <div class="mt-10">
        <?php echo the_posts_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>
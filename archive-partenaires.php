<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<section class="bg-bleunoir flex justify-center py-24">
    <h1 class="font-title text-white font-semibold text-5xl max-w-sm leading-10 text-center lien-titre">Les partenaires du Cercle Jean Mermoz</h1>
</section>
<section class="flex flex justify-center mt-24">
    <div class="flex flex-wrap justify-center container px-4 gap-12">
        <?php
            while(have_posts()) { 
                the_post(); 
                $url = get_field('url');
            ?>
            <a href="<?php echo $url; ?>" target="_blank" class="flex flex-col items-center max-w-xs transition delay-150 duration-300 ease-in-out transform hover:scale-105" title="<?php the_title(); ?>">
                    <?php 
                        $image = get_field('logo');
                        if( !empty( $image ) ): ?>
                            <img class="border-2 border-bleunoir rounded-full w-32 shadow-lg" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                    <h2 class="font-title font-bold text-2xl mt-5 leading-7 text-center mt-5 hover:text-rouge"><?php the_title(); ?></h2>
            </a>
            <?php
                }
            ?>
    </div>

</section>
<section class="flex justify-center mb-24">
    <div class="container pt-32 px-4 flex flex-col items-center lg:flex-row lg:justify-around lg:gap-6">
        <div class="bg-rouge rounded-2xl text-white flex flex-col items-center text-center px-4 pb-8 max-w-xl lg:px-16 transition delay-150 duration-300 ease-in-out transform hover:scale-105">
            <img class="-mt-16" width="133" height="133" src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>" />
            <h2 class="font-title font-extrabold text-4xl mt-8 leading-10">Vous aussi vous souhaitez contribuer, aider, participer au Cercle Jean Mermoz ?</h2>
            <a href="<?php echo site_url('/contact'); ?>" class="text-grisnoir font-extrabold font-title text-3xl bg-white max-w-lg max-auto py-3 px-6 rounded-lg mt-8">Contact <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-grisnoir inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
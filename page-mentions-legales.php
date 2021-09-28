<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex flex-col items-center text-white ">
        <h1 class="font-title  font-semibold text-5xl max-w-lg leading-10 text-center lien-titre"><?php the_title(); ?></h1>
    </div>
</section>
<section class="flex justify-center">
    <div class="container py-4 flex-col flex items-center">
        <div class="transform hover:scale-110 delay-150 duration-700 ease-in-out -mt-16">
            <img src="<?php echo get_theme_file_uri('images/cercle_jean_mermoz.svg'); ?>"/>
        </div>
    </div>
</section>
<section class="flex justify-center">
    <div class="container py-4 flex">
        <?php the_content() ?>
    </div>
    
</section>
<?php get_footer(); ?>
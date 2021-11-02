<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex flex-col items-center text-white ">
        <h1 class="font-title  font-semibold text-5xl max-w-lg leading-10 text-center lien-titre"><?php the_title(); ?></h1>
    </div>
</section>
<section class="flex justify-center mt-10">
    <div class="container py-4 flex-col items-center max-w-2xl text-justify">
        <?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>
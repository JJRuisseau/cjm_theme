<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<?php
    while(have_posts()) {
        the_post(); 
?>
<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex flex-col items-center text-white ">
        <h1 class="font-title  font-semibold text-5xl max-w-lg leading-10 text-center"><?php the_title(); ?></h1>
        <a href="<?php echo site_url('/dossiers'); ?>" class="font-semibold text-center mt-10 lien-titre">Dossiers</a>
    </div>
</section>
<div class="bg-gris h-32 py-28 w-full "></div>
<section class="flex flex-col items-center justify-center">
    <div class="container px-4 flex flex-col items-center">
        <?php the_post_thumbnail('large', array('class' => 'border-4 border-white rounded-lg -mt-48')); ?>
    </div>
</section>
<section class="flex flex-col items-center">
    <div class="container flex flex-col px-4 text-md py-8 content-article max-w-screen-lg">
        <?php the_content(); ?>
    </div>
    <div class="container px-4 flex flex-col items-center max-w-2xl">
        <div class="embed-container">
            <?php 
                the_field('video');
            ?>
        </div>
    </div>
</section>
<?php } ?>
<?php get_footer(); ?>
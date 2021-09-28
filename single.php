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
        <a href="<?php echo site_url('/articles'); ?>" class="font-semibold text-center mt-10 lien-titre">Articles</a>
    </div>
</section>
<div class="bg-gris h-32 py-28 w-full "></div>
<section class="flex flex-col items-center justify-center">
    <div class="container px-4 flex flex-col items-center">
        <?php the_post_thumbnail('large', array('class' => 'border-4 border-white rounded-lg -mt-48')); ?>
    </div>
    <div class="bg-grisnoir rounded-3xl text-white -mt-10 py-3 px-8 flex flex-col lg:flex-row text-center items-center gap-4 w-8/12 md:w-1/3 md:justify-around">
        <p><?php the_time('j F Y'); ?> par <?php the_author_posts_link(); ?></p>
        <p class="bg-rouge text-sm opacity-60 py-2 px-5 rounded-lg max-w-xs mt-3 lg:mt-0"><?php echo get_the_category_list(', '); ?></p>
    </div>
</section>
<section class="flex justify-center">
    <div class="container px-4 text-md text-center py-8 content-article max-w-screen-md">
        <?php the_content(); ?>
    </div>
</section>
<?php } ?>
<?php get_footer(); ?>
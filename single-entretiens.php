<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>
<?php
    while(have_posts()) {
        the_post(); 
?>
<section class="bg-bleunoir flex justify-center py-24">
    <div class="container px-4 flex flex-col items-center text-white ">
        <h1 class="font-title  font-semibold text-5xl max-w-xl leading-none text-center"><?php the_title(); ?></h1>
        <a href="<?php echo site_url('/entretiens'); ?>" class="font-semibold text-center mt-10 lien-titre">Entretiens</a>
    </div>
</section>
<div class="bg-gris h-32 py-28 w-full "></div>
<section class="flex flex-col items-center justify-center">
    <div class="container px-4 flex flex-col items-center -mt-40 max-w-5xl">
            <div class="embed-container">
                <?php 
                    the_field('video');
                ?>
            </div>
        </div>
    <div class="z-20 bg-grisnoir rounded-3xl text-white -mt-10 py-3 px-8 flex flex-col lg:flex-row text-center items-center gap-4 w-8/12 md:w-1/3 md:justify-around">
        <p><?php the_time('j F Y'); ?>
        
        <p class="bg-rouge text-sm opacity-60 py-2 px-5 rounded-lg max-w-xs mt-3 lg:mt-0">
            <?php echo get_the_category_list(', '); ?></p>
    </div>
</section>
<section class="flex justify-center">
    <div class="container px-4 text-md text-justify py-8 content-article max-w-screen-md">
        <?php the_content(); ?>
    </div>
</section>
<?php } ?>
<section class="flex justify-center mt-10">
    <div class="container px-4 flex flex-wrap justify-center">
    <?php  
    $relatedIntervenants = get_field('intervenants'); 
            if($relatedIntervenants) {
                foreach($relatedIntervenants as $intervenant) { ?>
                    <div class="flex flex-col items-center px-10 mt-8">
                        <?php 
                            $featured_img_url = get_post_thumbnail_id( $intervenant->ID );
                            echo '<img class="rounded-full border-2 border-rouge" src="'. wp_get_attachment_image_url( $featured_img_url, 'thumbnail' ) . '" />';
                        ?>
                        <h3 class="text-xl text-bleunoir font-title font-bold mt-3"><?php echo (get_the_title($intervenant)); ?></h3>
                        <p class="max-w-sm text-bleunoir text-center text-xs"><?php echo $intervenant->post_content; ?></p>
                    </div>
                <?php }
            } ?> 
    </div>
</section>
<?php get_footer(); ?>
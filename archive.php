<?php get_header(); 
    get_template_part('template-parts/content', 'navigation');
?>

<?php
if(is_author()) {
    $author = get_the_author();
    pageBanner(array(
        'title' => 'Contributions '
    ));
} else {
    pageBanner(array(
        'title' => get_the_archive_title()
    ));
}

?>
<section class="flex justify-center">
    <div class="container px-4 flex flex-col items-center">
    <?php
        if(is_author()) { 
            ?>
            <?php echo get_avatar( get_the_author_meta( 'ID' ), '', '', '', array('class' => 'rounded-full -mt-10 border-4 border-white')); ?>
            <p class="text-sm font-semibold mt-1 italic text-gray-700"><?php echo get_the_author_meta( 'nickname' );?></p>
    <?php    }
        ?>

    </div>
</section>
<?php if(have_posts()) { ?>
<section class="mt-16 flex flex-col items-center justify-center">
    <div class="flex flex-col items-center">
        <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center leading-6">Les articles</h2>
    </div>
    <div class="container flex flex-wrap justify-center px-4 gap-8 mt-5">  
            
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
<?php } ?>
<?php
        $homepageAero = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'aeropostales',
            'cat' => get_query_var('cat'),
            'author' => get_query_var('author')
        ));
        if($homepageAero) { ?>
<section class="flex flex-col items-center justify-center mt-16">
    <div class="flex flex-col items-center">
        <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center leading-6">L'aéropostale des lettres</h2>
    </div>
    <div class="container pt-8 pb-16 flex flex-col items-center px-4">
        <div class="flex flex-wrap justify-center gap-8">
            <?php
                
                while($homepageAero->have_posts()) { 
                    $homepageAero->the_post(); 
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
<?php } ?>
<?php
        $homepageEntretien = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'entretiens',
            'cat' => get_query_var('cat'),
            'author' => get_query_var('author')
        ));
        if($homepageEntretien) { ?>
<section class="flex flex-col items-center justify-center mt-16">
    <div class="flex flex-col items-center">
        <h2 class="font-title font-bold text-bleunoir text-2xl text-grisnoir text-center leading-6">Les entretiens</h2>
    </div>
    <div class="container pt-8 pb-16 flex flex-col items-center px-4">
        <div class="flex flex-wrap justify-center gap-8">
            <?php
                while($homepageEntretien->have_posts()) { 
                    $homepageEntretien->the_post(); 
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
<?php } ?>
<?php get_footer(); ?>
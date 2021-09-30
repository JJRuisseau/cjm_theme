<?php
function cjm_files() {
    wp_enqueue_style('cjm_main_styles', get_stylesheet_uri());
    wp_register_script('alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', array(), null, false);
    wp_enqueue_script( 'alpine' );
}

add_action('wp_enqueue_scripts', 'cjm_files');

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function pageBanner($args = NULL) {
    if(!$args['title']) {
        $args['title'] = get_the_title();
    }

    ?>
    
    <section class="bg-bleunoir flex justify-center py-24">
        <h1 class="font-title text-white font-semibold text-5xl max-w-sm leading-10 text-center lien-titre"><?php echo $args['title']; ?></h1>
    </section>

    <?php
}

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu-1' => __( 'Footer Menu 1' ),
            'footer-menu-2' => __( 'Footer Menu 2' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_theme_support( 'post-thumbnails'  );
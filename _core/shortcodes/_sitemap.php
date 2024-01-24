<?php 

function custom_sitemap_fn() {
    ob_start();

    $post_types = array('page', 'post', 'attorneys', 'in-the-news'); // specify the post types you want to include

    echo '<div class="container py-12">'; // Add container here

    foreach($post_types as $post_type ) {

        $pt = get_post_type_object( $post_type );

        echo '<h2 class="text-4xl font-bold pb-3">' . $pt->labels->name . '</h2>';
        echo '<ul class="!list-none pl-5">';
        
        $query = new WP_Query( array(
            'post_type' => $post_type,
            'posts_per_page' => -1
        ) );
        
        while( $query->have_posts() ) {
            $query->the_post();
            echo '<li class="mb-3 text-2xl"><a class="hover:underline" href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        
        wp_reset_postdata(); // reset the global $post variable
        echo '</ul>';
    }

    echo '</div>'; // Close container here

    return ob_get_clean();
}
add_shortcode('custom_sitemap', 'custom_sitemap_fn');

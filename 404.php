<?php 

use App\Template;
get_header(); ?>

<main>
   <div class="container shadow-xl shadow-orange xl:shadow-none py-6 mt-6">
       <h1 class="no-found-title font-bold text-center py-8 text-10xl">404</h1>
       <h2 class="text-center text-6xl font-libre md:text-4xl"><?php _e('OOPS! PAGE NOT FOUND', 'law'); ?></h2>
       <p class="text-2xl text-center md:text-xl"><?php _e('Sorry, the page you\'re looking for doesn\'t exist. If you think something is broken, report a problem.', 'law'); ?></p>
       <div class="flex gap-6 justify-evenly pt-12 md:flex-col items-center">
       <?php
        Template::load('_template-parts/components/button.php', [
            'link' => home_url('/'),
            'text' => __('Home Page', 'law'),
        ]); ?>
          <?php
        Template::load('_template-parts/components/button.php', [
            'link' =>  home_url('/contact-us/'),
            'text' => __('Report Problem', 'law'),
        ]); ?>
       </div>
   </div>
</main>

<?php get_footer(); ?>

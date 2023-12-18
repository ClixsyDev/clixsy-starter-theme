<?php

use App\Template;

$text_form_design_two__form_select = get_field('select_form', 'options');
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>
   <div class="mb-6 bg-headings_second bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/src/img/news-title-bg.jpg')">
      <div class="overlay">
         <div class="container pt-24 pb-12 xl:pt-12 xl:pb-6">
            <div class="blog-article__title-wrapper">
               <h1 class="font-bold  text-6xl xl:text-5xl lg:text-4xl sm:text-2xl text-white mb-3">News / Media</h1>
            </div>
         </div>
      </div>
   </div>



   <div class="py-16 lg:py-5 sm:py-0 container">
      <div class="flex gap-20 mdt:flex-wrap xl:gap-4 mdt:gap-10">
         <div class="w-14/24 lg:w-2/4 mdt:w-full">

            <div class="breadcrumbs_wrapper mb-5 lg:mb-6 sm:hidden">
               <?php if (function_exists('rw_breadcrumbs')) rw_breadcrumbs(); ?>
            </div>


            <?php if (have_posts()) : ?>
               <div class="posts flex flex-col gap-12">
                  <!-- The Loop -->
                  <?php while (have_posts()) : the_post(); ?>
                     <?php include(Template::locate('_template-parts/archive/_entry__archive--media-news.php')); ?>
                  <?php endwhile; ?>
               </div>

            <?php else : ?>
               <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>


           
            
         </div>

         <div class="form w-10/24 h-fit bg-accent px-9 py-5 lg:w-2/4 lg:py-9  mdt:max-h-full mdt:w-full xs:p-6 form_elements_design_one">
            <div class="text-white uppercase font-thin text-xl 2xl:!text-[20px] mdt:!pb-3 xl:!text-lg xs:!text-base">Big Accident? Big Injuries? Big</div>
            <h3 class="text-white font-bold font-second uppercase leading-[1] pb-5 text-6xl 2xl:!text-[50px] xs:!text-3xl">You Need Big Auto.</h3>

            <?php if ($text_form_design_two__form_select && $text_form_design_two__form_select[0]) { ?>
               <?php echo do_shortcode('[contact-form-7 id="' . $text_form_design_two__form_select[0] . '"]'); ?>
            <?php } ?>

            <div class="text-white sm:text-base">
               By clicking “submit” a visitor understands and agrees that sending information to the firm will not create an attorney/client relationship and may not be kept confidential. Information sent through this link will be used to check for conflicts and schedule a consultation. An attorney-client relationship is formed only when both a potential client and a lawyer with the firm both sign a fee agreement. By submitting your contact information, you agree that we may contact you by telephone (including text) and email in accordance with our Terms and <a class="link-white" href="https://bigauto.local/privacy-policy/">Privacy Policy</a>.
            </div>
         </div>
      </div>
      <?php $count_posts = wp_count_posts();
            $published_posts = $count_posts->publish;

            if ($published_posts > get_query_var('posts_per_page')) { ?>
               <div class="flex w-full justify-center py-12">
                  <?php if (function_exists("pagination")) {
                     pagination();
                  } ?>
               </div>
            <?php } ?>
   </div>
</main>

<?php get_footer(); ?>
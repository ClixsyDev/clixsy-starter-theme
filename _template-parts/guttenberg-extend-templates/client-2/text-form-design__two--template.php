<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
  echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
  return;
} else {
  $text_form_design_two__subtitle = get_field('text_form_design_two__subtitle');
  $text_form_design_two__title = get_field('text_form_design_two__title');
  $text_form_design_two__main_content = get_field('text_form_design_two__main_content');
  $text_form_design_two__form_description = get_field('text_form_design_two__form_description');
  $text_form_design_two__form_title = get_field('text_form_design_two__form_title');
  $text_form_design_two__form_select = get_field('select_form', 'options');
  $text_form_design_two__button = get_field('text_form_design_two__button');
  $text_form_design_two__disclaimer = get_field('text_form_design_two__disclaimer'); ?>

  <!-- text-form-design__two--template.php -->
  <?php if ($text_form_design_two__main_content) { ?>
    <section class="py-16 xs:py-5 container" id="values-and-family-section">
      <div class="fixedHeightContainer flex gap-10 mdt:flex-wrap-reverse xl:gap-4 mdt:gap-10">
        <div class="w-18/24 lg:w-2/4 mdt:w-full">
          <div class="pb-8 relative px-11 py-7 h-full bg-white drop-shadow-lg xs:p-6  ">
            <?php if ($text_form_design_two__subtitle) { ?>
              <h2 class="heading_h2 uppercase text-black font-second font-thin text-4xl text-left mdt:pb-3 xs:!text-3xl"><?php echo $text_form_design_two__subtitle ?></h2>
            <?php } ?>
            <?php if ($text_form_design_two__title) { ?>
              <h3 class="heading_h2 uppercase text-black text-6xl text-left pb-3 lg:!text-5xl lg:leading-none xs:!text-4xl"><?php echo $text_form_design_two__title ?></h3>
            <?php } ?>
            <?php if ($text_form_design_two__main_content) {
              $content_len =  strlen(strip_tags($text_form_design_two__main_content));
            ?>
              <div class="pb-5 prose-lg max-w-full">
                <div class="fixedHeight mb-5 relative" >
                  <?php if ($text_form_design_two__main_content) { ?>
                    <div class="innerContentHeight">
                      <?php echo $text_form_design_two__main_content ?>
                    </div>
                  <?php } ?>
                </div>
                <?php //if ($content_len > 1170) { 
                ?>
<!--                 <p class="toggleFixedHeight cursor-pointer hidden">Read more...</p>
                <?php //}  -->
                ?>
              </div>
            <?php } ?>

          </div>
        </div>
        <div class="form w-10/24 bg-accent px-9 py-5 lg:w-2/4 lg:py-9  mdt:max-h-full mdt:w-full xs:p-6 form_elements_design_one">
          <?php if ($text_form_design_two__form_description) { ?>
            <div class="text-white uppercase font-thin text-xl 2xl:!text-[20px] mdt:!pb-3 xl:!text-lg xs:!text-base"><?php echo $text_form_design_two__form_description ?></div>
          <?php } ?>
          <?php if ($text_form_design_two__form_title) { ?>
            <h3 class="text-white font-bold font-second uppercase leading-[1] pb-5 text-6xl 2xl:!text-[50px] xs:!text-3xl"><?php echo $text_form_design_two__form_title ?></h3>
          <?php } ?>
          <?php if ($text_form_design_two__form_select && $text_form_design_two__form_select[0]) { ?>
            <?php echo do_shortcode('[contact-form-7 id="' . $text_form_design_two__form_select[0] . '"]'); ?>
          <?php } ?>
          <?php
          Template::load('_template-parts/components/thank-you-message-homepage.php', [
            'classes_disclaimer' => 'text-white',
            'classes_thankyou' => 'text-white'
          ]); ?>
          <?php if ($text_form_design_two__disclaimer) { ?>
            <div class="text-white sm:text-base"><?php echo $text_form_design_two__disclaimer ?></div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

<?php
  if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
}

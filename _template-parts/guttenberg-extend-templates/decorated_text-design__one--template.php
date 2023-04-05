<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $decorated_text_design_one__title = get_field('decorated_text_design_one__title');
    $decorated_text_design_one__button = get_field('decorated_text_design_one__button');
    $decorated_text_design_one__description = get_field('decorated_text_design_one__description');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options'); ?>

    <div class="container -mt-24">
        <div class="w-full bg-headings">
            <?php if ($decorated_text_design_one__title) { ?>
                <div class=" text-white text-5xl xl:text-4xl lg:text-3xl md:text-2xl text-center relative pb-16 pt-28 md:pt-16 md:pb-4">
                    <h2 class="font-bold process_text_design__one"><?php echo $decorated_text_design_one__title ?></h2>
                    <span class="bg-accent w-32 h-1 absolute left-0 right-0 mx-auto"></span>
                </div>
            <?php } ?>

            <?php if ($decorated_text_design_one__description || $decorated_text_design_one__after_description) { ?>
                <div class="w-[820px] xl:w-full mx-auto text-white pb-16 xl:px-16 mdt:px-10">
                    <div class="prose-xl">
                        <?php echo $decorated_text_design_one__description ?>
                    </div>
                    <div class="text-4xl 2xl:text-3xl md:text-2xl">
                        <?php if ($phone && $phone_link) { ?>
                            <p>To learn more about your rights after an accident, <strong>call us today at</strong> <a href="tel:<?php echo $phone_link ?>"><strong><?php echo $phone ?></strong></a></p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ($decorated_text_design_one__button) { ?>
                <div class="w-full flex justify-center pb-16">
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $decorated_text_design_one__button['url'],
                        'text' => __($decorated_text_design_one__button['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'uppercase max-w-[460px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';

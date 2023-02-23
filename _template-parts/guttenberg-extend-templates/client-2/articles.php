<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $articles_title = get_field('articles_title');
    $articles_link = get_field('articles_link'); ?>

    <section class="pt-12 pb-16">
        <div class="container">
            <?php if ($articles_title) { ?>
                <h2 class="heading_h2 font-third text-black font-bold text-6xl pb-12 capitalize md:!text-5xl md:leading-10">
                    <?= $articles_title ?>
                </h2>
            <?php } ?>
            <div class="grid grid-cols-3 gap-9 mb-11 2xl:gap-y-32 lg:!grid-cols-2 sm:!grid-cols-1 sm:gap-0 lg:gap-5 sm:!mb-5">
                <?php
                $posts = get_posts(array(
                    'numberposts' => 3,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                ));
                $case_items = array();
                foreach ($posts as $item) { ?>
                    <article class="group h-full relative sm:w-full">
                        <a class="min-h-[500px] lg:min-h-auto xl:min-h-full lg:p-14 sm:p-5" href="<?= get_permalink($item) ?>">
                            <?php echo get_the_post_thumbnail($item->ID, 'full', ['class' => 'w-full']) ?>
                            <div class="z-30 w-full max-w-[830px]">
                                <div class="text-accent font-second text-2xl leading-tight mt-3 mb-2 sm:!text-xl">
                                    <?php echo get_the_title($item -> ID); ?>
                                </div>
                                <?php $cat = get_the_category($item -> ID); ?>
                                <div class="font-main mb-3 text-black text-lg uppercase lg:!text-lg sm:!text-base">
                                    <span><?php echo $cat[0]->name ?></span>
                                    <span>| <?php echo get_the_date('F d, Y') ?></span>
                                </div>
                                <div class="font-libre text-2xl text-black mb-2 mr-9 lg:!text-lg sm:mr-0 sm:!text-base">
                                    <?php echo get_the_excerpt($item->ID) ?>
                                </div>
                                <div class="chevron_link absolute right-4 bottom-4 hidden group-hover:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                        <path class="fill-accent" id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,21.875a18.5,18.5,0,1,0,18.5-18.5A18.5,18.5,0,0,0,3.375,21.875Zm21.746,0-7.284-7.213a1.717,1.717,0,0,1,2.428-2.428l8.485,8.512a1.715,1.715,0,0,1,.053,2.366L20.443,31.5a1.714,1.714,0,1,1-2.428-2.419Z" transform="translate(-3.375 -3.375)" fill="#25dd7e" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php } ?>
            </div>
            <?php if ($articles_link) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $articles_link['url'],
                    'text' => __($articles_link['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'btn-medium transparent hover_accent m-auto uppercase lg:m-auto ', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';

<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $page_select_design_one__title = get_field('page_select_design_one__title');
    $page_select_design_one__select_pages = get_field('page_select_design_one__select_pages');
    $page_select_design_one__disable_title = get_field('page_select_design_one__disable_title');
    $page_select_design_one__disable_description = get_field('page_select_design_one__disable_description');
    $page_select_design_one__disable_date = get_field('page_select_design_one__disable_date');

?>
<!-- page_select-design__one--template.php -->
    <div class="container py-10 lg:py-6">
        <?php if ($page_select_design_one__title) { ?>
            <h1 class="heading_default_color mb-4 text-center"><?php echo $page_select_design_one__title ?></h1>
        <?php } ?>
        <span class="hidden grid-cols-3 md:grid-cols-2 sm:grid-cols-1"></span>
        <div class="grid <?php echo count($page_select_design_one__select_pages) < 3 ? 'grid-cols-' . count($page_select_design_one__select_pages)  : 'grid-cols-3 ' ?> lg:grid-cols-1 gap-[30px] ">
            <?php if (!empty($page_select_design_one__select_pages)) { ?>

                <!-- The Loop -->
                <?php foreach ($page_select_design_one__select_pages as $selected_post) { ?>
                    <?php $thumbnail = get_the_post_thumbnail_url($selected_post, 'full');
                    $thumbnail_placeholder = get_stylesheet_directory_uri() . '/_assets_child/src/img/placeholder.jpg'; ?>
                    <article class="h-full">
                        <a class="relative group min-h-[300px] h-full flex bg-cover items-end" style="background-image: url(<?php echo $thumbnail ?: $thumbnail_placeholder ?>);" href="<?= get_permalink($selected_post) ?>">
                            <div class="bg-black bg-opacity-60 absolute z-20 w-full h-full top-0 left-0"></div>
                            <div class="relative z-30 mx-4 w-full group">
                                <?php if (!$page_select_design_one__disable_title) { ?>
                                    <div class="text-white font-second text-3xl leading-tight mb-3 ">
                                        <?php echo get_the_title($selected_post); ?>
                                    </div>
                                <?php } ?>
                                <?php if (!$page_select_design_one__disable_description) { ?>
                                    <div class="font-libre group-hover:opacity-100 opacity-0 pt-[10px] pr-[10px] text-white text-base mb-2 mr-9">
                                        <?php echo get_the_excerpt($selected_post) ?>
                                    </div>
                                <?php } ?>
                                <?php if (!$page_select_design_one__disable_date) { ?>
                                    <div class="font-libre text-sm mb-2.5" style="color: #c5c5c5;">
                                        <?php echo get_the_date('F d, Y', $selected_post) ?>
                                    </div>
                                <?php } ?>
                                <div class="chevron_link absolute right-2 bottom-2 hidden group-hover:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                        <path class="fill-accent" id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,21.875a18.5,18.5,0,1,0,18.5-18.5A18.5,18.5,0,0,0,3.375,21.875Zm21.746,0-7.284-7.213a1.717,1.717,0,0,1,2.428-2.428l8.485,8.512a1.715,1.715,0,0,1,.053,2.366L20.443,31.5a1.714,1.714,0,1,1-2.428-2.419Z" transform="translate(-3.375 -3.375)" fill="#25dd7e" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </article>
            <?php }
            } ?>
        </div>

    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';

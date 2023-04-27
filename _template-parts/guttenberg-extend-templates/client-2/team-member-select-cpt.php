<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $page_select_design_two__select_pages = get_field('page_select_design_two__select_pages');
?>
    <!-- page_select-design__two--template.php -->
    <div class="container py-10 lg:py-6">

        <div class="grid <?php echo count($page_select_design_two__select_pages) < 3 ? 'grid-cols-' . count($page_select_design_two__select_pages)  : 'grid-cols-4 ' ?> 2xl:!grid-cols-3 lg:!grid-cols-2 md:!grid-cols-1 gap-[30px] ">
            <?php if (!empty($page_select_design_two__select_pages)) { ?>

                <!-- The Loop -->
                <?php foreach ($page_select_design_two__select_pages as $selected_post) { ?>
                    <?php $thumbnail = get_the_post_thumbnail_url($selected_post, 'full');
                    $thumbnail_placeholder = get_stylesheet_directory_uri() . '/_assets_child/src/img/placeholder.jpg';
                    ?>
                    <article class="h-full max-w-[1140px] w-full m-auto lg:flex lg:flex-col lg:items-center">
                        <a class="relative group h-80 w-80 flex bg-cover items-end shadow-siteWide lg:mb-5" style="background-image: url(<?php echo $thumbnail ?: $thumbnail_placeholder ?>);" href="<?= get_permalink($selected_post) ?>">
                        </a>
                        <a href="<?= get_permalink($selected_post) ?>">
                            <div class=" text-black font-third font-normal text-3xl leading-tight ">
                                <?php echo get_the_title($selected_post); ?>
                            </div>
                            <div class="font-main text-[17px]">
                                <?php echo get_the_excerpt($selected_post) ?>
                            </div>
                        </a>


                    </article>
            <?php }
            } ?>
        </div>

    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';

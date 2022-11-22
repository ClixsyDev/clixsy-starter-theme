<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'cases_we_handle';
    $title = get_field($key . '_title');
    $cases = get_field($key . '_items');
    $button1 = get_field($key . '_button_1');
    $button2 = get_field($key . '_button_2');
    $case_items = get_field('cases_we_handle_case_items');
    $block_bg = get_field($key . '_block_bg');
?>
    <!-- cases-we-handle.php -->
    <div class="bg-headings pt-14 pb-16" style="background-color: <?php echo $block_bg ?: ''  ?> ;">
        <div class="container">
            <?php if ($title) { ?>
                <h2 class="heading_h2 white pb-5 capitalize">
                    <?= $title ?>
                </h2>
            <?php } ?>
            <hr class="bg-accent border-none mx-auto h-1 w-[124px] max-w-full mb-6">
            <div class="flex gap-14 mt-14 mdt:flex-wrap mdt:justify-center md:gap-6">
                <?php
                if (!$case_items) {
                    $posts = get_posts(array(
                        'numberposts'   => 4,
                        'post_type'     => 'page',
                        'meta_key'      => 'page_case_type_is_case_type',
                        'meta_value'    => true,
                        'exclude'      => get_the_ID(),
                    ));
                    $case_items = array();
                    foreach ($posts as $post_item) {
                        $case_items[] = $post_item->ID;
                    }
                }
                foreach ($case_items as $item) {
                    $key = 'page_case_type';
                    $case_title = get_field($key . '_case_title', $item);
                    $case_description = get_field($key . '_case_description', $item);
                ?>
                    <a href="<?= get_permalink($item) ?>" class="flex-1 group flex flex-col items-center mdt:w-[250px] mdt:flex-none ">
                        <span class="relative">
                            <?php echo get_the_post_thumbnail($item, 'full', ['class' => 'object-cover h-60 w-full']) ?>
                            <?php if ($case_description) { ?>
                                <span class="group-hover:opacity-100 opacity-0 transition-all  px-2 text-sm py-3 absolute bottom-0 left-0 bg-white bg-opacity-75 flex gap-2 items-center w-full">
                                    <span><?= $case_description ?></span>
                                    <span class="text-accent text-xl">➙</span>
                                </span>
                            <?php } ?>
                        </span>
                        <div class="font-main font-bold text-2xl text-white group-hover:text-accent "><?= $case_title ?></div>
                    </a>
                <?php } ?>
            </div>
            <div class=" mt-11 flex justify-center gap-11 md:flex-col md:items-center md:gap-4">
                <?php if ($button1) { ?>
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $button1['url'],
                        'text' => __($button1['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'btn_xl hover_outline_white white uppercase max-w-[470px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                <?php } ?>
                <?php if ($button2) { ?>
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $button2['url'],
                        'text' => __($button2['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'btn_xl hover_accent uppercase max-w-[470px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';

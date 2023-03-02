<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'cases_we_handle_two';
    $title = get_field($key . '_title');
    $cases = get_field($key . '_items');
    $case_items = get_field($key . '_case_items');
    $block_bg = get_field($key . '_block_bg');
    $button1 = get_field($key . '_button_1');
    $button2 = get_field($key . '_button_2');
    $button_size = get_field($key . '_button_size');
?>
    <!-- cases-we-handle-design__two.php -->
    <div class="pt-14 pb-16">
        <?php if ($title) { ?>
            <h2 class="heading_h2 text-black font-bold text-6xl pb-20 capitalize md:!text-5xl md:leading-10">
                <?= $title ?>
            </h2>
        <?php } ?>
        <div class="pb-12 rounded-md m-auto max-w-[1720px]" style="background-color: <?php echo $block_bg ?: ''  ?> ;">
            <div class="container">
                <div class="flex gap-11 mt-14 2xl:flex-wrap 2xl:gap-y-32 mdt:justify-center">
                    <?php
                    if (!$case_items) {
                        $posts = get_posts(array(
                            'numberposts'   => 5,
                            'post_type'     => 'page',
                            'meta_key'      => 'page_case_type_is_case_type',
                            'meta_value'    => true,
                            'orderby'       => 'menu_order',
                            'exclude'       => get_the_ID(),
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
                        <a href="<?= get_permalink($item) ?>" class="flex-1 group flex flex-col items-center -mt-20 mdt:w-[250px] mdt:flex-none">
                            <span class="relative">
                                <?php echo get_the_post_thumbnail($item, 'full', ['class' => 'w-full max-w-[240px] object-cover rounded-md h-40 2xl:!w-max 2xl:m-auto']) ?>
                                <?php if ($case_description) { ?>
                                    <span class="group-hover:opacity-100 rounded-md opacity-0 transition-all  px-2 text-sm py-3 absolute bottom-0 left-0 bg-white bg-opacity-75 flex gap-2 items-center w-full">
                                        <span><?= $case_description ?></span>
                                        <span class="text-accent text-xl">➙</span>
                                    </span>
                                <?php } ?>
                            </span>
                            <?php if ($case_title) { ?>
                                <div class="btn-accident bg-white border-2 border-solid border-headings leading-none"><?= $case_title ?></div>
                            <?php } ?>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class=" mt-11 flex justify-center gap-11 md:flex-col md:items-center md:gap-4 md:w-full ">
            <?php if ($button1) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $$button1['url'],
                    'text' => __($button1['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'btn_sm bigauto_red !border-button_color hover:!border-accent hover_accent  !max-w-[460px] rounded-xl xs:!text-xl md:w-4/5', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
            <?php if ($button2) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $$button2['url'],
                    'text' => __($button2['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'btn_sm bg-white !text-button_color hover:!text-white !border-button_color hover:!border-accent hover_accent !max-w-[460px] rounded-xl xs:!text-xl md:w-4/5', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
        </div>
    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';

<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $main_verdict = get_field('main_verdict');
    $all_verdicts = get_field('all_verdicts');
?>
    <div class="grid grid-cols-12 gap-[30px]">
        <?php if ($main_verdict) { ?>
            <div class="col-span-12 shadow-siteWide">
                <div class="bg-bg_second p-4">
                    <h6 class="text-white text-3xl font-semibold uppercase text-center"><?php echo $main_verdict[0]->post_title ?></h6>
                </div>
                <div class=" p-3 text-xl text-center">
                    <?php echo $main_verdict[0]->post_content ?>
                </div>
            </div>
        <?php } ?>

        <?php if ($all_verdicts) {
            foreach ($all_verdicts as $verdict_item) { ?>
                <div class="col-span-4 lg:col-span-6 sm:col-span-12 shadow-siteWide">
                    <div class="bg-bg_second p-4">
                        <h6 class="text-white text-xl font-semibold uppercase text-center"><?php echo $verdict_item->post_title ?></h6>
                    </div>
                    <div class="p-3 text-lg text-center">
                        <?php echo $verdict_item->post_content ?>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
<?php }

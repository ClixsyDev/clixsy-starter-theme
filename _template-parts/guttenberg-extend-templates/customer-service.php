<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'customer_service';
    $bg_image = get_field($key . '_background_image');
    $title = get_field($key . '_title');
    $company_logo = get_field($key . '_company_logo');
    $services = get_field($key . '_services');
?>
    <div class="relative bg-cover lg:bg-contain lg:bg-repeat" style="background-image: url('<?php echo  wp_get_attachment_image_url($bg_image) ?: ''  ?>');">
        <div class="container relative pt-20 pb-10">
            <?php if ($title) { ?>
                <h2 class="heading_h2 relative pb-5 mb-16 max-w-[950px] mx-auto before:block before:absolute before:bg-accent before:left-1/2 before:w-40 before:h-1 before:bottom-0 before:-translate-x-1/2">
                    <?= $title ?>
                </h2>
            <?php } ?>
            <div class="flex relative mdt:flex-col mdt:justify-center mdt:items-center mdt:gap-5">
                <?php
                $i = 0;
                if ($services) {
                    foreach ($services as $service) {
                        $class = $i == 1 ? 'relative before:block before:absolute before:-translate-y-1/2 before:w-[1px] before:h-[65px] before:bg-white before:left-0 before:top-1/2
                        after:block after:absolute after:-translate-y-1/2 after:w-[1px] after:h-[65px] after:bg-white after:right-0 after:top-1/2' : '';
                        ?>
                        <div class="flex-1 flex flex-col justify-center items-center mdt:max-w-[400px]">
                            <div class="rounded-full bg-white w-[200px] h-[200px] p-10 flex justify-center items-center mb-3">
                                <img src="<?= wp_get_attachment_image_url($service['customer_service_service_logo'], 'full') ?>" alt="">
                            </div>
                            <div class=" text-3xl leading-tight text-center mb-3"><?= $service['customer_service_service_title'] ?></div>
                            <div class=" bg-headings text-white px-7 py-5 h-[117px] flex text-center items-center
                            <?= $class ?>">
                                <?= $service['customer_service_service_description'] ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
            <img class=" mt-11 mx-auto" src="<?= wp_get_attachment_image_url($company_logo, 'full') ?>" alt="">
        </div>
    </div>
</div>
<?php }
if (!get_fields()) echo 'Fill block with content';

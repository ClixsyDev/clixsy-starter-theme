<?php
$fields = get_fields();
?>
<div class="relative">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/verdicts_bg.svg" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
    <div class="container relative pt-20 pb-10">
        <h2 class="font-bold relative text-headings_second pb-5 mb-16 text-center text-5xl leading-tight max-w-[950px] mx-auto before:block before:absolute before:bg-accent before:left-1/2 before:w-40 before:h-1 before:bottom-0 before:-translate-x-1/2
            mdt:text-4xl md:text-2xl">
            <?= $fields['title'] ?>
        </h2>
        <div class="flex relative mdt:flex-col mdt:justify-center mdt:items-center mdt:gap-5">
            <?php
            $i = 0;
            foreach ($fields['services'] as $service) {
                $class = $i == 1 ? 'relative before:block before:absolute before:-translate-y-1/2 before:w-[1px] before:h-[65px] before:bg-white before:left-0 before:top-1/2
                after:block after:absolute after:-translate-y-1/2 after:w-[1px] after:h-[65px] after:bg-white after:right-0 after:top-1/2' : '';
            ?>
                <div class="flex-1 flex flex-col justify-center items-center mdt:max-w-[400px]">
                    <div class="rounded-full bg-white w-[200px] h-[200px] p-10 flex justify-center items-center mb-3">
                        <img src="<?= wp_get_attachment_image_url($service['service_logo'], 'full') ?>" alt="">
                    </div>
                    <div class=" text-3xl leading-tight text-center mb-3"><?= $service['service_title'] ?></div>
                    <div class=" bg-headings text-white px-7 py-5 h-[117px] flex text-center items-center
                        <?= $class ?>">
                        <?= $service['Service Description'] ?>
                    </div>
                </div>
            <?php
            $i++;
            }
            ?>
        </div>
        <img class=" mt-11 mx-auto" src="<?= wp_get_attachment_image_url($fields['company_logo'], 'full') ?>" alt="">
    </div>
</div>
<?php 
if (!get_fields()) echo 'Fill block with content';
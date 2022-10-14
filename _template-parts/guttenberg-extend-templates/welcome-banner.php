<?php 
$fields = get_fields();
?>
<div class="welcome_banner relative h-[780px] 2xl:h-[560px] mdt:h-auto">
    <img src="<?= wp_get_attachment_image_url( $fields['background_image'], 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
    <div class="container relative z-10 flex flex-col h-full justify-center items-end relative mdt:items-center mdt:py-4">
        <div class="flex flex-col items-center">
            <div class="flex flex-col mb-16 items-center text-headings_second lg:mb-10 lg:px-3">
                <div class="relative text-3xl leading-tight 
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20">
                    <?= $fields['banner_text_line_1'] ?>
                </div>
                <div class=" text-[150px] leading-none my-3 xl:text-[100px] md:text-6xl">
                    <?= $fields['banner_text_line_2'] ?>
                </div>
                <div class="relative text-3xl leading-tight
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20">
                    <?= $fields['banner_text_line_3'] ?>
                </div>
            </div>
            <a href="<?= $fields['button_url'] ?>" class=" h-[75px] px-14 flex justify-center items-center bg-accent rounded-full text-4xl leading-none text-white uppercase xl:text-3xl md:text-2xl">
                <?= $fields['button_text'] ?>
            </a>
        </div>
    </div>
    <img src="<?= wp_get_attachment_image_url( $fields['attorney_image'], 'full') ?>" class="absolute left-1/2 bottom-0 w-full h-full object-cover max-w-[1920px] mx-auto -translate-x-1/2 mdt:relative mdt:translate-0 mdt:mt-4" alt="">
</div>
<?php 
$fields = get_fields();
?>
<div class="relative py-16 xs:py-4">
    <div class="container p-0 overflow-hidden">
        <h2 class="text-headings_second font-medium text-4xl text-center leading-tight pb-4"><?= $fields['title'] ?></h2>
        <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
        <div class="flex flex-col gap-12 mt-11">
            <div class="step-block overflow-hidden top relative flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-4 md:pb-16 xs:gap-10">
                <span class="absolute skew-y-2 bg-process_smoke w-full h-[120%] -top-[30%] z-[-1]"></span>
                <div class="max-w-[170px] xs:max-w-[80px]">
                    <img src="<?= wp_get_attachment_image_url( $fields['step_1_icon'], 'full') ?>" class="" alt="">
                </div>
                <div>
                    <h3 class="font-noto_serif text-accent text-6xl lg:text-5xl xs:text-4xl">Step 01</h3>
                    <p class="font-avenir text-kennyGrayText text-4xl py-3 lg:text-3xl md:text-2xl xs:text-xl"><?= $fields['step_1_text'] ?></p>
                    <p class="font-avenir text-kennyGrayText font-bold text-3xl pb-5 lg:text-2xl md:text-xl xs:text-2xl"><?= $fields['step_1_phone'] ?></p>
                    <a href="tel:<?= $fields['step_1_phone'] ?>" class="font-avenir bg-accent text-white font-bold text-base py-2 px-7 rounded-full lg:uppercase xs:text-xl">Call Now</a>
                </div>
                <div class="triangle absolute bottom-[6%] m-auto lg:top-[95%] md:top-[92%]"></div>
            </div>
            <div class="step-block relative flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-4 md:pb-16 xs:gap-10"">
                <div>
                    <h3 class="font-noto_serif text-headings_second text-6xl text-end lg:text-5xl xs:text-4xl">Step 02</h3>
                    <p class="font-avenir text-accent text-4xl py-3 text-right lg:text-3xl md:text-2xl xs:text-xl"><?= $fields['step_2_text'] ?></p>
                </div>
                <div class="max-w-[170px] xs:max-w-[80px]">
                    <img src="<?= wp_get_attachment_image_url( $fields['step_2_icon'], 'full') ?>" class="" alt="">
                </div>
                <div class="triangle white absolute top-[96%] m-auto"></div>
            </div>
            <div class="step-block bg-process_smoke relative bottom flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-12 md:pb-16 xs:gap-10">
                <span class="absolute skew-y-2 bg-process_smoke w-full h-full -top-[10%] z-[-1]"></span>
                <div class="max-w-[170px] xs:max-w-[80px]">
                    <img src="<?= wp_get_attachment_image_url( $fields['step_3_icon'], 'full') ?>" class="" alt="">
                </div>
                <div>
                    <h3 class="font-noto_serif text-accent text-6xl lg:text-5xl xs:text-4xl">Step 03</h3>
                    <p class="font-avenir text-kennyGrayText text-4xl py-3 lg:text-3xl md:text-2xl xs:text-xl"><?= $fields['step_3_text'] ?></p>
                </div>
                <div class="triangle absolute top-[95%] m-auto lg:top-[98%]"></div>
            </div>
        </div>
        <div class="text-center my-16 xs:my-10">
            <a href="<?= $fields['start_btn_url'] ?>" class="uppercase font-avenir bg-accent text-white font-bold text-2xl py-2 px-16 rounded-full md:text-base md:px-10 xs:text-2xl"><?= $fields['start_btn_text'] ?></a>
        </div>
    </div>
</div>
<?php if (!get_fields()) echo 'Fill block with content';
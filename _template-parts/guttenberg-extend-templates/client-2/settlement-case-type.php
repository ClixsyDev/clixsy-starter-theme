<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $settlement_case_type__background_image = get_field('settlement_case_type__background_image');
    $settlement_case_type__title = get_field('settlement_case_type__title');
    $settlement_case_type__description = get_field('settlement_case_type__description');
    $settlement_case_type__link = get_field('settlement_case_type__link');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
    $settlement_case_type__insurance_offer = get_field('settlement_case_type__insurance_offer');
    $settlement_case_type__final_settlement = get_field('settlement_case_type__final_settlement');
    $settlement_case_type__description_settlement = get_field('settlement_case_type__description_settlement'); ?>

    <section class="pt-48 pb-16 bg-cover relative -mt-28 xs:pt-36 xl:bg-bottom lg:bg-[70%_top]" style="background-image:url('<?php echo !empty($settlement_case_type__background_image) ? wp_get_attachment_image_url($settlement_case_type__background_image['ID'], 'full') : ''; ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10 xl:hidden">
             <?php if ($settlement_case_type__title) { ?>
                <h3 class="font-second font-bold pb-11 text-6xl leading-[65px] lg:!text-5xl lg:pb-7 sm:!text-4xl lg:leading-[1.25]"> <?php echo $settlement_case_type__title ?></h3>
            <?php } ?>
            <div class="flex gap-28 uniq_xl:gap-20 lg:flex-col-reverse xs:gap-10">
                <di class="flex flex-col gap-10 w-9/24 lg:w-full xs:gap-6">
                    <?php if ($settlement_case_type__description) { ?>
                        <div class="settlement_case_type_description text-lg xs:!text-base">
                            <?php echo $settlement_case_type__description ?>
                            <?php if ($phone && $phone_link) { ?>
                                <br>
                                <strong>Call <a href="tel:<?php echo $phone_link ?>"><?php echo $phone ?></a> for a FREE case evaluation.</strong>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($settlement_case_type__link) {
                        Template::load('_template-parts/components/button.php', [
                            'link' => $settlement_case_type__link['url'],
                            'text' => __($settlement_case_type__link['title'], 'law'),
                            'text_hover' => false,
                            'classes' => 'btn-smaller hover_accent mdt:m-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]);
                    } ?>
                </div>
                <div class="flex flex-col gap-24 justify-center pt-24 lg:!pt-0 lg:gap-8">
                    <?php if ($settlement_case_type__insurance_offer) { ?>
                        <div>
                            <h4 class="font-main font-light uppercase text-3xl lg:!text-2xl xs:!text-xl xxs:!text-base">Insurance Offer</h4>
                            <div class="line-through text-button_color">
                                <div class="font-second text-12xl font-bold leading-none text-black xxxl:text-10xl xl:text-8xl xs:text-6xl xxs:text-5xl"><?php echo $settlement_case_type__insurance_offer ?></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($settlement_case_type__final_settlement) { ?>
                        <div>
                            <h4 class="font-main font-light uppercase text-3xl lg:!text-2xl xs:!text-xl xxs:!text-base">Final Settlement* </h4>
                            <div class="font-second text-15xl font-bold leading-none text-accent xxxl:text-13xl xl:text-10xl xs:text-8xl xxs:text-6xl"><?php echo $settlement_case_type__final_settlement ?></div>
                            <?php if ($settlement_case_type__description_settlement) { ?>
                                <div class="description_settlement mt-12 max-w-[900px] text-lg md:mt-6 xs:!text-sm"><?php echo $settlement_case_type__description_settlement ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container hidden z-10 relative xl:!block">
            <div class="flex items-center justify-around mdt:flex-col mdt:!items-start">
                <?php if ($settlement_case_type__title) { ?>
                    <h3 class="font-second font-bold pb-11 text-6xl max-w-[355px] leading-[65px] lg:!text-5xl lg:pb-7 sm:!text-4xl lg:leading-[1.25] mdt:max-w-none"> <?php echo $settlement_case_type__title ?></h3>
                <?php } ?>
                <div class="flex flex-col gap-24 justify-center lg:!pt-0 lg:gap-8">
                    <?php if ($settlement_case_type__insurance_offer) { ?>
                        <div>
                            <h4 class="font-main font-light uppercase text-xl xs:!text-xl xxs:!text-base">Insurance Offer</h4>
                            <div class="line-through text-button_color">
                                <div class="font-second text-8xl font-bold leading-none text-black xs:text-6xl xxs:text-5xl"><?php echo $settlement_case_type__insurance_offer ?></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($settlement_case_type__final_settlement) { ?>
                        <div>
                            <h4 class="font-main font-light uppercase text-xl lg:!text-2xl xs:!text-xl xxs:!text-base">Final Settlement* </h4>
                            <div class="font-second text-12xl font-bold leading-none text-accent xs:text-8xl xxs:text-6xl"><?php echo $settlement_case_type__final_settlement ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="max-w-[990px] m-auto">
                <?php if ($settlement_case_type__description) { ?>
                    <div class="settlement_case_type_description text-lg pt-11 xs:!text-base"><?php echo $settlement_case_type__description ?></div>
                <?php } ?>
                <?php if ($settlement_case_type__description_settlement) { ?>
                    <div class="description_settlement mb-12 mt-7 text-lg md:mt-6 xs:!text-sm"><?php echo $settlement_case_type__description_settlement ?></div>
                <?php } ?>
                <?php if ($settlement_case_type__link) {
                    Template::load('_template-parts/components/button.php', [
                        'link' => $settlement_case_type__link['url'],
                        'text' => __($settlement_case_type__link['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'btn-smaller hover_accent', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]);
                } ?>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';

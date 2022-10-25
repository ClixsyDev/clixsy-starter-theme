<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $win_case_design_one__title = get_field('win_case_design_one__title');
    $win_case_design_one__description = get_field('win_case_design_one__description');
    $win_case_design_one__persone = get_field('win_case_design_one__persone');
    $win_case_design_one__area = get_field('win_case_design_one__area');
    $win_case_design_one__area_title = get_field('win_case_design_one__area_title');
    $win_case_design_one__cta = get_field('win_case_design_one__cta');
    $win_case_design_one__cta_link = get_field('win_case_design_one__cta_link');
    $win_case_design_one__button = get_field('win_case_design_one__button');
    $win_case_design_one__form = get_field('win_case_design_one__form');
    $win_case_design_one__form_description = get_field('win_case_design_one__form_description');
    $win_case_design_one__background = get_field('win_case_design_one__background');

?>
    <?php if ($win_case_design_one__title || $win_case_design_one__description || $win_case_design_one__persone || $win_case_design_one__area || $win_case_design_one__area_title || $win_case_design_one__cta || $win_case_design_one__cta_link || $win_case_design_one__button || $win_case_design_one__form || $win_case_design_one__form_description) { ?>
        <div class="relative py-20 mdt:hidden bg-cover" style="background-image: url('<?php echo wp_get_attachment_image_url($win_case_design_one__background, 'full') ?>');">
            <?php if ($win_case_design_one__title) { ?>
                <h2 class="text-headings font-medium text-5xl text-center leading-tight pb-4 lg:text-4xl md:text-3xl"><?php echo $win_case_design_one__title ?></h2>
            <?php } ?>
            <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <div class="container flex pt-5">
                <div class="w-[65%] relative">
                    <?php if ($win_case_design_one__description) { ?>
                        <div class="text-headings_second prose-lg mb-28 px-16 lg:px-5">
                            <?php echo $win_case_design_one__description ?>
                        </div>
                    <?php } ?>
                    <div class=" bg-headings w-full h-80 z-30 flex px-5">
                        <?php if ($win_case_design_one__persone) { ?>
                            <?php echo wp_get_attachment_image($win_case_design_one__persone, 'full', '', ['class' => '-ml-20 -mt-24 h-auto object-cover']) ?>
                        <?php } ?>
                        <div class="flex flex-col -ml-12 xl:justify-center">
                            <div class="flex gap-5 2xl:items-center">
                                <?php if ($win_case_design_one__area) { ?>
                                    <?php echo wp_get_attachment_image($win_case_design_one__area, 'full', '', ['class' => '-mt-20 xl:w-10/24']) ?>
                                <?php } ?>
                                <?php if ($win_case_design_one__area_title) { ?>
                                    <div class="text-accent text-6xl leading-tight mb-6 2xl:text-4xl"><?php echo $win_case_design_one__area_title ?></div>
                                <?php } ?>
                            </div>

                            <?php if ($win_case_design_one__cta && $win_case_design_one__cta_link) { ?>
                                <div class="text-white text-4xl 2xl:text-3xl xl:text-2xl">
                                    <div><?php echo $win_case_design_one__cta ?></div>
                                    <div><a href="<?php echo $win_case_design_one__cta_link['url'] ?>" class="font-bold text-accent"><?php echo $win_case_design_one__cta_link['title'] ?></a></div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($win_case_design_one__button) { ?>
                        <div class="text-center mt-12">
                            <a href="<?php echo $win_case_design_one__button['url'] ?>" class="font-main uppercase bg-accent text-white font-bold text-2xl py-2 px-12 rounded-full lg:px-8 lg:py-3 lg:text-lg xs:text-2xl"><?php echo $win_case_design_one__button['title'] ?></a>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($win_case_design_one__form) { ?>
                    <div class="w-[35%] bg-headings p-11 lg:w-[45%] xl:p-7">
                        <?php if ($win_case_design_one__form_description) { ?>
                            <div class=" text-white text-xl leading-tight mb-8"><?php echo $win_case_design_one__form_description ?></div>
                        <?php } ?>
                        <?php echo $win_case_design_one__form ? do_shortcode('[contact-form-7 id="' . $win_case_design_one__form['0'] . '" title="Contact form"]') : '' ?>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- for mobile  -->

        <div class="hidden py-12 background-image mdt:block">
            <div class="container">
                <?php if ($win_case_design_one__title) { ?>
                    <h2 class="text-headings_second font-medium text-5xl text-center leading-tight pb-4 lg:text-4xl md:text-3xl xs:text-2xl"><?php echo $win_case_design_one__title ?></h2>
                <?php } ?>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
                <?php if ($win_case_design_one__description) { ?>
                    <div class="text-headings_second pt-8 w-22/24 m-auto prose-lg lg:px-5 xs:p-0 xs:m-auto">
                        <?php echo $win_case_design_one__description ?>
                    </div>
                <?php } ?>
                <?php if ($win_case_design_one__button) { ?>
                    <div class="text-center mt-12">
                        <a href="<?php echo $win_case_design_one__button['url'] ?>" class="font-main uppercase bg-accent text-white font-bold text-xl py-3 px-10 rounded-full"><?php echo $win_case_design_one__button['title'] ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="hidden bg-smoke pt-8 pb-52 mdt:block sm:pt-0">
            <div class="container p-0">
                <div class="flex items-end">
                    <?php if ($win_case_design_one__persone) { ?>
                        <?php echo wp_get_attachment_image($win_case_design_one__persone, 'full', '', ['class' => 'w-12/24']) ?>
                    <?php } ?>
                    <div class="mt-8">
                        <div class="flex items-center gap-3 sm:hidden">
                            <?php if ($win_case_design_one__area) { ?>
                                <?php echo wp_get_attachment_image($win_case_design_one__area, 'full', '', ['class' => '']) ?>
                            <?php } ?>
                            <?php if ($win_case_design_one__area_title) { ?>
                                <h3 class="text-headings text-5xl"><?php echo $win_case_design_one__area_title ?></h3>
                            <?php } ?>
                        </div>
                        <?php if ($win_case_design_one__cta && $win_case_design_one__cta_link) { ?>
                            <div class="text-white mt-2 text-2xl sm:text-center sm:pb-5 2xs:text-xl">
                                <div><?php echo $win_case_design_one__cta ?></div>
                                <div><a href="<?php echo $win_case_design_one__cta_link['url'] ?>" class="font-bold  text-headings"><?php echo $win_case_design_one__cta_link['title'] ?></a></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($win_case_design_one__form) { ?>
            <div class="hidden -mt-[210px] m-auto mdt:block">
                <div class="container bg-headings p-7 sm:w-[96%]">
                    <?php if ($win_case_design_one__form_description) { ?>
                        <div class=" text-white text-xl leading-tight mb-8"><?php echo $win_case_design_one__form_description ?></div>
                    <?php } ?>
                    <?php echo $win_case_design_one__form ? do_shortcode('[contact-form-7 id="' . $win_case_design_one__form['0'] . '" title="Contact form"]') : '' ?>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <h3>Enter data for block</h3>
    <?php } ?>
<?php }

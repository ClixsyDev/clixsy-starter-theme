<?php
$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $jeffrey_phillips_banner_image = get_field('jeffrey_phillips_banner_image');
    $jeffrey_phillips_banner_title = get_field('jeffrey_phillips_banner_title');
    $jeffrey_phillips_banner_description = get_field('jeffrey_phillips_banner_description');
    $jeffrey_phillips_banner_phone = get_field('jeffrey_phillips_banner_phone');

?>
    <div class="pb-10">
        <div class="flex justify-end relative ">
            <div class="w-11/12 grid grid-cols-[1fr,2fr] items-end bg-orange md:grid-cols-1 md:bg-white md:w-full">
                <div class="relative z-10 w-full h-full">
                    <img class="lozad absolute !m-0 w-[400px] max-w-min -left-16 bottom-0 md:relative md:left-0 md:w-full md:-bottom-1" data-src="<?php echo $jeffrey_phillips_banner_image['url'] ?>" alt="<?php echo $jeffrey_phillips_banner_image['title'] ?>">
                </div>
                <div class=" p-8 relative md:bg-orange ">
                    <span class="relative z-10 block">
                        <p class="text-4xl text-white font-bold !mb-6 xl:text-3xl"><?php echo $jeffrey_phillips_banner_title ?: '¡Calificas para tu primera llamada gratis!' ?></p>
                        <p class="!m-0 text-3xl text-white  pr-12 xl:pr-0 xl:text-2xl"> <?php echo $jeffrey_phillips_banner_description ?: ' Lláma al numero o llena el formulario para agendar tu llamada.' ?></p>
                    </span>
                </div>
            </div>

        </div>
        <a href="tel:<?php echo $jeffrey_phillips_banner_phone ?: '(202) 933-3379' ?>" class="text-center text-orange text-7xl block font-bold mt-5 !no-underline md:text-4xl"><?php echo $jeffrey_phillips_banner_phone ?: '(202) 933-3379' ?></a>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
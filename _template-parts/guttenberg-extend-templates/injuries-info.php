<?php 
$title = get_field('title');
$subtitle = get_field('subtitle');
$description = get_field('description');
?>

<div class="relative py-28 md:py-12">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/verdicts_bg.svg" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
    <div class="container relative">
        <?php if ($title) { ?>
            <h2 class="text-headings_second font-medium text-4xl text-center leading-tight pb-4"><?php echo $title ?></h2>
        <?php } ?>
        <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
        <?php if ($subtitle) { ?>
            <p class="font-noto_serif font-bold text-2xl text-center md:text-xl"><?php echo $subtitle ?></p>
        <?php } ?>
        <?php if ($description) { ?>
            <div class="font-avenir text-xl max-w-[1120px] m-auto pt-10 lg:px-16 md:pt-3 md:text-base xs:px-0 xs:pt-5">
                <?php echo $description ?>
            </div>
        <?php } ?>
    </div>
</div>
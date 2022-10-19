<?php 
$description = get_field('description');
$name = get_field('name');
$position = get_field('position');
$link = get_field('link');
$image = get_field('image');
$small_logo = get_field('small_logo');
?>

<div class="pt-24 md:pt-64">
    <div class="container xs:p-0">
        <div class="w-23/24 relative flex bg-smoke pt-24 pb-16 px-14 lg:px-4 lg:py-7 md:w-full md:pb-10 md:block">
            <div class="w-13/24 md:w-full">
                <?php if ($description) { ?>
                    <p class="font-avenir text-2xl pb-7 lg:pb-0 lg:text-xl md:pb-5 xs:pb-8"><?php echo $description ?></p>
                <?php } ?>
                <?php if ($name || $position) { ?>
                    <div class="pb-7 md:absolute md:bottom-full">
                        <?php if ($name) { ?>
                            <h3 class="font-noto_serif text-2xl"><?php echo $name ?></h3>
                        <?php } ?>
                        <?php if ($position) { ?>
                            <h4 class="font-noto_serif text-base"><?php echo $position ?></h4>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($link) { ?>
                    <div class="md:text-center">
                        <a href="<?php echo esc_url( $link['url'] ); ?>" class="font-avenir bg-headings uppercase text-white font-bold text-xl py-2 px-12 rounded-full lg:px-8 lg:text-base xs:text-2xl"><?php echo esc_html( $link['title'] ); ?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="absolute w-2/4 right-[-6%] bottom-0 lg:bottom-none lg:right-[-4%] md:bottom-full md:right-0 md:mb-1">
                <?php if ($image) { ?>
                    <?php echo wp_get_attachment_image($image, 'full', "", ["class" => ""]); ?>
                <?php } ?>
                <hr class="bg-accent absolute left-[-5%] border-none mx-auto h-1 w-full ml-5 md:left-0 md:ml-0">
                <img src="<?= wp_get_attachment_image_url( $small_logo, 'full') ?>" class="absolute right-[15%] bottom-[3%]" alt="">
            </div>
        </div>
    </div>
</div>
<?php 
if (!get_fields()) echo 'Fill block with content';
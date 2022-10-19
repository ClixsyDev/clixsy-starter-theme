<?php 
$fields = get_fields();
?>
<div class="bg-headings px-4 pt-10 pb-8 ">
    <h2 class="text-white text-5xl leading-tight text-center pb-5 mdt:text-4xl"><?= $fields['title'] ?></h2>
    <hr class="bg-accent border-none mx-auto h-1 w-[596px] max-w-full mb-6">
    <div class="awards_slider glide relative max-w-[1920px] mx-auto">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides overflow-visible flex justify-around gap-3 items-center">
                <?php 
                foreach ($fields['awards_items'] as $item) {
                    ?>
                    <div class="glide__slide">
                        <a class="h-24 w-full mx-auto flex justify-center" href="<?= $item['award_link'] ?>" target="_blank">
                            <img class="h-[98px] w-full object-contain mx-auto" src="<?= wp_get_attachment_image_url( $item['award_image'], 'full') ?>">
                        </a>
                        <?= $item['award_html'] ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
if (!get_fields()) echo 'Fill block with content';
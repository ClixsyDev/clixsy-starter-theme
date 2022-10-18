<div class="">
    <img src="<?= wp_get_attachment_image_url( $fields['background_image'], 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
    <div class="container">
        <h1 class=" font-bold text-8xl leading-tight text-white max-w-[1177px]">Louisiana Car Accident Attorney</h1>
        <a href="<?= $fields['button_url'] ?>" class=" h-[75px] px-14 flex justify-center items-center bg-accent rounded-full text-4xl leading-none text-white uppercase xl:text-3xl md:text-2xl">
            <?= $fields['button_text'] ?>
        </a>
    </div>
</div>
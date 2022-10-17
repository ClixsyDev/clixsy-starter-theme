<?php
$fields = get_fields();
?>
<div class="bg-headings pt-14 pb-16">
    <div class="container">
        <h2 class="text-white text-5xl leading-tight text-center pb-5 mdt:text-4xl">
            <?= $fields['title'] ?>
        </h2>
        <hr class="bg-accent border-none mx-auto h-1 w-[124px] max-w-full mb-6">
        <div class="flex gap-14 mt-14 mdt:flex-wrap mdt:justify-center md:gap-6">
            <?php foreach ($fields['cases'] as $case) { ?>
                <a href="<?= $case['case_link'] ?>" class="flex-1 flex flex-col items-center mdt:w-[250px] mdt:flex-none ">
                    <img src="<?= wp_get_attachment_image_url( $case['case_image'], 'full') ?>" alt="">
                    <div class="text-2xl text-white "><?= $case['name'] ?></div>
                </a>
            <?php
            } ?>
        </div>
        <div class=" mt-11 flex justify-center gap-11 md:flex-col md:items-center md:gap-4">
            <a href="<?= $fields['button_1']['url'] ?>" class=" text-2xl uppercase font-bold rounded-full bg-white py-4 px-12 leading-none md:py-2 md:px-8 md:text-lg"><?= $fields['button_1']['title'] ?></a>
            <a href="<?= $fields['button_2']['url'] ?>" class="text-white text-2xl uppercase font-bold rounded-full bg-accent py-4 px-12 leading-none md:py-2 md:px-8 md:text-lg"><?= $fields['button_2']['title'] ?></a>
        </div>
    </div>
</div>
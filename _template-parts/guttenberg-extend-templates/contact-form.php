<?php $fields = get_fields(); ?>
<div class="how_can_help_form">
    <div class="container translate-y-20">
        <div class="w-[555px] max-w-full bg-headings pt-7 px-12 mx-auto md:px-4 ">
            <h2 class=" text-4xl text-white text-center"><?= $fields['title'] ?></h2>
            <?= do_shortcode($fields['form_shortcode']) ?>
        </div>
    </div>
</div>
<?php if (!get_fields()) echo 'Fill block with content';
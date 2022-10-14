<?php 
$fields = get_fields();
?>
<div class=" pt-10 pb-9 bg-smoke">
    <div class="container">
        <h2 class="text-white text-5xl leading-tight text-center mb-7"><?= $fields['title'] ?></h2>
        <a href="<?= $fields['button_link'] ?>" class=" mx-auto w-[233px] h-[67px] flex justify-center items-center bg-accent rounded-full text-2xl leading-none text-white uppercase">
            <?= $fields['button_title'] ?>
        </a>
    </div>
</div>
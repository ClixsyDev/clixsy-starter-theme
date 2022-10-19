<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $decorated_text_design_one__title = get_field('decorated_text_design_one__title');
    $decorated_text_design_one__button = get_field('decorated_text_design_one__button');
    $decorated_text_design_one__description = get_field('decorated_text_design_one__description');
    $decorated_text_design_one__after_description = get_field('decorated_text_design_one__after_description');

?>
    <div class="container -mt-24">
        <div class="w-full bg-headings">
            <?php if ($decorated_text_design_one__title) { ?>
                <div class=" text-white text-5xl xl:text-4xl lg:text-3xl md:text-2xl text-center relative pb-16 pt-28">
                    <h2 class="font-bold process_text_design__one"><?php echo $decorated_text_design_one__title ?></h2>
                    <span class="bg-accent w-32 h-1 absolute left-0 right-0 mx-auto"></span>
                </div>
            <?php } ?>

            <?php if ($decorated_text_design_one__description || $decorated_text_design_one__after_description) { ?>
                <div class="w-[820px] xl:w-full mx-auto text-white pb-16 xl:px-16 mdt:px-10">
                    <div class="prose-xl">
                        <?php echo $decorated_text_design_one__description ?>
                    </div>
                    <div class="text-4xl 2xl:text-3xl md:text-2xl">
                        <?php echo $decorated_text_design_one__after_description ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ($decorated_text_design_one__button) { ?>
                <div class="w-full flex justify-center pb-16">
                    <a href="<?php echo $decorated_text_design_one__button['url'] ?>" class="text-white bg-accent w-96 lg:w-72 h-20  flex justify-center items-center text-4xl lg:text-2xl font-bold rounded-full"><?php echo $decorated_text_design_one__button['title'] ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';

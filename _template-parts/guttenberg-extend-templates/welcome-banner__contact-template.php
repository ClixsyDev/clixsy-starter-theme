<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $guttenberg_single_button = get_field('button_link');
?>
    <section class="w-full relative">
        <img class=" object-cover h-[730px] w-full " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/placeholder.jpg" alt="accident img">
        <div class="container h-full absolute left-0 right-0 top-0  mx-auto ">
            <div class=" translate-y-[20%] 2xl:translate-y-[30%] lg:translate-y-[20%] md:translate-y-[35%]">
                <div class="pb-16 text-white text-[90px] 2xl:text-[60px] md:text-[40px] text-center font-bold">
                    <span class="bg-kennyGreen w-2/5 h-2 absolute left-0 right-0 mx-auto"></span>
                    <h2 class="py-3">LOUISIANA <br> CAR ACCIDENT ATTORNEY</h2>
                    <span class="bg-kennyGreen w-2/5  h-2 absolute left-0 right-0 mx-auto"></span>
                </div>
                <div class="pb-16 flex flex-row justify-center">
                    <div class="flex items-center mr-9">
                        <img class=" object-contain h-11 w-11 md:h-7 md:w-7 " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/star-icon.png" alt="accident img">
                        <img class=" object-contain h-11 w-11 md:h-7 md:w-7 " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/star-icon.png" alt="accident img">
                        <img class=" object-contain h-11 w-11 md:h-7 md:w-7 " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/star-icon.png" alt="accident img">
                        <img class=" object-contain h-11 w-11 md:h-7 md:w-7 " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/star-icon.png" alt="accident img">
                        <img class=" object-contain h-11 w-11 md:h-7 md:w-7 " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/star-icon.png" alt="accident img">
                    </div>

                    <div class="flex items-center justify-center">
                        <img class=" object-contain h-14 md:h-9 w-auto " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/google-logo.png" alt="accident img">
                    </div>
                </div>

                <div class="w-full flex justify-center ">
                    <a href="#" class="text-white bg-kennyGreen w-[580px] 2xl:w-[300px] h-20 flex justify-center items-center text-4xl  xxl:text-2xl  font-bold rounded-full">FREE CASE REVIEW</a>
                </div>
            </div>
        </div>
    </section>
<?php }

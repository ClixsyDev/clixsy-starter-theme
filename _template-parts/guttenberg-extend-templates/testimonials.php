<?php
$title = get_field('title'); 
$testimonials = get_field('testimonials');
?>

<div class="py-24">
    <div class="container">
        <?php if ($title) { ?>
            <h2 class="text-kennyBlue font-medium text-4xl text-center leading-tight pb-4"><?php echo $title ?></h2>
            <hr class="bg-kennyGreen border-none mx-auto h-1 w-[100px] max-w-full mb-6">
        <?php } ?>
        <div class="testmonialsSlider glide relative">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides overflow-visible">
                    <?php foreach ($testimonials as $item) { ?>
                        <div class="glide__slide">
                            <div class="pt-16 pb-6 px-10 shadow-lg w-9/24 m-auto relative xl:w-16/24 md:w-20/24 xs:px-6">
                                <div class="absolute -right-[11%] top-0">
                                    <img class="w-9/12 md:w-14/24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/slide-marks1.png">
                                </div>
                                <div class="absolute -left-[6%] top-0">
                                    <img class="w-9/12 md:w-14/24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/slide-marks2.png">
                                </div>
                                <div class="pb-14 text-lg leading-6 font-avenir font-normal">
                                    <?php echo $item['description'] ?>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex gap-0.5 xs:items-center">
                                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icon-star.png" class="max-w-[30px] max-h-[27px] xs:max-w-[24px] xs:max-h-[21px]" alt="">
                                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icon-star.png" class="max-w-[30px] max-h-[27px] xs:max-w-[24px] xs:max-h-[21px]" alt="">
                                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icon-star.png" class="max-w-[30px] max-h-[27px] xs:max-w-[24px] xs:max-h-[21px]" alt="">
                                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icon-star.png" class="max-w-[30px] max-h-[27px] xs:max-w-[24px] xs:max-h-[21px]" alt="">
                                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icon-star.png" class="max-w-[30px] max-h-[27px] xs:max-w-[24px] xs:max-h-[21px]" alt="">
                                    </div>
                                    <?php if ($item['description']) { ?>
                                        <p class="font-noto_serif text-xl"><?php echo $item['name'] ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center relative mt-10 xs:mt-6">
                    <div class="glide__arrows absolute right-[53%] top-11% w-max lg:right-55% md:right-57%" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-left.png"></button>
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <?php for ($i = 1; $i <= count($testimonials); $i++) { ?>
                            <button class="slider__bullet glide__bullet focus:border-none bg-kennySmoke focus:bg-darkOrange hover:bg-darkOrange w-7 h-1.5 rounded-none xs:h-1 xs:w-6" data-glide-dir="=<?php echo $i - 1 ?>"></button>
                        <?php } ?>
                    </div>
                    <div class="glide__arrows absolute left-[53%] top-11% w-max lg:left-55% md:left-57% xs:left-58%" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--right" data-glide-dir="<"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-right.png"></button>
                    </div>
                 </div>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left absolute top-36 left-25% xl:left-10% md:left-0 xs:top-[46%]" data-glide-dir="<"><img class="w-9/12 xs:h-5" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-back.png"></button>
                <button class="glide__arrow glide__arrow--right absolute top-36 right-25% xl:right-10% md:right-0 xs:top-[46%]" data-glide-dir="<"><img class="w-9/12 xs:h-5" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-next.png"></button>
            </div>
        </div> 
    </div>
</div>
<?php
$fields = get_fields();
?>
<div class="relative">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/verdicts_bg.svg" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
    <div class="verdicts_slider glide relative pt-12 pb-14 2xl:pt-6 2xl:pb-7">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides overflow-visible flex justify-around gap-3 items-center">
                <?php
                foreach ($fields['verdicts_repeater'] as $verdict) {
                ?>
                    <div class="glide__slide bg-white pt-4 pb-2 px-4 text-center flex-1">
                        <div class="text-accent text-5xl leading-none 2xl:text-3xl">
                            <?= $verdict['verdicts_value'] ?>
                        </div>
                        <div class=" text-[40px] 2xl:text-[25px]">
                            <?= $verdict['verdicts_description'] ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container relative pb-16">
        <div class="google_reviews_slider glide flex gap-12">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides overflow-visible flex justify-around gap-6 items-start">
                    <?php
                    foreach ($fields['verdicts_testimonials'] as $testimonial) {
                    ?>
                        <div class="glide__slide slider_item flex-1 bg-white relative pt-9 px-8 pb-36 mt-14">
                            <svg class="absolute -left-5 -top-12" xmlns="http://www.w3.org/2000/svg" width="99.679" height="76.16" viewBox="0 0 99.679 76.16">
                                <path id="quote_1_" data-name="quote (1)" d="M12.06,75.2C6.46,69.04,3.1,62.32,3.1,51.12c0-19.6,14-36.96,33.6-45.92l5.04,7.28C23.26,22.56,19.34,35.44,18.22,43.84a16.606,16.606,0,0,1,10.64-1.68c10.08,1.12,17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14,18.574,18.574,0,0,1-14,5.6A22.025,22.025,0,0,1,12.06,75.2Zm56,0c-5.6-6.16-8.96-12.88-8.96-24.08,0-19.6,14-36.96,33.6-45.92l5.04,7.28C79.26,22.56,75.34,35.44,74.22,43.84c2.8-1.68,10.64-1.68,10.64-1.68s17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14c-3.36,3.92-8.4,5.6-14,5.6A22.025,22.025,0,0,1,68.06,75.2Z" transform="translate(-3.1 -5.2)" fill="#69be26" />
                            </svg>
                            <div class="text-lg leading-tight mb-6 text-kennyGrayText">
                                <?= $testimonial['text'] ?>
                            </div>
                            <div class=" font-bold text-kennyGrayText"><?= $testimonial['author'] ?></div>
                            <div>
                                <svg class="absolute left-5 bottom-2" id="Google-Logo" xmlns="http://www.w3.org/2000/svg" width="133.18" height="43.84" viewBox="0 0 133.18 43.84">
                                    <path id="Path_48" data-name="Path 48" d="M92.869,35.485A10.99,10.99,0,1,1,81.88,24.53,10.82,10.82,0,0,1,92.869,35.485Zm-4.811,0a6.195,6.195,0,1,0-12.358,0,6.195,6.195,0,1,0,12.358,0Z" transform="translate(-35.876 -12.414)" fill="#ea4335" />
                                    <path id="Path_49" data-name="Path 49" d="M140.869,35.485A10.99,10.99,0,1,1,129.88,24.53,10.82,10.82,0,0,1,140.869,35.485Zm-4.811,0a6.195,6.195,0,1,0-12.358,0,6.195,6.195,0,1,0,12.358,0Z" transform="translate(-60.168 -12.414)" fill="#fbbc05" />
                                    <path id="Path_50" data-name="Path 50" d="M187.871,25.192V44.86c0,8.09-4.771,11.395-10.412,11.395a10.432,10.432,0,0,1-9.71-6.456l4.188-1.744a6.051,6.051,0,0,0,5.517,3.887c3.611,0,5.848-2.228,5.848-6.421V43.946h-.168a7.459,7.459,0,0,1-5.769,2.489,10.963,10.963,0,0,1,0-21.905,7.592,7.592,0,0,1,5.769,2.45h.168V25.2h4.569Zm-4.228,10.333c0-3.857-2.573-6.678-5.848-6.678-3.319,0-6.1,2.82-6.1,6.678a6.287,6.287,0,0,0,6.1,6.6C181.07,42.123,183.643,39.343,183.643,35.525Z" transform="translate(-84.45 -12.414)" fill="#4285f4" />
                                    <path id="Path_51" data-name="Path 51" d="M219.832,2.53v32.1H215.14V2.53Z" transform="translate(-108.879 -1.28)" fill="#34a853" />
                                    <path id="Path_52" data-name="Path 52" d="M244.995,39.086l3.734,2.489A10.9,10.9,0,0,1,239.6,46.43,10.719,10.719,0,0,1,228.73,35.475c0-6.515,4.687-10.955,10.333-10.955,5.685,0,8.466,4.524,9.375,6.969l.5,1.245L234.292,38.8a5.575,5.575,0,0,0,5.31,3.319,6.252,6.252,0,0,0,5.394-3.033ZM233.5,35.144l9.789-4.065a4.241,4.241,0,0,0-4.065-2.321A6.009,6.009,0,0,0,233.5,35.144Z" transform="translate(-115.756 -12.409)" fill="#ea4335" />
                                    <path id="Path_53" data-name="Path 53" d="M17.253,20.221V15.573H32.915a15.4,15.4,0,0,1,.232,2.805c0,3.487-.953,7.8-4.025,10.871a15.555,15.555,0,0,1-11.864,4.771A17.249,17.249,0,0,1,0,17.011,17.249,17.249,0,0,1,17.257,0,16.209,16.209,0,0,1,28.914,4.687l-3.28,3.28a11.847,11.847,0,0,0-8.382-3.319,12.2,12.2,0,0,0-12.2,12.363,12.2,12.2,0,0,0,12.2,12.363,11.38,11.38,0,0,0,8.589-3.4,9.633,9.633,0,0,0,2.519-5.754Z" fill="#4285f4" />
                                </svg>
                                <div class="flex absolute right-5 bottom-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (!get_fields()) echo 'Fill block with content';
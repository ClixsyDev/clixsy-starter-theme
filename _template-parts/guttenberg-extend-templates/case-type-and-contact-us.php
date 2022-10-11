<!-- Case type page (blocks that don't exist) -->

<!-- hero section -->

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



<!-- Kenny has won Millions section -->
<section class="relative pt-8 mb-16">
    <div class=" text-kennyBlueSecond text-4xl text-center relative pb-16">
        <h2 class="font-bold"><span class=" text-kennyGreen">Kenny has won MILLIONS</span> for his clients</h2>
        <span class="bg-kennyGreen w-32 h-1 absolute left-0 right-0 mx-auto"></span>
    </div>



    <?php if (wp_is_mobile()) { ?>
        <div class="container">
            <div class="w-[90%] mx-auto text-xl">
                <p>Car accidents can happen at any time and place. The process of filing an insurance claim, dealing with all of the insurance companies involved, and proving fault can be confusing and overwhelming. You aren’t sure who you can trust or who you should even be speaking to.
                </p>
                <br>
                <p>Our professional car accident attorneys are dedicated to helping injured clients navigate this process for them</p>
                <br>
                <p>We know how confusing it can be to deal with insurance questions as well as a complex legal system that can make it difficult to prove fault.</p>
            </div>
        </div>
        <div class="w-full bg-[#C0C4C7] mt-[400px]">
            <div class="container grid">
                <div class="w-[65%] md:w-full mx-auto inline-block -mt-72 bg-kennyBlueThird p-11 2xl:p-6">
                    <div class=" text-white text-xl leading-tight contact-page__form ">
                        <p class=" text-4xl 2xl:text-3xl pb-5 font-bold">How can Kenny <span class="text-kennyGreen">help?</span></p>
                        <p class="pb-5">Tell us a little about what happened, and a representative will contact you soon to listen to your story and review your case for free.</p>
                        <?php
                        echo do_shortcode('[contact-form-7 id="15" title="Case type"]'); ?>
                    </div>
                </div>
                <div class="w-[90%] md:w-full mx-auto">
                    <div class="mb-8">
                        <div class=" 2xl:pl-5 py-9 text-white text-3xl 2xl:text-xl font-bold">
                            <p>That’s why our top priority is taking care of our clients throughout the <span class=" text-kennyBlueSecond"> entire process</span> at every step. From filing your claim, negotiating the best possible settlement amount, or representing you in court – <span class=" text-kennyBlueSecond">we have 24/7 access to your case from start to finish.</span></p>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mb-16">
                        <a href="#" class="text-white bg-kennyGreen w-[490px] 2xl:w-[300px] h-20 flex justify-center items-center text-2xl  font-bold rounded-full">FREE CASE REVIEW</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container flex">
            <div class="w-[65%] 2xl:w-[55%] relative">
                <div class="w-[90%] text-xl 2xl:text-base py-9 2xl:pb-20 pl-5">
                    <p>Car accidents can happen at any time and place. The process of filing an insurance claim, dealing with all of the insurance companies involved, and proving fault can be confusing and overwhelming. You aren’t sure who you can trust or who you should even be speaking to.
                    </p>
                    <br>
                    <p>Our professional car accident attorneys are dedicated to helping injured clients navigate this process for them</p>
                    <br>
                    <p>We know how confusing it can be to deal with insurance questions as well as a complex legal system that can make it difficult to prove fault.</p>
                </div>
                <div class="bg-[#C0C4C7] mb-14">
                    <div class="w-[90%] pl-9 2xl:pl-5 py-9 text-white text-3xl 2xl:text-xl font-bold">
                        <p>That’s why our top priority is taking care of our clients throughout the <span class=" text-kennyBlueSecond"> entire process</span> at every step. From filing your claim, negotiating the best possible settlement amount, or representing you in court – <span class=" text-kennyBlueSecond">we have 24/7 access to your case from start to finish.</span></p>
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <a href="#" class="text-white bg-kennyGreen w-[490px] 2xl:w-[300px] h-20 flex justify-center items-center text-4xl 2xl:text-2xl font-bold rounded-full">FREE CASE REVIEW</a>
                </div>

            </div>
            <div class="w-[35%] 2xl:w-[45%] bg-kennyBlueThird p-11 2xl:p-6">
                <div class=" text-white text-xl leading-tight contact-page__form ">
                    <p class=" text-4xl 2xl:text-3xl pb-5 font-bold">How can Kenny <span class="text-kennyGreen">help?</span></p>
                    <p class="pb-5">Tell us a little about what happened, and a representative will contact you soon to listen to your story and review your case for free.</p>
                    <?php
                    echo do_shortcode('[contact-form-7 id="15" title="Case type"]'); ?>
                </div>
            </div>
        </div>
    <?php } ?>
</section>


<!-- What to do after accident section -->

<section class="container mb-16">
    <div class=" text-kennyBlueSecond text-4xl text-center relative pb-16">
        <h2 class="font-bold"><span class=" text-kennyGreen">What to do</span> after the accident</h2>
        <span class="bg-kennyGreen w-32 h-1 absolute left-0 right-0 mx-auto"></span>
    </div>

    <div class="flex lg:flex-wrap">
        <div class="w-[40%] lg:w-full">
            <img class=" object-cover h-full lg:h-72 w-full  " src="<?php echo get_template_directory_uri() ?>/_assets/src/img/car-accident-img.png" alt="accident img">
        </div>
        <div class="w-[60%] lg:w-full text-[40px] font-avenir text-kennyBlueSecond leading-none">
            <div class=" bg-[#F3F3F3]">
                <div class="flex  items-center lg:justify-start py-9 pl-5 h-64 lg:h-40 lg:w-3/5 md:w-full lg:mx-auto">
                    <div class="text-kennyGreen text-[90px] lg:text-[60px] md:text-[40px] font-bold pr-5">
                        <p>01</p>
                    </div>
                    <div class=" text-[40px] lg:text-[25px] ">
                        <p class="pb-2">Call us for <span class="text-kennyGreen font-bold">FREE</span> initial case review.</p>
                        <p class="font-bold pb-2">855-GO-KENNY</p>
                        <a href="#" class="text-white bg-kennyGreen w-1/3 lg:w-1/2 h-11 flex justify-center items-center text-2xl font-bold rounded-full">Call Now</a>
                    </div>
                </div>
            </div>
            <div class="bg-[#A5ACAF]">
                <div class="flex  text-white  items-center lg:justify-start lg:w-3/5 lg:mx-auto md:w-full py-9 pl-5 h-64 lg:h-40">
                    <div class="text-[90px] lg:text-[60px] md:text-[40px] font-bold pr-5">
                        <p>02</p>
                    </div>
                    <div class=" text-[40px] lg:text-[25px] ">
                        <p>We get to <span class=" text-kennyBlueSecond font-bold">WORK</span> on your case</p>
                    </div>
                </div>
            </div>

            <div class=" bg-[#F3F3F3]">
                <div class="flex   items-center lg:justify-start lg:w-3/5 lg:mx-auto md:w-full py-9 pl-5 h-64 lg:h-40">
                    <div class="text-kennyGreen text-[90px] lg:text-[60px] md:text-[40px] font-bold pr-5">
                        <p>03</p>
                    </div>
                    <div class=" text-[40px] lg:text-[25px] ">
                        <p>Our team will <span class="text-kennyGreen font-bold">FIGHT</span> to get you the settelment you deserve</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full bg-kennyBlueSecond">
        <div class=" text-white text-5xl xl:text-4xl lg:text-3xl md:text-2xl text-center relative pb-16 pt-28">
            <h2 class="font-bold">We only get paid if we <span class=" text-kennyGreen">WIN your Case</span></h2>
            <span class="bg-kennyGreen w-32 h-1 absolute left-0 right-0 mx-auto"></span>
        </div>

        <div class="w-[820px] xl:w-full mx-auto text-white pb-16 xl:px-16 mdt:px-10">
            <p class="text-xl">Kenny is dedicated to helping you recover from your car crash or other accident. We can help you make a claim for damages, including medical expenses, pain and suffering and lost wages.</p>
            <br>
            <p class=" text-4xl 2xl:text-3xl md:text-2xl ">To learn more about your rights after an accident,<br> <strong>call us today at 855-GO-KENNY.</strong></p>
        </div>

        <div class="w-full flex justify-center pb-16"> <a href="#" class="text-white bg-kennyGreen w-96 lg:w-72 h-20  flex justify-center items-center text-4xl lg:text-2xl font-bold rounded-full">CONTACT US</a></div>
    </div>
</section>


<!-- Case type FAQ  section-->

<section class="container mb-16">
    <div class=" text-kennyBlueSecond text-4xl text-center relative pb-16">
        <h2 class="font-bold">Car Accident <span class=" text-kennyGreen">FAQ's</span></h2>
        <span class="bg-kennyGreen w-32 h-1 absolute left-0 right-0 mx-auto"></span>
    </div>

    <div>
        <img class=" object-cover mx-auto w-[60%] mdt:w-[80%]  md:w-full h-[487px] 2xl:h-64 md:h-52" src="<?php echo get_template_directory_uri() ?>/_assets/src/img/placeholder.jpg" alt="Case Type img">
        <div class="mx-auto w-[60%] mdt:w-[80%] md:w-full ">
            <div>
                <div class="pb-2 faq-block">
                    <div class="title-faq text-kennyBlueSecond flex justify-between bg-smoke font-avenir font-bold text-2xl xl:text-lg p-4 lg:text-base relative xs:px-7">
                        <h3>How Much Does a Personal Injury Lawyer Cost?1</h3>

                    </div>
                    <div class="pt-3 pb-5 px-11 hidden hidden-part">
                        <p>When you contact our firm, we will work with you to schedule a free, no obligation consultation to talk with a member of our intake team about your claim. During your consultation, we will gather details about your accident and injury and attempt to answer any questions you may have. We will provide you with an initial assessment of your claim, which will help us determine if you have a case and are entitled to compensation. You will not be charged for your consultation and there is no obligation in speaking with us.</p>
                    </div>
                </div>
                <div class="pb-2 faq-block">
                    <div class="title-faq text-kennyBlueSecond flex justify-between bg-smoke font-avenir font-bold text-2xl p-4 xl:text-lg lg:text-base relative xs:px-7">
                        <h3>How Much Does a Personal Injury Lawyer Cost?2</h3>

                    </div>
                    <div class="pt-3 pb-5 px-11 hidden hidden-part">
                        <p>When you contact our firm, we will work with you to schedule </p>
                    </div>
                </div>
                <div class="pb-2 faq-block">
                    <div class="title-faq text-kennyBlueSecond flex justify-between bg-smoke font-avenir font-bold text-2xl p-4 xl:text-lg lg:text-base relative xs:px-7">
                        <h3>How Much Does a Personal Injury Lawyer Cost?3</h3>

                    </div>
                    <div class="pt-3 pb-5 px-11 hidden hidden-part">
                        <p>When you contact our firm, we will work with you to schedule a free, no obligation consultation to talk with a member of our intake team about your claim. </p>
                    </div>
                </div>
            </div>

        </div>
</section>




<!-- Contact us page (blocks that don't exist) -->

<!-- contact us hero section -->
<section class="contact-page__hero-wrapper " style="background-image: url(<?php echo get_template_directory_uri() ?>/_assets/src/img/contact-page-bg.png);">
    <div class="contact-page__hero__img-wrapper">
        <img class="block  2xl:w-full w-5/12" src="<?php echo get_template_directory_uri() ?>/_assets/src/img/kenny-contact-us.png" alt="Kenny" />
        <div class="contact-page__form contact-page__hero__form-wrapper">
            <h2 class="text-white text-center text-[40px] mdt:text-4xl md:text-[28px] sm:text-2xl my-10 sm:my-5">How can Kenny <span class="text-kennyGreen">help?</span> </h2>
            <p class=" pb-7">Tell us a little about what happened, and our team will contact you soon to listen to your story and review your case for FREE.</p>
            <?php
            echo do_shortcode('[contact-form-7 id="14" title="Contact form"]'); ?>

        </div>
    </div>
</section>

<!-- Contact us Main office (map) section -->
<section class="w-full bg-img-case-types pt-32 pb-20 font-avenir">
    <div class="container">
        <div class=" text-kennyBlueSecond text-5xl text-center relative pb-16">
            <h2 class="font-bold"> Main <span class=" text-kennyGreen">Office</span></h2>
            <span class="bg-kennyGreen w-32 h-1 absolute left-0 right-0 mx-auto"></span>
        </div>

        <div class="flex flex-row mdt:flex-wrap justify-center w-full">
            <div class="text-kennyBlueSecond text-4xl mdt:text-2xl mx-auto w-full  order-1 mdt:order-2 ">
                <div class="w-[90%] mx-auto mdt:w-[80%] md:w-8/12 sm:w-full mdt:ml-0">
                    <p>110 E Kaliste Saloom Rd Ste 101
                        Lafayette, LA 70508</p>
                    <p>ingo@gokenny.com</p>
                    <p class=" text-6xl lg:text-5xl font-bold">(333) 399-9000</p>
                </div>
            </div>

            <div class="mx-auto  order-2 mdt:order-1 w-full mdt:pb-12 ">
                <div class=" h-[295px] w-full border-2 shadow-lg mx-auto ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215.5398480163132!2d-92.01270712077142!3d30.19034548658967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86249cebb545d4e1%3A0x728bfe6bd9de0d93!2sKenny%20Habetz%20Injury%20Law!5e0!3m2!1sen!2srs!4v1665394377925!5m2!1sen!2srs" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
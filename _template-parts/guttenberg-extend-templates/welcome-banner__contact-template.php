<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_hero__contact_bg = get_field('welcome_hero__contact_bg');
    $welcome_hero__contact_persone = get_field('welcome_hero__contact_persone');
    $welcome_hero__contact_form_title = get_field('welcome_hero__contact_form_title');
    $welcome_hero__contact_form_description = get_field('welcome_hero__contact_form_description');
    $welcome_hero__contact_form_select = get_field('welcome_hero__contact_form_select');
    $welcome_hero__contact_running_repeater = get_field('welcome_hero__contact_running_repeater');
?>
    <section class="contact-page__hero-wrapper " style="background-image: url(<?php echo $welcome_hero__contact_bg ?: get_template_directory_uri() . '/_assets/src/img/contact-page-bg.png);' ?>">
        <div class="contact-page__hero__img-wrapper">
            <?php if ($welcome_hero__contact_persone) {
                echo wp_get_attachment_image($welcome_hero__contact_persone, 'full', '', ['class' => 'block  2xl:w-full w-5/12']);
            } else { ?>
                <img class="block  2xl:w-full w-5/12" src="<?php echo get_template_directory_uri() ?>/_assets/src/img/kenny-contact-us.png" alt="Kenny" />
            <?php } ?>
            <div class="contact-page__form contact-page__hero__form-wrapper">
                <?php if ($welcome_hero__contact_form_title) { ?>
                    <h2 class="form-heading"><?php echo $welcome_hero__contact_form_title ?></h2>
                <?php }
                if ($welcome_hero__contact_form_description) { ?>
                    <p class=" pb-7"><?php echo $welcome_hero__contact_form_description ?></p>
                <?php }
                echo $welcome_hero__contact_form_select ? do_shortcode('[contact-form-7 id="' . $welcome_hero__contact_form_select['0'] . '" title="Contact form"]') : '' ?>
            </div>
        </div>
    </section>
<?php }

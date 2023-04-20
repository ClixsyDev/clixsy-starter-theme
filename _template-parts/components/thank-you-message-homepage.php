<?php
extract($args);
$disclaimer = get_field('disclaimer', 'options');
if ($disclaimer) { ?>
    <div class="disclaimer m-auto text-sm <?php echo $args['classes_disclaimer'] ? $args['classes_disclaimer'] : 'text-smoke' ?> text-smoke mt-2 prose-sm "><?php echo $disclaimer ?></div>
<?php } ?>
<?php $thank_you_message = get_field('thank_you_message', 'options') ?: '';
?>
<div class="contacts__success <?php echo $args['classes_thankyou'] ? $args['classes_thankyou'] : 'text-white'  ?> ">
    <span class="icon-check-circle <?php echo $args['classes_thankyou'] ? $args['classes_thankyou'] : 'text-white'  ?> ">
        <img src="<?php echo get_template_directory_uri() . '/_assets/src/img/mail-sent.png' ?>" alt="Mail sent">
    </span>
    <h3><?php echo $thank_you_message ? $thank_you_message['title'] : 'Your message has been sent' ?> </h3>
    <p><?php echo $thank_you_message ? $thank_you_message['description'] : 'Thank you for contacting Big Auto, a representative will be in touch within 24 hours.' ?></p>
    <button class="btn reset-form">
        <span>
            <?php echo $thank_you_message ? $thank_you_message['button'] : 'Send New Message' ?>
        </span>
        <span class="btn-fade-in transition-all duration-500 ease-in-out opacity-0 w-0  block">
            ⟶
        </span>
    </button>
</div>
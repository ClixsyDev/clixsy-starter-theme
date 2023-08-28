<?php 
// Custom validation for CF7 email field
add_filter( 'wpcf7_validate_email*', 'custom_email_validation_filter', 20, 2 );
add_filter( 'wpcf7_validate_email', 'custom_email_validation_filter', 20, 2 );

function custom_email_validation_filter( $result, $tag ) {
    $tag = new WPCF7_FormTag( $tag );

    $name = $tag->name;
    $value = isset( $_POST[$name] ) ? trim( $_POST[$name] ) : '';

    if ( strpos( $value, '@mailinator.com' ) !== false ) {
        $result->invalidate( $tag, "The email address appears to be invalid. Please use a different email." );
    }

    return $result;
}

// Add action to CF7
add_action( 'wpcf7_before_send_mail', 
function( $contact_form, &$abort, $submission ) {
    $your_email = $submission->get_posted_data( 'client_email' );

    if ( strpos( $your_email, '@mailinator.com' ) !== false ) {
        $abort = true;
    }
},
10, 3 );
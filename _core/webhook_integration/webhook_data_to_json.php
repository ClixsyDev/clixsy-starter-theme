<?php
add_action('wpcf7_mail_sent', 'my_custom_mail_sent');
function my_custom_mail_sent($contact_form) {
    $remove_litify_integration = get_field('remove_litify_integration', 'options');

    if (!$remove_litify_integration) {

        $map_fields_and_forms  = get_field('map_fields_and_forms', 'options');
        $form_id = $contact_form->id();
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        foreach ($map_fields_and_forms as $key => $fields_and_forms) {
            foreach ($fields_and_forms['select_form'] as $acf_form_id) {

                if ($acf_form_id == $form_id) {
                    $url = $fields_and_forms['endpoint'];

                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_VERBOSE, true);


                    $headers = array(
                        "Content-Type: application/json",
                    );
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


                    $posted_data = $submission->get_posted_data();
                    $acf_mapped_fields = $fields_and_forms['fields'];
                    $empty_arr = [];

                    foreach ($posted_data as $p_id => $post_data) {
                        //for each item in array 1
                        foreach ($acf_mapped_fields as $f_id => $acf_data) {
                            if ($p_id == $acf_data['form_submission_field']) {
                                $empty_arr[$acf_data['third_party_field']] = $post_data;
                            }
                        }
                    }
                    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($empty_arr));

                    //for debug only!
                    // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                    $resp = curl_exec($curl);
                    $responseInfo = curl_getinfo($curl);
                    curl_close($curl);

                    // logging everything
                    wh_log($resp, $responseInfo);
                }
            }
        }
    }


    // to get submission data
    $submission = WPCF7_Submission::get_instance();
    $posted_data = $submission->get_posted_data();
}

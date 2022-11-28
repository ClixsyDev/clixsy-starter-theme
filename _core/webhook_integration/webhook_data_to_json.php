<?php

function wh_log($log_msg, $log_msg_info = '') {
    $log_filename = WP_CONTENT_DIR . "/litify-log/";
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename . 'log_' . date('Y-M-d') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\r\n" . ' ======================= Start ' . date('Y/m/d H:i:s') . ' ======================' . "\r\n" . json_encode($log_msg_info) . "\r\n" . ' ======================= end of log ======================' . "\n", FILE_APPEND);
}


add_action('wpcf7_mail_sent', 'webhook_integration_clixsy');
function webhook_integration_clixsy($contact_form) {
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
                            } else {
                                $empty_arr[$acf_data['third_party_field']] = $acf_data['default_value'] ?: '';
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
}

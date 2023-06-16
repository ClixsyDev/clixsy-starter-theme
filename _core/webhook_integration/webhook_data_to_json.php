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
        $map_fields_and_forms = get_field('map_fields_and_forms', 'options');
        $form_id = $contact_form->id();
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();



        foreach ($map_fields_and_forms as $key => $fields_and_forms) {
            if (!$fields_and_forms['disable_single_integration']) {
                foreach ($fields_and_forms['select_form'] as $acf_form_id) {
                    if ($acf_form_id == $form_id) {
                        $url = $fields_and_forms['endpoint'];
                        $curl = curl_init($url);
                        curl_setopt_array($curl, [
                            CURLOPT_URL => $url,
                            CURLOPT_POST => true,
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_VERBOSE => true,
                            CURLOPT_HTTPHEADER => [
                                "Content-Type: application/json",
                            ],
                        ]);

                        $acf_mapped_fields = $fields_and_forms['fields'];
                        $empty_arr = [];

                        foreach ($acf_mapped_fields as $f_id => $acf_data) {
                            $empty_arr[$acf_data['third_party_field']] = $acf_data['default_value'] ?: '';
                        }

                        foreach ($posted_data as $p_id => $post_data) {
                            foreach ($acf_mapped_fields as $f_id => $acf_data) {
                                if ($p_id == $acf_data['form_submission_field']) {
                                    $empty_arr[$acf_data['third_party_field']] = $post_data;
                                    break;
                                }
                            }
                        }


                        // additional fields to array
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
                        $post_id = $posted_data['post_id'];
                        $post_url = get_permalink($post_id);
                        $post_name = get_post($post_id)->post_name;
                        $post_title = get_the_title($post_id);
                        $remote_ip = $_SERVER['REMOTE_ADDR'];



                        $empty_arr['_user_agent'] =  $user_agent;
                        $empty_arr['_post_id'] =  $post_id;
                        $empty_arr['_post_url'] =  $post_url;
                        $empty_arr['_post_name'] =  $post_name;
                        $empty_arr['_post_title'] =  $post_title;
                        $empty_arr['_remote_ip'] =  $remote_ip;

                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($empty_arr));

                        // Uncomment the following lines for debugging only!
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
}

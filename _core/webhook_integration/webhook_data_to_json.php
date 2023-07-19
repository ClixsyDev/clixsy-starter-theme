<?php

function wh_log($log_msg, $log_msg_info = '') {
    $log_filename = WP_CONTENT_DIR . "/litify-log/";
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename . 'log_' . date('Y-M-d') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data,  "\r\n" . ' ======================= Start ' . date('Y/m/d H:i:s') . ' ======================' . "\r\n" . $log_msg . "\r\n" . json_encode($log_msg_info) . "\r\n" . "\r\n" . ' ======================= end of log ======================' . "\n" . "\r\n", FILE_APPEND);
}

function stringify($value) {
    if (is_array($value)) {
        return implode(', ', $value);
    } else {
        return (string) $value;
    }
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
                        $content_type = $fields_and_forms['content_type']['label'];
                        $curl = curl_init($url);
                        curl_setopt_array($curl, [
                            CURLOPT_URL => $url,
                            CURLOPT_POST => true,
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_VERBOSE => true,
                            CURLOPT_HTTPHEADER => [
                                $content_type
                            ],
                        ]);


                        // additional fields to array
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
                        $post_id = $posted_data['post_id'];
                        $post_url = get_permalink($post_id);
                        $post_name = get_post($post_id)->post_name;
                        $post_title = get_the_title($post_id);
                        $remote_ip = $_SERVER['REMOTE_ADDR'];
                        $acf_mapped_fields = $fields_and_forms['fields'];
                        $empty_arr = [];

                        foreach ($acf_mapped_fields as $f_id => $acf_data) {
                            $empty_arr[$acf_data['third_party_field']] = $acf_data['default_value'] ?: '';
                        }

                        foreach ($posted_data as $p_id => $post_data) {
                            foreach ($acf_mapped_fields as $f_id => $acf_data) {
                                if ($acf_data['form_submission_field'] == '_post_url') {
                                    $empty_arr[$acf_data['third_party_field']] = $post_url;
                                } else if ($acf_data['form_submission_field'] == '_user_agent') {
                                    $empty_arr[$acf_data['third_party_field']] = $user_agent;
                                } else if ($acf_data['form_submission_field'] == '_post_id') {
                                    $empty_arr[$acf_data['third_party_field']] = $post_id;
                                } else if ($acf_data['form_submission_field'] == '_post_name') {
                                    $empty_arr[$acf_data['third_party_field']] = $post_name;
                                } else if ($acf_data['form_submission_field'] == '_post_title') {
                                    $empty_arr[$acf_data['third_party_field']] = $post_title;
                                } else if ($acf_data['form_submission_field'] == '_remote_ip') {
                                    $empty_arr[$acf_data['third_party_field']] = $remote_ip;
                                } else if ($p_id == $acf_data['form_submission_field']) {
                                    $preppedned_value = !empty($acf_data['preppended_value']) ? $acf_data['preppended_value'] : '';
                                    $empty_arr[$acf_data['third_party_field']] = $preppedned_value . stringify($post_data);
                                    break;
                                }
                            }
                        }

                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($empty_arr));

                        // Uncomment the following lines for debugging only!
                        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                        $resp = curl_exec($curl);
                        $responseInfo = curl_getinfo($curl);
                        curl_close($curl);

                        // logging everything
                        wh_log($resp, $responseInfo);


                        $jsonResponse = json_decode($resp, true);  // Convert JSON to associative array

                        // Check if 'success' key is present and is true
                        $success = isset($jsonResponse['success']) && $jsonResponse['success'] === true;

                        // Check if 'status' key is present and is 'success'
                        $status = isset($jsonResponse['status']) && $jsonResponse['status'] === 'success';

                        if (!$success && !$status) {
                            $error_notification_emails = get_field('error_notification_emails', 'options');
                            if (!empty($error_notification_emails)) {
                                $subject = 'BigAuto Hook Failed';
                                $headers = array('from: no-reply@host.clixsy.com');

                                wp_mail($error_notification_emails, $subject, $resp . "\n", $headers);
                            }
                        }
                    }
                }
            }
        }
    }
}


function redirect_cf7_js_variable() {
    // Retrieve the value you want to pass to JavaScript
    $redirect_forms_repeater = get_field('redirect_forms_repeater', 'options');

    // Echo the JavaScript variable within a <script> tag
    echo '<script>';
    echo 'var cf7RedirectToArray = ' . json_encode($redirect_forms_repeater) . ';';
    echo '</script>';
}
add_action('wp_footer', 'redirect_cf7_js_variable');

<?php
//LITIFY API

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


function litify_hook_callback() {
    $remove_litify_integration = get_field('remove_litify_integration', 'options');
    $litify_integration_url = get_field('litify_integration_url', 'options');
    if (!$remove_litify_integration && !empty($litify_integration_url)) {
        $data = json_decode(file_get_contents('php://input'), true);

        $firstName = $data['client_first_name'] ?: '';
        $lastName = $data['client_last_name'] ?: '';
        $email = $data['client_email'] ?: '';
        $phone = $data['client_phone'] ?: '';
        $description = $data['client_message'] ?: '';
        $zip = $data['client_zip'] ?: '';
        $gclid = $data['GCLID'] ?: '';
        $litify_case = $data['client_case_type'] ?: '';

        // Litify has preset case types.
        // This is not necessary for Big Auto at this time

        // switch ($data['client_case_type']) {
        //     case "Auto Accident":
        //         $litify_case = 'Auto (AA)';
        //         break;
        //     case "Bankruptcy":
        //         $litify_case = 'Bankruptcy';
        //         break;
        //     case "Criminal Defense":
        //         $litify_case = 'Criminal';
        //         break;
        //     case "Employment Law":
        //         $litify_case = 'Labor';
        //         break;
        //     case "Personal Injury":
        //         $litify_case = 'General Injury';
        //         break;
        //     case "Social Security Disability":
        //         $litify_case = 'Social Security';
        //         break;
        //     case "Workers' Compensation":
        //         $litify_case = "Workers' Comp (WC)";
        //         break;
        //     case "Other":
        //         $litify_case = 'Other';
        //         break;
        // }

        $url = $litify_integration_url;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_VERBOSE, true);


        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
    {
     "user" : "bigautoapi",
     "pass": "Le@ds2022!",
     "SKU" : "NEWSKU",
     "version": "1",
     "action" : "add",
     "c_first" : "{$firstName}",
     "c_last" : "{$lastName}",
     "c_homephone" : "{$phone}",
     "c_email": "{$email}",
     "custom4" : "{$description}",
     "custom5" : "{$litify_case}",
     "custom6" : "{$zip}",
     "custom3" : "{$gclid}"
    }
    DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $responseInfo = curl_getinfo($curl);
        // var_dump($responseInfo);
        var_dump($resp);
        curl_close($curl);

        // logging everything
        wh_log($resp, $responseInfo);
        wp_die();
    }
    wp_die();
}


add_action('wp_ajax_litify_hook', 'litify_hook_callback');
add_action('wp_ajax_nopriv_litify_hook', 'litify_hook_callback');

<?php
//LITIFY API

function wh_log($log_msg)
{
    $log_filename = WP_CONTENT_DIR . "/litify-log/log";
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename . '/log_' . date('d-M-Y') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}


function litify_hook_callback()
{

    $data = json_decode(file_get_contents('php://input'), true);
   
    $firstName = $data['client_name'] ?: '-';
    $lastName = $data['client_last_name'] ?: '-';
    $email = $data['client_email'] ?: '-';
    $phone = $data['client_phone'] ?: '-';
    $description = $data['client_message'] ?: '-';
    $zip = $data['client_zip'] ?: '-';
    $gclid = $data['gclid_field'] ?: '-';
    $litify_case = $data['client_case_type'] ?: '-';

    switch ($data['client_case_type']) {
        case "Auto Accident":
            $litify_case = 'Auto (AA)';
            break;
        case "Bankruptcy":
            $litify_case = 'Bankruptcy';
            break;
        case "Criminal Defense":
            $litify_case = 'Criminal';
            break;
        case "Employment Law":
            $litify_case = 'Labor';
            break;
        case "Personal Injury":
            $litify_case = 'General Injury';
            break;
        case "Social Security Disability":
            $litify_case = 'Social Security';
            break;
        case "Workers' Compensation":
            $litify_case = "Workers' Comp (WC)";
            break;
        case "Other":
            $litify_case = 'Other';
            break;
    }

    $url = "https://webhook.site/6ce2ffe1-d7e5-41e8-85c4-42720e287a31";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = <<<DATA
    {  
     "firstName" : "{$firstName}",
     "lastName" : "{$lastName}",
     "email": "{$email}",
     "phone" : "{$phone}",
     "description" : "{$description}",
     "caseType" : "{$litify_case}",
     "Case_Postal_Code" : "{$zip}",
     "websource" : "Website",
     "intakeStatus": "Open",
     "gclid" : "{$gclid}"
    }
    DATA;

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    // $responseInfo = curl_getinfo($curl);
    // var_dump($responseInfo);
    var_dump($resp);
    curl_close($curl);

    // logging everything
    wh_log($resp);

    wp_die();
}


add_action('wp_ajax_litify_hook', 'litify_hook_callback');
add_action('wp_ajax_nopriv_litify_hook', 'litify_hook_callback');

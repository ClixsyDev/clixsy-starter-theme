<?php
// Sucess
function form_entry_sucess_callback() {
    $data = json_decode(file_get_contents('php://input'), true);
    function createPostBody($data) {
        $c = true;
        $message = '';
        foreach ($data as $key => $value) {
            $inputName = $value['name'];
            $inputValue = $value['value'] ?: '-';
            $message .= "
                " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$inputName</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$inputValue</td>
                </tr>
                ";
        }
        $message_body = "<table style='width: 100%;'>$message</table>";
        return $message_body;
    }
    // Post meta data
    function createPostMeta($data_json) {
        $meta_values = [];
        foreach ($data_json as $value) {
            $meta_values[$value['name']] =  $value['value'];
        }

        return $meta_values;
    }

    $post_number = wp_count_posts('form-entry')->publish;
    $post_data = array(
        'ID' => !empty($data['post_id']) ? $data['post_id'] : '',
        'post_title'    => 'Entry #' . ++$post_number,
        'post_content'  => createPostBody($data),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'form-entry',
        'post_category' => category_exists(9) ? array(9) : '',
        'meta_input' => createPostMeta($data),
    );

var_dump($data);
    $insert_post = wp_insert_post($post_data);
    wp_die();
}
add_action('wp_ajax_form_entry_sucess', 'form_entry_sucess_callback');
add_action('wp_ajax_nopriv_form_entry_sucess', 'form_entry_sucess_callback');


// Fail
function form_entry_fail_callback() {
    $data = json_decode(file_get_contents('php://input'), true);
    function createPostBodyFail($data) {
        $c = true;
        $message = '';
        foreach ($data as $key => $value) {
            $inputName = $value['name'];
            $inputValue = $value['value'] ?: '-';
            $message .= "
                " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$inputName</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$inputValue</td>
                </tr>
                ";
        }
        $message_body = "<table style='width: 100%;'>$message</table>";
        return $message_body;
    }
    // Post meta data
    function createPostMetaFail($data_json) {
        $meta_values = [];
        foreach ($data_json as $value) {
            $meta_values[$value['name']] =  $value['value'];
        }

        return $meta_values;
    }

    $post_number = wp_count_posts('form-entry')->publish;
    $post_data = array(
        'ID' => !empty($data['post_id']) ? $data['post_id'] : '',
        'post_title'    => 'Entry #' . ++$post_number,
        'post_content'  => createPostBodyFail($data),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'form-entry',
        'post_category' => category_exists(10) ? array(10) : '',
        'meta_input' => createPostMetaFail($data),
    );

var_dump($data);
    $insert_post = wp_insert_post($post_data);
    wp_die();
}
add_action('wp_ajax_form_entry_fail', 'form_entry_fail_callback');
add_action('wp_ajax_nopriv_form_entry_fail', 'form_entry_fail_callback');
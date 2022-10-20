<?php
add_action('manage_posts_extra_tablenav', 'admin_post_list_add_export_button', 20, 1);

function admin_post_list_add_export_button($which)
{
    global $typenow;
    if ('form-entry' === $typenow && 'top' === $which) { ?>
        <input type="submit" name="aweb_export_posts" class="button button-primary" value="<?php _e('Export Posts'); ?>" />
<?php
    }
}
function aweb_export_posts()
{
    if (isset($_GET['aweb_export_posts'])) {
        $args = array(
            'post_type' => 'form-entry',
            'post_status' => 'any',
        );

        if (isset($_GET['post'])) {
            $args['post__in'] = $_GET['post'];
        } else {
            $args['posts_per_page'] = -1;
        }

        global $post;
        $arr_post = get_posts($args);
        if ($arr_post) {

            header('Content-type: text/csv');
            header('Content-Disposition: attachment; filename="wp-posts.csv"');
            header('Pragma: no-cache');
            header('Expires: 0');

            $file = fopen('php://output', 'w');
            $titles = array('Post ID', 'Post Title', 'URL');
            foreach ($arr_post as $key => $post) {
                if ($key == 0) {
                    foreach (get_post_meta(get_the_ID()) as $key => $item) {
                        if ($key == '_edit_lock' || $key == '_checked_terms' || $key == 'checked_terms' || $key == '_edit_last') {
                            continue;
                        } else {
                            array_push($titles, $key);
                        }
                    }
                    break;
                }
            }



            fputcsv($file, $titles);

            foreach ($arr_post as $post) {
                setup_postdata($post);

                $meta_fields = array(get_the_ID(), get_the_title(), get_the_permalink());
                foreach (get_post_meta(get_the_ID()) as $key => $item) {
                    if ($key == '_edit_lock' || $key == '_checked_terms' || $key == 'checked_terms' || $key == '_edit_last') {
                        continue;
                    } else {
                        array_push($meta_fields, $item[0]);
                    }
                }

                $categories = get_the_category();
                $cats = array();
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        $cats[] = $category->name;
                    }
                }

                $post_tags = get_the_tags();
                $tags = array();
                if (!empty($post_tags)) {
                    foreach ($post_tags as $tag) {
                        $tags[] = $tag->name;
                    }
                }

                fputcsv($file, $meta_fields);
            }

            exit();
        }
    }
}

add_action('admin_init', 'aweb_export_posts');

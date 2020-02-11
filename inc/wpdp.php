<?php
//Databse Working
?>
<?php
// DB functions
function thcbin_like_dislike_db(){   
    global $wpdb;
    $table_name = $wpdb->prefix.'thcbin_like_dislike';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time  timestamp NOT NULL DEFAULT current_timestamp(),
        user_id mediumint(9) NOT NULL,
        post_id mediumint(9) NOT NULL,
        like_count mediumint(9) NOT NULL,
        dislike_count mediumint(9) NOT NULL,
        PRIMARY KEY  (id)
    )$charset_collate;";
    require_once ABSPATH.'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
?>
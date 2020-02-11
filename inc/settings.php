<?php 
//Settings Page
?>
<?php 
// Add Settings in Wordpress
function thcbin_like_dislike_settings_add(){
    // Add Settings
    register_setting( 'thcbin_like_dislike_settings', 'thcbin_like_btn_label');
    register_setting( 'thcbin_like_dislike_settings', 'thcbin_dislike_btn_label');
    add_settings_section( 'thcbin_like_dislike_settings_label_section', 'THCBin Labels', 'thcbin_like_dislike_settings_label_cb','thcbin_like_dislike_settings' );
    add_settings_field( 'thcbin_like_btn', 'Like Button Lable', 'thcbin_like_btn_label_cb', 'thcbin_like_dislike_settings', 'thcbin_like_dislike_settings_label_section');
    add_settings_field( 'thcbin_dislike_btn', 'DisLike Button Lable', 'thcbin_dislike_btn_label_cb', 'thcbin_like_dislike_settings', 'thcbin_like_dislike_settings_label_section');
}
add_action('admin_init', 'thcbin_like_dislike_settings_add' );
// Callback Functions
function thcbin_like_dislike_settings_label_cb(){
}
function thcbin_like_btn_label_cb(){
     // get the value of the setting we've registered with register_setting()
     $setting = get_option('thcbin_like_btn_label');
     // output the field
     ?>
     <input type="text" name="thcbin_like_btn_label" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
     <?php
}
function thcbin_dislike_btn_label_cb(){
     // get the value of the setting we've registered with register_setting()
     $setting = get_option('thcbin_dislike_btn_label');
     // output the field
     ?>
     <input type="text" name="thcbin_dislike_btn_label" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
     <?php
}
?>
<?php
//Settings Page
?>
<?php
    if (!is_admin()) {
        return;
    }
?>
    <div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
                settings_fields('thcbin_like_dislike_settings');
                do_settings_sections( 'thcbin_like_dislike_settings' );
                submit_button( 'Save' );
            ?>
        </form>
    </div>
<?php
?>
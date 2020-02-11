<?php 
//Mian Page
?>
<?php 
//Add Script in fronend header
if(!function_exists('thcbin_add_scripts')){
	function thcbin_add_scripts(){
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'thcbin-plugin-js', PLUGIN_DIR_THCBIN . 'assets/js/main.js','jQuery', THCBIN_PLUGIN_VERSION, true);
		wp_enqueue_style( 'thcbin-plugin-css', PLUGIN_DIR_THCBIN. 'assets/css/style.css' );
		wp_enqueue_style( 'thcbin-plugin-font-awesome', PLUGIN_DIR_THCBIN. 'assets/fontawesome/css/all.min.css', array(), NULL );
		// Ajax js
		wp_enqueue_script( 'thcbin-plugin-ajax', PLUGIN_DIR_THCBIN . 'assets/js/ajax.js','jQuery', THCBIN_PLUGIN_VERSION, true);
		wp_localize_script( 'thcbin-plugin-ajax', 'thcbin_ajax_url', array(
            'ajax_url' => admin_url( 'admin-ajax.php' )
        ));
	}
	add_action('wp_enqueue_scripts','thcbin_add_scripts');
}


?>
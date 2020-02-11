<?php 
//Add Menu in Admin Pannel
?>
<?php 
add_action( 'admin_menu', 'thcbin_add_menu', 1 );
function thcbin_add_menu (){
	add_menu_page(
		'THCBin Like Disklike',   //page Title
		'Like Disklike',    //menu Title
		'administrator',    //Capability
		'thcbin_like_settings',			//Menu slug
		'thcbin_like_settings',  //callable function
		plugins_url('/assets/img/icon.png',__FILE__ ),	  //icon URL later add
		1
	);
	
}
function thcbin_like_settings(){
	include(plugin_dir_path( __FILE__ ) .'pages/settings.php');
}
?>
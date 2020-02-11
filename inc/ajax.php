<?php 
//Mian Page
?>
<?php 
// Ajax for Button.
	function thcbin_plugin_like_btn_ajax_action()
	{
		global $wpdb;
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		$table_name = $wpdb->prefix.'thcbin_like_dislike';
		if(isset ($_POST['pid']) && isset ($_POST['uid'])){
			$user_id=$_POST['uid'];
			$post_id=$_POST['pid'];
			$check_like = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND like_count=1" );
			$check_dislike = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND dislike_count=1" );
			$row_id;
			if($check_dislike > 0){
				$table_data= $wpdb->get_row("SELECT * FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND dislike_count=1",ARRAY_A);
				$row_id = $table_data['id'];
				$wpdb->update( 
					''.$table_name.'', 
					array( 
						'post_id' => $post_id, 
						'user_id' => $user_id,
						'dislike_count' => 0,
						'like_count' => 1

					),
					array( 'ID' => $row_id ),
					array( 
						'%d', 
						'%d', 
						'%d'
					), 
					array( '%d' )
				);
				
					echo 'You Liked this post';
			}elseif($check_like > 0){
				echo 'Sorry You already liked this post';
			}else{
				$wpdb->replace( 
					''.$table_name.'', 
					array( 
						'post_id' => $post_id, 
						'user_id' => $user_id,
						'like_count' => 1

					),
					array( 
						'%d', 
						'%d', 
						'%d'
					)
				);
				if($wpdb->insert_id){
					echo 'You Liked this post';
				}
			}
		}
		wp_die();
	}
	add_action('wp_ajax_thcbin_plugin_like_btn_ajax_action', 'thcbin_plugin_like_btn_ajax_action');
	add_action('wp_ajax_nopriv_thcbin_plugin_like_btn_ajax_action', 'thcbin_plugin_like_btn_ajax_action');
	function thcbin_plugin_dislike_btn_ajax_action()
	{
		global $wpdb;
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		$table_name = $wpdb->prefix.'thcbin_like_dislike';
		if(isset ($_POST['pid']) && isset ($_POST['uid'])){
			$user_id=$_POST['uid'];
			$post_id=$_POST['pid'];
			$check_dislike = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND dislike_count=1" );
			$check_like = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND like_count=1" );
			$row_id;
			if($check_like > 0){
				$table_data= $wpdb->get_row( "SELECT * FROM $table_name WHERE user_id=$user_id AND post_id=$post_id AND like_count=1",ARRAY_A );
				$row_id = $table_data['id'];
				$wpdb->update( 
					''.$table_name.'', 
					array( 
						'post_id' => $post_id, 
						'user_id' => $user_id,
						'like_count' => 0,
						'dislike_count' => 1

					),
					array( 'ID' => $row_id ),
					array( 
						'%d', 
						'%d', 
						'%d'
					), 
					array( '%d' )
				);
				
					echo 'You Disliked this post';
				
			}elseif($check_dislike > 0){
				echo 'Sorry You already Disliked this post';
			}
			else {
				$wpdb->replace( 
					''.$table_name.'', 
					array( 
						'post_id' => $post_id, 
						'user_id' => $user_id,
						'dislike_count' => 1

					),
					array( 
						'%d', 
						'%d', 
						'%d'
					)
				);
				
				if($wpdb->insert_id){
					echo 'You Disliked this post';
				}
			}
		}
		wp_die();
	}
	add_action('wp_ajax_thcbin_plugin_dislike_btn_ajax_action', 'thcbin_plugin_dislike_btn_ajax_action');
	add_action('wp_ajax_nopriv_thcbin_plugin_dislike_btn_ajax_action', 'thcbin_plugin_dislike_btn_ajax_action');

?>
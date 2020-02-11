<?php 
//Like Count
?>
<?php 
	function thcbin_plugin_like_dislike_count($content)
	{
		global $wpdb;
		$table_name = $wpdb->prefix.'thcbin_like_dislike';
		$post_id=get_the_ID();
		$like_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE post_id=$post_id AND like_count=1" );
		$dislike_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE post_id=$post_id AND dislike_count=1" );
		$count_result="<center>This Post has been liked <strong>".$like_count."</strong> time's and disliked <strong>".$dislike_count."</strong> time's</center>";
		$content .= $count_result;
		return $content;
	}
	add_filter( 'the_content','thcbin_plugin_like_dislike_count' );
?>
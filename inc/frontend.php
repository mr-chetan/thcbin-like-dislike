<?php 
//Mian Page
?>
<?php 
// Create Button using filter.
function thcbin_plugin_buttons($content){
	$like_btn_label= get_option( 'thcbin_like_btn_label', 'Like' );
	$dislike_btn_label= get_option( 'thcbin_dislike_btn_label', 'DisLike');

	$user_id =get_current_user_id();
	$post_id =get_the_ID();
	$btn_wrap='<div class="thcbin-buttons-container">';
	$like_btn = '<a href="javascript:;" onclick="thcbin_plugin_like_btn_ajax('.$post_id.','.$user_id.')" class="thcbin_btn like_btn"> '.$like_btn_label.' <i class="fas fa-thumbs-up"></i></a>';
	$dislike_btn = '<a href="javascript:;" onclick="thcbin_plugin_dislike_btn_ajax('.$post_id.','.$user_id.')" class="thcbin_btn dislike_btn"> '.$dislike_btn_label.' <i class="fas fa-thumbs-down"></i></a>';
	$btn_wrap_end='</div>';

	$thcbin_ajax_response='<center><div id="thcbinAjaxResponse" class="thcbin-ajax-response"><span></span></div></center>';

	$content .=$btn_wrap;
	$content .=$like_btn;
	$content .=$dislike_btn;
	$content .=$btn_wrap_end;
	$content .=$thcbin_ajax_response;
	return $content;
}
add_filter( 'the_content', 'thcbin_plugin_buttons');
?>
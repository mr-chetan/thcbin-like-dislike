// Code By Chetan from THCBin
function thcbin_plugin_like_btn_ajax(postID, usrid){
	var post_id = postID;
	var usr_id= usrid;
	jQuery.ajax({
		url: thcbin_ajax_url.ajax_url,
		type:'post',
		data:{
			action:'thcbin_plugin_like_btn_ajax_action',
			pid:post_id,
			uid:usr_id
		},
		success:function(response){
			jQuery("#thcbinAjaxResponse span").html(response);
		}
	});
}
function thcbin_plugin_dislike_btn_ajax(postID, usrid){
	var post_id = postID;
	var usr_id= usrid;
	jQuery.ajax({
		url: thcbin_ajax_url.ajax_url,
		type:'post',
		data:{
			action:'thcbin_plugin_dislike_btn_ajax_action',
			pid:post_id,
			uid:usr_id
		},
		success:function(response){
			jQuery("#thcbinAjaxResponse span").html(response);
		}
	});
}
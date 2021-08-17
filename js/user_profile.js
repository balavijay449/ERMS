$(document).ready(function(){
	$(".profile_btn").click(function(){
		$(".toggle").toggle();
	});
	$(".user_details").on("input", function(){
		$(".btn_submit").attr("disabled", false);
	});
});
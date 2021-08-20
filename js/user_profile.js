$(document).ready(function(){
	$(".profile_click").click(function(){
		$(".toggle").toggle();
	});
	
	$(".toggle button").click(function(){
		$(".toggle").hide();
	});

	$(".user_details").on("input", function(){
		$(".btn_submit").attr("disabled", false);
	});

	// when click the profile.....

	$(".profile_btn").click(function(){
		$(".section_edit_experience").hide();
		$(".section_education").hide();
		$(".section_edit_education").hide();
		$(".section_experience").hide();
		$(".section_profile").show();
		$(".section_dashboard").hide();
	});
	
	// when click the dashboard......

	$(".dashboard_btn").click(function(){
		$(".section_edit_experience").hide();
		$(".section_education").hide();
		$(".section_edit_education").hide();
		$(".section_experience").hide();
		$(".section_profile").hide();
		$(".section_dashboard").show();
	});

	// when click the experience button....

	$(".experience_btn").click(function(){
		$(".section_edit_experience").hide();
		$(".section_education").hide();
		$(".section_edit_education").hide();
		$(".section_profile").hide();
		$(".section_dashboard").hide();
		$(".section_experience").show();
	});

	// when click the edit_experience button....

	$(".edit_experience_btn").click(function(){
		$(".section_edit_experience").show();
		$(".section_education").hide();
		$(".section_edit_education").hide();
		$(".section_profile").hide();
		$(".section_dashboard").hide();
		$(".section_experience").hide();
	});

	// when click the education button....

	$(".education_btn").click(function(){
		$(".section_edit_experience").hide();
		$(".section_education").show();
		$(".section_edit_education").hide();
		$(".section_profile").hide();
		$(".section_dashboard").hide();
		$(".section_experience").hide();
	});

	// when click the edit_education button....

	$(".edit_education_btn").click(function(){
		$(".section_edit_experience").hide();
		$(".section_education").hide();
		$(".section_edit_education").show();
		$(".section_profile").hide();
		$(".section_dashboard").hide();
		$(".section_experience").hide();
	});
});
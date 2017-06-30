$(document).ready(function(){
	$("#user-button").click(function(){
		$("#user-menu").fadeIn("fast");
		$("#user-button").css("display", "none");
		$("#user-button-close").css("display", "inline");
	});
	$("#user-button-close, #container").click(function(){
		$("#user-menu").fadeOut("fast");
		$("#user-button").css("display", "inline");
		$("#user-button-close").css("display", "none");
	});
});
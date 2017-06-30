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
	$("#logout-link").click(function(){
		window.location.href = "logout.php";
	});

	// Side Menu Tooltip
	$("#home-btn").mouseover(function(){
		$("#homebtn-tooltip").fadeIn("slow");
	});
	$("#home-btn").mouseleave(function(){
		$("#homebtn-tooltip").css("display", "none");
	});

	$("#discus-btn").mouseover(function(){
		$("#discusbtn-tooltip").fadeIn("slow");
	});
	$("#discus-btn").mouseleave(function(){
		$("#discusbtn-tooltip").css("display", "none");
	});

	$("#msg-btn").mouseover(function(){
		$("#msgbtn-tooltip").fadeIn("slow");
	});
	$("#msg-btn").mouseleave(function(){
		$("#msgbtn-tooltip").css("display", "none");
	});

	$("#notif-btn").mouseover(function(){
		$("#notifbtn-tooltip").fadeIn("slow");
	});
	$("#notif-btn").mouseleave(function(){
		$("#notifbtn-tooltip").css("display", "none");
	});

	$("#bookmark-btn").mouseover(function(){
		$("#bookmarkbtn-tooltip").fadeIn("slow");
	});
	$("#bookmark-btn").mouseleave(function(){
		$("#bookmarkbtn-tooltip").css("display", "none");
	});

	$("#group-btn").mouseover(function(){
		$("#groupbtn-tooltip").fadeIn("slow");
	});
	$("#group-btn").mouseleave(function(){
		$("#groupbtn-tooltip").css("display", "none");
	});
});
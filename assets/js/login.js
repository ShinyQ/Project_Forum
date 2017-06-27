$(document).ready(function(){
	$("#login-form").submit(login);
	function login(e){
		$("#process-animation").css("display", "inline-block");
		$("#submit").css("display", "none");
		$.ajax({
			url: "login_process.php",
			method: "POST",
			dataType: "text",
			data: $(this).serialize(),
			success: function(data){
				if(data == "error"){
					setTimeout(function(){
						$("#error-notif").fadeIn("slow");
						$("#process-animation").css("display", "none");
						$("#submit").css("display", "inline-block");
					}, 400);
					setTimeout(function(){
						$("#error-notif").css("display", "none");
						$("#error-notif2").fadeIn("slow");
					}, 1500);
					setTimeout(function(){
						$("#error-notif2").fadeOut("slow");
					}, 3000);
				}else{
					setTimeout(function(){
						$("#redirecting-animation").fadeIn("slow");
					}, 400);
					setTimeout(function(){
						window.location.reload();
					}, 700);
				}
			}
		});
		e.preventDefault();
	}
});
$("#submit").click(function(){
	var username = $("username").val();
	var password = $("password").val();
	if(username == '' || password == ''){
		swal({
			title: "fields Enpty!!",
			text : "Please check the Missing Fields",
			icon: "success",
			button: "OK"
		});
	}else{
		swal({
			title: "Successfully Logged in",
			icon: "success"
			button: "OK"
		});
	}
}
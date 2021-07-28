// SIDEBAR MOVEMENT
function toggleSidebar(ref){
	document.getElementById("sidebar").classList.toggle('active');
}


// PASSWORD VALIDATION
$(document).ready(function(){
$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	
  			
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("zmdi-close");
		$("#8char").addClass("zmdi-check");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("zmdi-check");
		$("#8char").addClass("zmdi-close");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("zmdi-close");
		$("#ucase").addClass("zmdi-check");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("zmdi-check");
		$("#ucase").addClass("zmdi-close");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("zmdi-close");
		$("#lcase").addClass("zmdi-check");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("zmdi-check");
		$("#lcase").addClass("zmdi-close");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("zmdi-close");
		$("#num").addClass("zmdi-check");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("zmdi-check");
		$("#num").addClass("zmdi-close");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("zmdi-close");
		$("#pwmatch").addClass("zmdi-check");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("zmdi-check");
		$("#pwmatch").addClass("zmdi-close");
		$("#pwmatch").css("color","#FF0004");
	}
});
});










{/* <script type="text/javascript"> */}
	
}
{/* </script> */}

{/* <script>

	
$(document).ready(function(){
	$("input[type=password]").keyup(function(){
		var ucase = new RegExp("[A-Z]+");
		var lcase = new RegExp("[a-z]+");
		var num = new RegExp("[0-9]+");
		
		
				  
		if($("#password1").val().length >= 8){
			$("#8char").removeClass("zmdi-close");
			$("#8char").addClass("zmdi-check");
			$("#8char").css("color","#00A41E");
		}else{
			$("#8char").removeClass("zmdi-check");
			$("#8char").addClass("zmdi-close");
			$("#8char").css("color","#FF0004");
		}
		
		if(ucase.test($("#password1").val())){
			$("#ucase").removeClass("zmdi-close");
			$("#ucase").addClass("zmdi-check");
			$("#ucase").css("color","#00A41E");
		}else{
			$("#ucase").removeClass("zmdi-check");
			$("#ucase").addClass("zmdi-close");
			$("#ucase").css("color","#FF0004");
		}
		
		if(lcase.test($("#password1").val())){
			$("#lcase").removeClass("zmdi-close");
			$("#lcase").addClass("zmdi-check");
			$("#lcase").css("color","#00A41E");
		}else{
			$("#lcase").removeClass("zmdi-check");
			$("#lcase").addClass("zmdi-close");
			$("#lcase").css("color","#FF0004");
		}
		
		if(num.test($("#password1").val())){
			$("#num").removeClass("zmdi-close");
			$("#num").addClass("zmdi-check");
			$("#num").css("color","#00A41E");
		}else{
			$("#num").removeClass("zmdi-check");
			$("#num").addClass("zmdi-close");
			$("#num").css("color","#FF0004");
		}
		
		if($("#password1").val() == $("#password2").val()){
			$("#pwmatch").removeClass("zmdi-close");
			$("#pwmatch").addClass("zmdi-check");
			$("#pwmatch").css("color","#00A41E");
		}else{
			$("#pwmatch").removeClass("zmdi-check");
			$("#pwmatch").addClass("zmdi-close");
			$("#pwmatch").css("color","#FF0004");
		}
	});
	});


</script> */}
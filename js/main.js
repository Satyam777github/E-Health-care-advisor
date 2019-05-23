$(document).ready(function(){
	$("#firstb").click(function(){
		$("#first").css("display", "none");
		$("#second").css("display", "block");
		$("#progressBar").css("width", "40%");
		$("#progressBar").html("Terms of Service");

	});
	$("#secondb").click(function(){
		if($("#privacy").prop("checked") == true){
			$("#second").hide();
			$("#third").show();
			$("#progressBar").css("width", "75%");
			$("#progressBar").html("Risk Factors");

          }
         else if($("#privacy").prop("checked") == false){
            alert("Please check the Terms of Service");
         }
	});
	$("#thirdb").click(function(){
		$("#third").hide();
		$("#fourth").show();

		$("#progressBar").css("width", "100%");
		$("#progressBar").html("Symptoms");

	});
	
	$("#secondp").click(function(){

		$("#second").hide();
		$("#first").show();

		$("#progressBar").css("width", "20%");
		$("#progressBar").html("Introduction");

	});
	$("#thirdp").click(function(){

		$("#third").hide();
		$("#second").show();

		$("#progressBar").css("width", "40%");
		$("#progressBar").html("Terms of Service");

	});
	$("#fourthp").click(function(){

		$("#fourth").hide();
		$("#third").show();

		$("#progressBar").css("width", "75%");
		$("#progressBar").html("Risk Factors");

	});
});
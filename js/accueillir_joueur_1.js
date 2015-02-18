$(document).ready(function() {

	$("#credits").css("display", "none");

	$("#pseudo").on("change",function(){
		var pseudo = this.value;
		$.ajax({
			url: 'php/get_credit_by_pseudo.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,
			data: "pseudo="+pseudo
		})
		.done(function(data) {
			var credit = -1
			if(data != []){
				credit = data;
			}
			if(credit != -1){
				$("#credits").css("display", "block");
				$("#credits span").text(credit);
			}else{
				$("#credits").css("display", "none");
			}
		});
	});
});
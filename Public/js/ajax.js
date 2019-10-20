$(document).ready(function(){
	function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  return emailReg.test( $email );
	}
	//Subscribe
	$('#sub-click').click(function(){
		
		var email = $('#sub-inp').val();

		if(email == "")
			$('#sub-cont').html("Bạn chưa nhập email!");
		else if(!validateEmail(email))
			$('#sub-cont').html("Email không hợp lệ");
		else
			$.post("/Ajax/main.php",{"email":email,"n":"subscribeAdd"},function(data){
				$('#sub-cont').html(data);
			});
		
	});

	//Feedback
	$('#feed-click').click(function(){
		
		var name = $('#feed-name').val();
		var cont = $('#feed-cont').val();
		if(name == "" || cont == "")
			$('#feed-result').html("Không được để trống mục nào!");
		else
			$.post("/Ajax/main.php",{"name":name,"cont":cont,"n":"feedbackAdd"},function(data){
				$('#feed-result').html(data);
			});
	});


	//Post Like
	$('.like-click').click(function(){
		var val = $(this).attr("like");
		var id = $(this).attr("id");
		$.post("/Ajax/main.php",{"id":id,"n":"postLike"},function(data){
			$('viewer-judge').html(data);
		})
	});

});
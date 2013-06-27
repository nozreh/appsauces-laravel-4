 $(document).ready( function(){
 	$("#send-message .button").click(function() {
	var email = $("#email").val();
	var message = $("#message").val();
	var dataString = 'email=' + email + '&message=' + message;
	
	if(email && message){
		$.ajax({
			type: "POST",
			url: "mailer/mailer.php",
			data: dataString,
			success: function() {
			  alert("Thank you bro! We will contact you as soon as possible!");
			  $('#email').val('');
			  $('#message').val('');
			}
		});
	
		return false;
		}
	else
		alert("Please complete the contact form properly..");
		return;
  });
});
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
	<meta name="author" content="Robert Roth" />
	<meta name="description" content="Splash page for the appsauces, a media company catering to starting business who want to venture online business and marketing, yeap simply splashing!" />
	<title>appsauces? home</title>
	<link href='{{ asset('assets/css/normalize.css') }}' rel='stylesheet' type='text/css'>
	<link href='{{ asset('assets/css/main.css') }}' rel='stylesheet' type='text/css'>
	<!-- G-Font like a G -->
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<!-- Start Facebook Basic Tags -->
	<meta name="title" content = "Appsauces" />	
	<meta name="description" content="We spice up social media apps for your marketing needs."  /> 
	<meta name="t" content="Appsauces" />	
	<meta name="d" content="We spice up social media apps for your marketing needs."> 

	<!-- Start Facebook (Open Graph) Tags -->
	<meta property="og:title" content = "Appsauces" />
	<meta property="og:type" content="article"/>
	<meta property="og:site_name" content="<?php print ucwords('Appsauces');?>"/>
	<meta property="fb:admins" content="iherzdais"/>
	<meta property="og:description" content="We spice up social media apps for your marketing needs."/>
	<meta property="og:url" content="http://www.appsauces.com"/>
	<meta property="og:image" content="http://www.appsauces.com/img/demo/appsauces.png"/>	
	<link rel="image_src" href="{{ asset('assets/img/appsauces.png') }}" />

	<!-- End Facebook Basic Tags -->
    <!-- Loading layout -->
    
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="logo">
			<h1>appsauces</h1>
			<p>Spice up your apps . .</p>
			<br>
		</div>
		<div class="wider">
			<img src="/assets/img/appglass.png" title="Splashing!" alt="Too bad you can't see this awesome glass of appsauce!">
			<form id="send-message">
					<h2>Hit us up for now:</h2>
					<p><input class="panel" type="text" name="name" id="name" placeholder="Your name here, so we know" required="required" /></p>
					<p><input class="panel" type="text" name="email" id="email" placeholder="Your email should be typed here" required="required" /></p>
					<p><textarea id="message" class="panel message" rows="6" placeholder="Type your message here, then send it bro!"></textarea><p>
					<button type="submit" class="button">Submit</button> <button type="reset" class="reset">Clear</button>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" href="/assets/js/ajax-msg.js"></script>
		<script type="text/javascript">
		$(document).ready( function(){
			$("#send-message .button").click( function() {
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var dataString = 'name=' + name + '&email=' + email + '&message=' + message;
			
			if(name && email && message){
				$.ajax({
					type: "POST",
					url: "send-mail",
					data: dataString,
					success: function( info ) {
					  alert("Thank you bro! We will contact you as soon as possible!");
					   $('#name').val('');
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
		</script>
	</body>
</html>

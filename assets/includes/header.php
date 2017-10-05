<?php

if(isset($_POST['submit'])){
    $to = "stradtkt22@gmail.com"; // this is your Email address
    $from = $_POST['stradtkt22@kevintstradtman.com']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Form submission from kevintstradtman.com";
    $subject2 = "Copy of your form submission";
    $message = $email . " " . "\n" . $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kevin Stradtman Web Developer | Batavia OH</title>
	<link rel="image_src" href="assets/img/plugin/demo/images/shuffle-images_image.jpg" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<meta content="http://www.thepetedesign.com/demos/shuffle-images.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/shuffle-images_image.jpg" property="og:image" />
	<link rel="canonical" href="http://www.thepetedesign.com/demos/shuffle-images_demo.html" />
  <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://developers.google.com/maps/documentation/javascript/demos/demos.css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/tree/css/badges.css">


   <script type="text/javascript" src="projects/treehouse_javascript_project_3/js/js-validate/lib/jquery-1.11.1.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="projects/treehouse_javascript_project_3/js/js-validate/dist/jquery.validate.js"></script>
  <script type="text/javascript" src="projects/treehouse_javascript_project_3/js/js-validate/dist/additional-methods.js"></script>

  <script type="text/javascript" src="assets/img/plugin/jquery.shuffle-images.js"></script>

  <script type="text/javascript" src="assets/js/app.js"></script>

   <script type="text/javascript" src="assets/tree/js/reportcard.js"></script>



 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script>
	  $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
		});

	  $(document).ready(function() {
	  	$('#tabs').tabs({
	  		show: 'fadeIn',
	  		hide: 'fadeOut'
	  	});
	  	var hash2 = location.hash2;
	  	if(hash2) {
	  		$('#tabs').tab();
	  	}
	  });

	  $(document).ready(function() {
	  	$('#about-tabs').tabs({
	  		show: 'fadeIn',
	  		hide: 'fadeOut'
	  	});
	  	var hash = location.hash;
	  	if(hash) {
	  		$('#about-tabs').tab();
	  	}
	  });

	  $(document).ready(function() {
	  	$('#about-tabs-2').tabs({
	  		show: 'fadeIn',
	  		hide: 'fadeOut'
	  	});
	  	var hash = location.hash;
	  	if(hash) {
	  		$('#about-tabs-2').tab();
	  	}
	  });

	</script>

</head>
<body>

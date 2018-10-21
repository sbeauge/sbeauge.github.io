<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="CAPWebsite.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm sticky-top">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="CAPWebsite.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Contact.html">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Philanthropy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="FAQ.html">FAQ</a>
				</li>
			</ul>
		</nav>
		<div class="contact">
			<div class="row">
				<div class="col-xs-6 offset-xs-3">
				<img src="contact.png">
				</div>
			</div>
		</div>
		
	</body>
</html>

<?php
/*
$action=$_REQUEST['action'];
if ($action=="")    // display the contact form 
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                //
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		// mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
						*/?>
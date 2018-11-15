<?php

		$name=stripslashes($_POST["name"]);
		$email=stripslashes($_POST["email"]);
		$phone=stripslashes($_POST["phone"]);
		$subject=stripslashes($_POST["subject"]);
		$mailsubj = "From the website - ".$subject;
		$message=stripslashes($_POST["message"]);
		$secret="6LfszXoUAAAAABOF4j72_6_SRb3gsZ_SXxzSqSu0";
		$response=$_POST["captcha"];
		$recipient="sebbeauge@yahoo.com";
		$mailBody = "From: $name\t My Email is: $email\n
					Phone: $phone\n
					$message\n";

		$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
		$captcha_success=json_decode($verify);
		if ($captcha_success->success==false) {
		  //This user was not verified by recaptcha.

		}
		else if ($captcha_success->success==true) {
			//This user was not verified by recaptcha and the email was sent
			mail($recipient, $mailsubj, $mailBody);

		

		}
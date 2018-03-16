<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company']; 
$city = $_POST['city'];
$msg = $_POST['msg'];

	$to = "kriti.aggarwal28@gmail.com";
	$subject = " SECOND EMAIL : This is a trial for email sending form";
	$message = "<b> Hello kriti, you successfully sent this message.</b>";
	$message .= "<h1> Headline </h1>";
	$message .= "NAME : $name";
	$message .= "<strong>EMAIL: </strong> $email\n";
	$message .= "<strong>PHONE: </strong> $phone\n";
	$message .= "<strong>COMPANY NAME: </strong> $company\n";
	$message .= "<strong>CITY: </strong> $city\n";
	$message .= "<strong>MESSAGE: </strong> $msg\n";
	$header = "From: ritu.6928@gmail.com \r\n";
	$header .="MIME-Version: 1.0\r\n";
	$header .="Content-type: text/html\r\n";
	$sent = mail($to, $subject, $message, $header);
	if ($sent == true)
	{
		include 'admin/config/database.php';
		$mailsave = "INSERT INTO contactmail(Name,Email,Phone,CompanyName,City,Message) VALUES('$name','$email','$phone','$company','$city','$msg')";
		$save = "";
		if(mysqli_query($connection,$mailsave))
		{
		$save = "Your Message is successfully sent";
	
		$success = base64_encode("Thank you for your enquiry. $save");
	header("Location:trialform.php?success=$success");
	}}
	else
	{
		echo "Message could not be sent";
		$fail = base64_encode("Message sending failed");
	header("Location:trialform.php?error=$fail");
	}
	?>


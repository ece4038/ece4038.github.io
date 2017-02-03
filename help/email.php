<?php
// Email address verification

if($_POST) 
{
	include "../assets/includes/page_start_inc.php";
include PATH . "assets/php/functions.php";
$title = "Email Sent Successfully";
include PATH_INC . "header_inc.php";
    // Enter the email where you want to receive the message
    $emailTo = 'ist240polarbears@gmail.com';

	$clientName = addslashes(trim($_POST['name']));
	$name=False; 
    $clientEmail = addslashes(trim($_POST['email']));
	$email=False; 
    $subject = addslashes(trim($_POST['subject']));
	$sub=False; 
    $message = addslashes(trim($_POST['message']));
	$mess=False;
	
	if(strlen($clientName)<=4||strlen($clientName)==0 ||!preg_match("/^[a-zA-Z\s]+$/", $clientName))
	{
		$name=False;
	}
	//If e-mail is not valid show error message
	if (strlen($clientEmail)==0||!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $clientEmail))
	{
		$email=False;
	}

	if (strlen($subject)==0)
	{
		$sub=False;
	}
	if (strlen($message)==0)
	{
		$mess=False;
	}
	
	else
	{
		$name=True;
		$email=True;
		$sub=True;
		$mess=True; 	
	}
    if($name==True &&$email==True && $sub==True && $mess==True) 
	{
        // Send email
		$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $subject . " - Ezix Contact Us Form Submission", "Name: ".$clientName. "\nMessage: ".$message, $headers);
		 
    }
}

else
{
	include "../assets/includes/page_start_inc.php";
	include PATH . "assets/php/functions.php";
	$title = "Please submit an email!";
	include PATH_INC . "header_inc.php";
}
include PATH_INC . "footer_inc.php";

?>

<script src="<?= URL_JS; ?>redirect.js"></script>


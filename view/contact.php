<?php
require_once'db.php';

	echo  $sendername = $_POST['sendername'];
	echo $senderemail = $_POST['senderemail'];
	echo $contact = $_POST['contact'];
	echo $subject = $_POST['subject'];
	echo $message = $_POST['message'];
	
	if(isset($_POST['submit']))
	{
		$abc = "INSERT INTO feedback(sendername, senderemail, contact, subject, message)
				values('$sendername', '$senderemail', '$contact', '$subject', '$message')";
		mysql_query($abc);
	}
	if(!empty($senderemail)){
	
	header("location: ../index.php?page=contact_us");
	}else
	{
	header("location: ../index.php?page=contact_us");	
		}
?>


	

	
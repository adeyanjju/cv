<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'adeyanju.tobi@yahoo.co.uk';
$fromsubject = 'CV';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$myfile = fopen("contact.xls", "a+") or die("Unable to open file!");
$name = fwrite($myfile, $name,\t);
$email = fwrite($myfile, $email,\t);
$subject = fwrite($myfile, $subject,\t);
$message = fwrite($myfile, $message,\t);
fclose($myfile);
}
?> 

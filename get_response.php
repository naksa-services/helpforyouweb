<?php 
require_once("config.php");
if((isset($_POST['username'])&& $_POST['username'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
//  require_once("contact_mail.php");
$yourName = $conn->real_escape_string($_POST['username']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['phone']);
$subject = $conn->real_escape_string($_POST['subject']);
$comments = $conn->real_escape_string($_POST['message']);
$sql="INSERT INTO contact_form (name, email, phone,subjcet, message) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."','".$subject."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
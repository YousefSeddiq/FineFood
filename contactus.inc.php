<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$db=new mysqli ('localhost','root','','finefood');
if ($db) 
	echo " Connected Successfully";
else 
  die("Unable to connect:");
  
 $sql = "INSERT INTO message (username, mail, messageContent)
VALUES ('$name', '$email', '$message')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
  header ("location: contactUs.php");
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}
?>
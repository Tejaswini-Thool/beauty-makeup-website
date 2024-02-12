<?php 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];
$subject=$_POST['subject'];
$conn=new mysqli("localhost","root","","testing");
$query="INSERT INTO contacts (NULL, $firstname, $lastname, $email, $mobile, $date, $subject,)";
if($conn->query($query))
{
	echo "data store";
}
else
{
	echo mysqli_error($conn);
}





 ?>
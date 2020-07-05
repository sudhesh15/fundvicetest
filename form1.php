<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$sector=$_POST['sector'];
$ticket=$_POST['ticket'];
$investot=$_POST['investor'];

$to='sudheshholla99@gmail.com';
$subject='Form Submission';
$message="Name :".$name."\n"."Phone :".$number."\n"."Sector for investment:"."\n\n".$sector."\n"."Ticket size:"."\n\n".$ticket."\n"."Type of investor:"."\n\n".$investor;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
}
else{
echo "Something went wrong!";
}
}
?>

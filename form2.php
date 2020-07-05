<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$company=$_POST['company'];
$fund=$_POST['fund'];
$funding=$_POST['funding'];
$long=$_POST['long'];
$revenue=$_POST['revenue'];
$file=$_POST['file'];

$to='sudheshholla99@gmail.com';
$subject='Form Submission';
$message="Name :".$name."\n"."Phone :".$number."\n"."Name of the company:"."\n\n".$company."\n"."Funding Required :"."\n\n".$fund."\n"."Round of funding:"."\n\n".$funding."\n"."How long it had been in operation:"."\n\n".$long."\n"."Amount of revenue generated:"."\n\n".$revenue."\n"."Attached file:"."\n\n".$file;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
}
else{
echo "Something went wrong!";
}
}
?>

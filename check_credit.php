<?php
session_start();
$con=mysqli_connect('localhost','root','','internet banking system');
$name1=$_SESSION['NAME'];
$q="select BALANCE from customer where NAME='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['BALANCE'];
$from=$_SESSION['NAME'];
$to=$_POST['receiver'];
$q1="select BALANCE from customer where NAME='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['BALANCE'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customer set BALANCE='$sub' where NAME='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customer set BALANCE='$sum' where NAME='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into transfer(SENDER,RECEIVER,BALANCE)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'customer_details.php';
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
else
{
	include 'customer_details.php';
    $message="Insufficient Balance in the Account";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
?>
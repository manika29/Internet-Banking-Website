<?php
session_start();
$con=mysqli_connect('localhost','root','','internet banking system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from transfer";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction History</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/transaction_history.css">
	    <link rel="stylesheet" href="css/header.css" >
		<link rel="stylesheet" href="css/style.css">

<style>
        body{
	            background-image: url("https://media.istockphoto.com/photos/blank-warm-white-plain-background-picture-id1059059678?k=6&m=1059059678&s=612x612&w=0&h=AzFHa_kaPH9SPtgZrUWiJsv7P3WyyXrSH0C_PBnUZ2c=") ;
            }   
    </style>

	
</head>
<body>
	<header>
 <div class="topnav">
        <a class="active" href="transaction_history.php">Transaction History</a>
        <a href="customer_details.php">View All Customers</a>
        <a href="index.php">Home</a>
</div>
		</header>
		<br>
		<br>
		<br>
	<br>
		<h2 style="color:black;text-shadow: 2px 2px white;"><?php echo "RECENT TRANSACTIONS"?></h2>
		<br>
		<table>
			<tr bgcolor="cadetblue">
				<th>SENDER</th>
				<th>RECEIVER</th>
				<th>AMOUNT</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr bgcolor="white">
				<td><?php echo $row["SENDER"]; ?></td>
				<td><?php echo $row["RECEIVER"]; ?></td>
				<td><?php echo $row["BALANCE"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
</body>
</html>
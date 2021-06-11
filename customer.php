<?php 
session_start();
$con=mysqli_connect('localhost','root','','internet banking system');
$name=$_POST['NAME'];
$q="select * from customer where NAME='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$email=$row['EMAIL'];
$account = $row['ACCOUNT NUMBER'];
$amount=$row['BALANCE'];
$_SESSION['NAME']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="css/button.css">
	<link rel="stylesheet" href="css/customer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/all.min.css">
	
		
	<style>
        body{
	            background-image: url("https://media.istockphoto.com/photos/blank-warm-white-plain-background-picture-id1059059678?k=6&m=1059059678&s=612x612&w=0&h=AzFHa_kaPH9SPtgZrUWiJsv7P3WyyXrSH0C_PBnUZ2c=") ;
            }   
    </style>
	
</head>
<body>
	
<div class="topnav">
       
        <a href="transaction_history.php">Transaction History</a>
        <a href="customer_details.php">View All Customers</a>
        <a href="index.php">Home</a>
        
	  </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  
	  <h2>Welcome <?php echo $name?></h2>
	  <br>
	  <h3>ACCOUNT NUMBER : <?php echo $account?></h3>

	<br><br><br>
    <div class="view">
       <table background="images/26.jpg" >
			<tr>
				
				<td><b>NAME</td>
				<td><b>EMAIL ID</td>
				<td><b>ACCOUNT NUMBER</td>
				<td><b>BALANCE</td>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name?></td>
				<td><?php echo $email?></td>
				<td><?php echo $account?></td>
				<td><?php echo $amount?></td>
			</tr>

        </table>

    </div>
		<br>
		<br>
	<h2>KINDLY MAKE YOUR TRANSACTION</h2>
    <div class="buttons">
	<a href="money_transfer.php">
		<button class="btn"style="background-color: cadetblue;
  color: #fff;"><b>TRANSFER</b></button>
	</a>
	</div>
	<br>
	<br>
</body>
</html>
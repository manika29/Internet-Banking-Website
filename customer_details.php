<?php
session_start();
$con=mysqli_connect('localhost','root','','internet banking system');

$q="select * from customer ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CUSTOMER DETAILS</title>
    <link rel="stylesheet" href="css/getdetail.css">
    <link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/customer.css">
	<!-- <link rel="stylesheet" href="css/transaction.css"> -->
	<!-- <link rel="stylesheet" href="css/button.css">
	 -->
	
    <style>
        body{
	            background-image: url("https://media.istockphoto.com/photos/blank-warm-white-plain-background-picture-id1059059678?k=6&m=1059059678&s=612x612&w=0&h=AzFHa_kaPH9SPtgZrUWiJsv7P3WyyXrSH0C_PBnUZ2c=") ;
            }   
    </style>
</head>
<body>
<div class="topnav">
		<a href="transaction_history.php">Transaction History</a>
        <a class="active" href="customer_details.php">View All Customers</a>
        <a href="index.php">Home</a>
</div>
<br>
<br>
<br>
<br>
<br>
<h1 style="color:black;text-shadow: 2px 2px white;">CUSTOMER DETAILS</h1>
    <table >
		<thead bgcolor="cadetblue">
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL ID</th>
			<th>ACCOUNT NUMBER</th>
			<th>BALANCE</th>
			<th>VIEW CUSTOMER</th>
			
		</thead>

        <tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>1</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Manika" style="background-color: cadetblue; color:white;">TRANSACT</button>
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>2</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Aditya"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>3</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Neha"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>4</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Mahima"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>5</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Bhavesh"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>6</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Garima"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>7</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Nidhi" style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>8</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Anveshika"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>


        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>9</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Ishita"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>

		
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td>10</td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["EMAIL"]; ?></td>
			<td><?php echo  $row["ACCOUNT NUMBER"]; ?></td>
			<td><?php echo  $row["BALANCE"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="NAME" value="Kanika"style="background-color: cadetblue; color:white;">TRANSACT</button>
				
				</form>
			</td>
		</tr>

    </table>
    <br>
    <br>

</body>
</html>
<?php
session_start();
$con=mysqli_connect('localhost','root','','internet banking system');
$name1=$_SESSION['NAME'];
$q="select name from customer where not NAME='$name1'";
$result=mysqli_query($con,$q);
?>
<html>
<head>
	<title>Money Transfer</title>
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
	  
	  <h2>ENTER THE FOLLOWING DETAILS AND PROCEED!</h2>

      <center>
		<div class="view">
			<form action="check_credit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:20px ;color:#000;">
						<label for="receiver" align="left">RECEIVER &nbsp </label>
					     <select name="receiver" style="font-size: 20px; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr>
		<tr>
			<td>
			<label for="transfer" align="left" style="font-size:20px;color:#000;" > AMOUNT &nbsp&nbsp&nbsp</label> 
			<input type="number" name="transfer" style="font-size: 12px; height: 28px; width:290px;" min="0" required></td>
		</tr>
		</table>

				<div class="button">
				<br>
				<button  type="submit" value="Credit" style="background-color:blue;color:#fff; font-size:18px;height:40px; width:100px; background-color: cadetblue; color: white;"><b>Transfer</button>
				</div>
		        
	   </div>
      </form>
    </div><br>
</center>

</body>
</html>
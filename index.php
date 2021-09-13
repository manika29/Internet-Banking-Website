<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BANKING</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/header.css" />
        <link rel="stylesheet" href="css/all.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    
</head>
<body>
    <div class="topnav">
    <a href="index.php"style="float:left;font-size:25px;display: inline;">E-BANKING</a>
        <a href="transaction_history.php">Transaction History</a>
        <a href="customer_details.php">View All Customers</a>
        <a class="active" href="index.php">Home</a>
        
      </div>
        
        <div id="header">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
	<br>
	<br>
	<br>
              
             
        </div>
        <br>
	<br>
	<br>
        <br>
          
        <div class="button">
          <div class="container">
          <form action="customer_details.php" method="post">
					<button class="btn" type="submit" name="NAME" value="START"style="background-color: cadetblue; color:white; margin-left : -50px;"><b>GET STARTED</b></button>
				
				</form>
          </div>
       </div>
       <!-- <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("topnav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> -->

    
</body>
</html>
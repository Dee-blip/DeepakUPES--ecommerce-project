<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$query="UPDATE users_items SET status='confirmed' WHERE user_id='$user_id'";
mysqli_query($con,$query) or die(mysqli_error($con));
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
	<title>Success Page</title>
</head>
<body>
	<?php
	include 'includes/header.php'
	?>
	<div class="container-fluid" id="content"
        <div class="col-md-12">
            <div class="jumbotron">
                <h3 align="center">Your order is confirmed. Thank you for shopping with the store.</h3><hr>
                <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
            </div>
        </div>
    </div>
	<?php
	include 'includes/footer.php'; 
	?>

</body>
</html>
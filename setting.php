<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}
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
	<title>Setting Page</title>
</head>
<body>
	<?php
	include 'includes/header.php';
	?>
	<div class="container1">
		<div class="row">
			<div class="col-xs-6">
				<h1>Change Password</h1>
				<form action="settings_script.php" method="post">
					<div class="form-group">
						<input type="password" name="password" placeholder="Old Password" class="form-control" required="true">
					</div>
					<div class="form-group">
						<input type="password" name=" new_password" placeholder="New Password" class="form-control" required="true">
					</div>
					<div class="form-group">
						<input type="password" name="re_type_password" placeholder="Re-type New Password" class="form-control" required="true">
					</div>
					<div>
						<button class="btn btn-primary">Change</button>
					</div>
				<?php
					    
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
				</form>
			</div>
		</div>
	</div>
	<?php
	include 'includes/footer.php'; 
	?>

</body>
</html>
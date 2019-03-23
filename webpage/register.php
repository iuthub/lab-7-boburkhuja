<?php  

include('connection.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>My Blog - Registration Form</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php include('header.php'); ?>

		<h2>User Details Form</h2>
		<h4>Please, fill below fields correctly</h4>
		<form action="register.php" method="post">
				<ul class="form">
					<li>
						<label for="username">Username</label>
						<input type="text" name="username" id="username" <?php if(isset($_SESSION["user"])){?> value = "<?= $_SESSION["user"]["username"] ?>" <?php } else { ?> value = "<?= $username ?>" <?php } ?>required/>
					</li>
					<li>
						<label for="fullname">Full Name</label>
						<input type="text" name="fullname" id="fullname" <?php if(isset($_SESSION["user"])){?> value = "<?= $_SESSION["user"]["fullname"] ?>" <?php } else { ?> value = "<?= $fullname ?>" <?php } ?> required/>
					</li>
					<li>
						<label for="email">Email</label>
						<input type="email" name="email" id="email"<?php if(isset($_SESSION["user"])){?> value = "<?= $_SESSION["user"]["email"] ?>" <?php } else { ?> value = "<?= $email ?>" <?php } ?> />
					</li>
					<li>
						<label for="pwd">Password</label>
						<input type="password" name="pwd" id="pwd" required/>
					</li>
					<li>
						<label for="confirm_pwd">Confirm Password</label>
						<input type="password" name="confirm_pwd" id="confirm_pwd" required />
					</li>
					<li>
						<input type="submit" value="Submit" /> &nbsp; Already registered? <a href="indexч	ч.php">Login</a>
					</li>
				</ul>
		</form>
	</body>
</html>
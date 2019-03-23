<?php
	session_start();
	error_reporting(0);
	$pass_error = false;
	$isPost = $_SERVER["REQUEST_METHOD"]=="POST";
	$isGet = $_SERVER["REQUEST_METHOD"]=="GET";
	$username = $_REQUEST["username"];
	$fullname = $_REQUEST["fullname"];
	$change = $_REQUEST["change"];
	$email = $_REQUEST["email"] == ""? null:$_REQUEST["email"];
	$pwd = $_REQUEST["pwd"];
	$cpwd = $_REQUEST["confirm_pwd"];
	$servername = "localhost";
	$dbname = "blog";
	$conn = new mysqli($servername,"root","",$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
		if(!$isPost){
			include('header.php'); 
		}else{
			if($cpwd == $pwd){
				if(isset($_SESSION["user"])){
					$sql = 'UPDATE users set username = "'.$username.'", password = "'.$pwd.'", email = "'.$email.'", fullname = "'.$fullname.'" WHERE id = "'.$_SESSION["user"]["id"].'"';
					$conn->query($sql);
					header("Location: index.php");
				}else{
					$sql = "INSERT INTO Users (username, email, password, fullname) VALUES ('".$username."', '".$email."', '".$pwd."', '".$fullname."')";
					if (mysqli_query($conn, $sql)){
						header("Location: index.php");
					}
					$conn->close();
				}
					
	
			}else{
				$pass_error = true;
			}
		}

?>

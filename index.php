<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title><style type="text/css">
		form{
			background-color: pink ;
			width: 400px;
			height: 350px;
		}
		marquee{
			background-color: blue ;
		}
	</style>
</head>
<body bgcolor="gree">
	<center>
		<form method="post" action="">
			<i><h1><marquee>WEBSITE OF CLEVERLAND</marquee></h1></i>
			Username<br><br>
			<input type="text" name="unm" placeholder="Enter your user name here"><br><br>
			Password<br><br>
			<input type="Password" name="pword" placeholder="Enter your Password here"><br><br>
			<button type="submit" name="log">Login</button><br><br>
			<a href="create.php">Create account</a><br><br>
			
		</form>
		<?php
     if (isset($_POST['log'])) {
     	$a=$_POST['unm'];
     	$b=$_POST['pword'];
     	$con=new mysqli("localhost","root","","cleverland");
     	$res=$con->query("SELECT * FROM user WHERE uname='$a' AND upassword='$b'");
     	if ($res->num_rows>0) {
     		header("location:welcome.php?link=1");
     	}
     	else{
     		echo "Wrong password or username";
     	}
     }
		?>
	</center>

</body>
</html>
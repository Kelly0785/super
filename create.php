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
<body bgcolor="green">
	<center>
		<form method="post" action="">
			<i><h1><marquee>WEBSITE OF CLEVERLAND</marquee></h1></i>
			Username<br><br>
			<input type="text" name="user" placeholder="Enter your username here"><br><br>
				Password<br><br>
			<input type="Password" name="p1" placeholder="Enter your Password here"><br><br>
				Confirm password<br><br>
			<input type="password" name="p2" placeholder="Enter your Password here"><br><br>
			<button type="submit" name="sv">Save</button><br><br>
			<a href="index.php">Login</a><br><br>
			
		</form>
		<?php
      if (isset($_POST['sv'])) {
      	$a=$_POST['user'];
      	$b=$_POST['p1'];
      	$c=$_POST['p2'];

      }
      if (empty($a)|| empty($b)|| empty($c)) {
      	echo "Please fill all fields";
      }
      elseif ($b!=$c) {
      echo "Password not matching";
      }
      else{
      	$con=new mysqli("localhost","root","","uok");
      	$res=$con->query("INSERT INTO user VALUES('','$a','$b')");
      	echo "Now your allowed to register in CLEVERLAND TVET SCHOOL GO TO Login";
      }
		?>
	</center>

</body>
</html>
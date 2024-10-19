<center>
<h2><u><i>WELCOME TO CLEVERLAND TVET  SCHOOL MATIMBA</i></u></h2>
<form method="post" action="">
<table border="0" width="900">
	<tr>
		<th><a href="?link=1">HOME</a></th>
		<th><a href="?link=2">STUDENT REGISTER</a></th>
		
		<th><a href="?link=5">LOGOUT</a></th>

	</tr>
	</table>
</form>
<?php
 $a=$_GET['link'];
 if ($a==1) {
 	require"home.php";
 }
 elseif ($a==2) {
 	require"s.php";
 }
 
 
  elseif ($a==5) {
 	require"l.php";
 }
?>
<style type="text/css">
    form{
        background-color:goldenrod;
    }
    table{
        background-color: greenyellow;
        color: darkblue;
        border-color: grey;
    }
    body{
        background-color: skyblue;
    }
</style>

</center>
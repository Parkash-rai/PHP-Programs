<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<form action="" method="post" style="margin-left: 330px;margin-top: 40px;">
		Name:<input type="text" name="textt">
		Password:<input type="password" name="password">
		<input type="submit" name="submit"><br><br><br>
	</form>
<center><h1 style="margin-left: -110px;">
<?php
    if (isset($_POST['submit'])) {
    $text=$_POST['textt'];
     $pas=$_POST['password'];

 	if($text=="F16CS14" && $pas=="15CS"){
 		echo "You Are Welcome!";
 	}
 	else
 		echo "It is Error.";
 }
 	?>
</h1></center>
 
 	

</body>
</html>
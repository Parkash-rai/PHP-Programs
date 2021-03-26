<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<form action="" method="post" style="margin-left: 500px;margin-top: 40px;">
		<input type="text" name="textt">
		<input type="submit" name="submit"><br><br><br>
	</form>
<center><h1 style="margin-left: -110px;">
<?php
    if (isset($_POST['submit'])) {
    $text=$_POST['textt'];
 	if($text%2==0){
 		echo "It is Even Number";
 	}
 	else
 		echo "It is Odd Number";
 }
 	?>
</h1></center>
 
 	

</body>
</html>
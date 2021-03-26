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
<?php
    if (isset($_POST['submit'])) {
    $text=$_POST['textt'];
 	for($i=1;$i<11;$i++){
 	?>

 	<table border="2" cellpadding="6px" cellspacing="0px;" width="10%" style="margin-left: 520px;">
 		<tr >
 				<td><?php echo "$i * $text = ".($i*$text);?></td>
 				
 		</tr>
 		
 	</table>
 	<?php
 }
}
 ?>

</body>
</html>
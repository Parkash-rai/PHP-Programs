<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
<?php

 	for($i=1;$i<7;$i++){
 	?>

 	<table border="2" cellpadding="6px" cellspacing="0px;" width="50%">
 		<tr style="text-align: justify;">
 			    <td><?php echo "$i * 1 = ".($i*1);?>
 				<td><?php echo "$i * 2 = ".($i*2);?></td>
 				<td><?php echo "$i * 3 = ".($i*3);?></td>
 				<td><?php echo "$i * 4 = ".($i*4);?></td>
 				<td><?php echo "$i * 5 = ".($i*5);?></td>
 			</td>
 		</tr>
 		
 	</table>
 	<?php
 }?>

</body>
</html>
<?php 
//点击下载
include "../functions.php";
$dirArr = glob('./down/*');

 ?>
 <html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 		<table border="1" cellspacing="" cellpadding="">
 			<?php foreach($dirArr as $v): ?>
 				<tr><td><a href="./down.php?dir=<?php echo $v ?>"><?php echo basename($v) ?></a></td></tr>
 			<?php endforeach ?>
 		</table>
 		
 		
 		
 		
 		
 		
 		
 		
 	</body>
 </html>
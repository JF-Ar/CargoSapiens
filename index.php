<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>testes</title>
</head>
<body>
	<?php

	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$even = [];
	foreach($arr as $valor)
		{	
			if ($valor%2==0){
				$even=[$valor];
				print_r ($even); ?> <br> <?php
			}else{
				echo('impar');?> <br> <?php
			}
		}
	print_r("array- > .$even")
	?>
</body>
</html>
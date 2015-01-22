<? require_once('button.php'); ?>
<!doctype HTML>
<html>
	<head>
		<title></title>
		<style>
			.orange{ background: orange;}
			.white{ background: white;}
			.green{background: green;}
		</style>
		</head>
		<body>
			<form action="." method="post">
				<input type="button" value="add to cart" class="<?php// echo $button->getColor(); ?>" />
			</form>
		</body>
	</html>
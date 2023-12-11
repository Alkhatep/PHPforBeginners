<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Demo</title>
	
</head>
<body>

	<h1>Recommended Books</h1>

	<?php 
		$books = [
			"Do and dream of electric sheap",
			"The facebook",
			"Hail Mary"
		];
	?>

	<ul>
		<?php foreach ($books as $book) : ?>
			<li><?= $book ?></li>
		<?php endforeach; ?>
	</ul>

</body>
</html>
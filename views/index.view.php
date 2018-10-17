<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Practitioner</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">Tasks</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/about/culture">Culture</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div class="container text-center">
		<h2>My Tasks</h2>
		<ul class="list-group">
			<?php foreach ($tasks as $task) : ?>
				<li class="list-group-item">
					<?php if ($task->completed) : ?>
					
						<strike><?= $task->description; ?></strike>

					<?php else: ?>

						<?= $task->description; ?>

					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>
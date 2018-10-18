<?php require('partials/head.php'); ?>
	
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
<?php require('partials/footer.php'); ?>

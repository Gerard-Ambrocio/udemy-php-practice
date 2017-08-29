<div>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>

	<?php foreach ($viewmodel as $item) : ?>
		<div class="card">
			
			<div class="card-body">
				<h3><?php echo $item['title']; ?></h3>
				<small><?php echo $item['create_date']; ?></small>
				<hr>
				<p><?php echo $item['body']; ?></p>
				<br>
				<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to Page</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
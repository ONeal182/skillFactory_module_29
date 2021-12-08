<div class="card-group">
	<?php foreach ($data as $row) { ?>
		<div class="card">
			<img class="card-img-top" src="<?php echo $row['img'] ?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $row['Site'] ?></h5>
				<p class="card-text"><?php echo $row['Description'] ?></p>
				<p class="card-text"><small class="text-muted"><?php $row['Year'] ?></small></p>
			</div>
		</div>
	<? } ?>
</div>
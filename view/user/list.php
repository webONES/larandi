<div class="row">
	<h1>Usuarios</h1><hr>
	<?php foreach ($users as $user) { ?>
		<p>
			<h4>
				<?php echo $user->firstName." ".$user->lastName.": "; ?>
				<span class="small"><?php echo $user->email; ?></span>
			</h4>
		</p>
	<?php } ?>
</div>
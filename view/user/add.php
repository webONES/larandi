
	<div class="row">
		<form action="<?php echo BASE_URL.'users/store' ?>" method="POST" role="form" accept-chartset="utf-8">
			<legend>Añadir Usuarios</legend>
		
			<div class="form-group">
				<label for="name-imput">Nombre: </label>
				<input type="text" class="form-control" name="firstName" id="name-input" placeholder="John" required>
			</div>
			<div class="form-group">
				<label for="lastname-input">Apellido: </label>
				<input type="text" name="lastName" id="lastname-input" class="form-control" required placeholder="Doe">
			</div>
			<div class="form-group">
				<label for="email-input">E-mail: </label>
				<input type="email" name="email" id="email-input" class="form-control" required placeholder="jdoe@example.com">
			</div>
			<div class="form-group">
				<label for="password-input">Contraseña: </label>
				<input type="password" name="password" id="password-input" class="form-control" required placeholder="tu contraseña">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<a href="<?php echo BASE_URL ?>" class="btn btn-default">&laquo; Regresar</a>
		</form>
	</div>
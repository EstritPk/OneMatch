<header class=" pb-5 ">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  ">
		<div class="container">
			<a href="#" class="navbar-brand">OneMatch</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contenidoMenu" aria-controls="contenidoMenu" aria-expanded="false" aria-label="Mostrar/Ocultar Navegación">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="contenidoMenu">
				<!-- Enlaces -->
				<ul class="navbar-nav me-5">
					<li class="nav-item">
						<a href="home.php" class="nav-link">Inicio</a>
					</li>




					<?php
					if (isset($_SESSION['user'])) {
					?>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="submenuCancha" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Cancha
							</a>

							<!-- Sub-elementos -->
							<ul class="dropdown-menu" aria-labelledby="submenuCancha">
								<li><a href="canchas.php" class="dropdown-item">Todas las cachas</a></li>	
							</ul>
						</li>
					<?php
					}
					?>

					<?php
					if (isset($_SESSION['admin'])) {
					?>
						<li class="nav-item">
							<a href="admin_canchas.php" class="nav-link">Complejos</a>
						</li>
					<?php
					}
					?>
					<li class="nav-item">
						<a href="#" class="nav-link">Sobre Nosotos</a>
					</li>
				</ul>

				<!-- Formulario de busqueda -->
				<form action="" class="d-flex me-auto">
					<input type="text" class="form-control me-1" aria-label="Buscar" placeholder="Buscar">
					<button class="btn btn-outline-info" type="submit">Buscar</button>
				</form>
				<!-- Icon perfil-->
				<div class="nav-item dropdown me-auto">
					<a href="#" class="nav-link  text-light" style="font-size: 20px;" id="submenuCancha" role="button" data-bs-toggle="dropdown" aria-expanded="false">


						<?php echo strtoupper($_SESSION['usu']); ?><i class="fa-solid fa-circle-user m-2 " style="font-size: 35px; ;"></i>
					</a>

					<!-- Sub-elementos -->
					<ul class="dropdown-menu " style="width: 18rem;" aria-labelledby="submenuCancha">

						<?php
						if (isset($_SESSION['admin'])) {
						?>
							<li>
								<a href="perfil_admin.php" class="dropdown-item "><i class="fa-solid fa-user" style="font-size: 20px;"></i>
									Mi Cuenta
								</a>
							</li>
						<?php
						}
						?>

						<?php
						if (isset($_SESSION['user'])) {
						?>
							<li>
								<a href="miperfil.php" class="dropdown-item "><i class="fa-solid fa-user" style="font-size: 20px;"></i>
									Mi Cuenta
								</a>
							</li>
							<li><a href="equipos_usu.php" class="dropdown-item">Mis Equipos</a></li>
							<li><a href="usuario_reservas.php" class="dropdown-item">Mis Reservas</a></li>
						<?php
						}
						?>




						<li><a href="functions/cerrar_sesion.php" class="dropdown-item">Cerar Session</a></li>

					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
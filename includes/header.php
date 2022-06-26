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

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="submenuCancha" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cancha
						</a>

						<!-- Sub-elementos -->
						<ul class="dropdown-menu" aria-labelledby="submenuCancha">
							<li><a href="canchas.php" class="dropdown-item">Todas las cachas</a></li>
							<li><a href="#" class="dropdown-item">Tenis</a></li>
							<li><a href="#" class="dropdown-item">Voleibol</a></li>
							<li><a href="#" class="dropdown-item">Football</a></li>
							<li><a href="#" class="dropdown-item">Padel</a></li>
							<li><a href="#" class="dropdown-item">Basketball</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="admin_canchas.php" class="nav-link">Complejos</a>
					</li>
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
						Rickelson Bresume<i class="fa-solid fa-circle-user m-2 " style="font-size: 35px; ;"></i>
					</a>

					<!-- Sub-elementos -->
					<ul class="dropdown-menu " style="width: 18rem;" aria-labelledby="submenuCancha">

						<li><a href="miperfil.php" class="dropdown-item "><i class="fa-solid fa-user" style="font-size: 20px;"></i>
								Mi Cuenta</a></li>
						<li><a href="equipos_usu.php" class="dropdown-item">Mis Equipos</a></li>
						<li><a href="#" class="dropdown-item">Mis Reservas</a></li>
						<li><a href="index.php" class="dropdown-item">Cerar Session</a></li>

					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
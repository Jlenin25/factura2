<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="vistas/css/normalize.css">
	<link rel="stylesheet" href="vistas/css/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" href="vistas/css/all.css">
	<link rel="stylesheet" href="vistas/css/sweetalert2.min.css">
	<script src="vistas/js/sweetalert2.min.js" ></script>
	<link rel="stylesheet" href="vistas/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="vistas/css/style.css">
</head>
<body>	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="item-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
								</li>
								<li>
									<a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
								</li>
								<li>
									<a href="item-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Pr??stamos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo pr??stamo</a>
								</li>
								<li>
									<a href="reservation-reservation.html"><i class="far fa-calendar-alt fa-fw"></i> &nbsp; Reservaciones</a>
								</li>
								<li>
									<a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Pr??stamos</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Finalizados</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar por fecha</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">
				<a href="client-new.html" class="tile">
					<div class="tile-tittle">Clientes</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p>5 Registrados</p>
					</div>
				</a>
				
				<a href="item-list.html" class="tile">
					<div class="tile-tittle">Items</div>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p>9 Registrados</p>
					</div>
				</a>

				<a href="reservation-reservation.html" class="tile">
					<div class="tile-tittle">Reservaciones</div>
					<div class="tile-icon">
						<i class="far fa-calendar-alt fa-fw"></i>
						<p>30 Registradas</p>
					</div>
				</a>

				<a href="reservation-pending.html" class="tile">
					<div class="tile-tittle">Prestamos</div>
					<div class="tile-icon">
						<i class="fas fa-hand-holding-usd fa-fw"></i>
						<p>200 Registrados</p>
					</div>
				</a>

				<a href="reservation-list.html" class="tile">
					<div class="tile-tittle">Finalizados</div>
					<div class="tile-icon">
						<i class="fas fa-clipboard-list fa-fw"></i>
						<p>700 Registrados</p>
					</div>
				</a>

				<a href="user-list.html" class="tile">
					<div class="tile-tittle">Usuarios</div>
					<div class="tile-icon">
						<i class="fas fa-user-secret fa-fw"></i>
						<p>50 Registrados</p>
					</div>
				</a>

				<a href="company.html" class="tile">
					<div class="tile-tittle">Empresa</div>
					<div class="tile-icon">
						<i class="fas fa-store-alt fa-fw"></i>
						<p>1 Registrada</p>
					</div>
				</a>
			</div>

		</section>
	</main>
	<script src="vistas/js/jquery-3.4.1.min.js" ></script>
	<script src="vistas/js/popper.min.js" ></script>
	<script src="vistas/js/bootstrap.min.js" ></script>
	<script src="vistas/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="vistas/js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="vistas/js/main.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Dernier CSS compilé et minifié -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
	<div class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 text-center" style="height:100px; background-color: #1f5477;" ></div>
					<div class="col-sm-12 text-center" style="height:300px; background-color: #1f5477;" ><img src="img/logo/logo_acceuil.png" height="300" width="auto"></div>
				</div>
			</div>
		</div>
		
		
		<div class="navbar data-bs-theme='dark' bg-body-tertiary">
			<nav class="navbar navbar-dark fixed-top bg-dark">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="#">
			    	<img src="img/logo/LOGO.png" width="50" height="auto"> ECEin
				</a>

			    <ul class="nav nav-pills nav-fill navbar-left">
				  <li class="nav-item">
				    <a class="nav-link " aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="profile.php"><i class="bi bi-person-fill"></i> Profil</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="network.php"><i class="bi bi-people-fill"></i> Amis</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="emploi.html"><i class="bi bi-backpack3"></i> Emplois</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" href="messaging.php"><i class="bi bi-chat-right-dots-fill"></i> Messagerie</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="notification.html"><i class="bi bi-bell-fill"></i> Notification</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="publication.php"><i class="bi bi-journal-album"></i> Publication</a>
				  </li>
				</ul>

			    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
			      <div class="offcanvas-header">
			        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="img/logo/LOGO.png" width="50" height="auto"> ECEin</h5>
			        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			      </div>
			      <div class="offcanvas-body">
			        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
			          <li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			              Navigation
			            </a>
			            <ul class="dropdown-menu dropdown-menu-dark">
							<li><a class="dropdown-item" href="index.php"><i class="bi bi-house-fill"></i> Home</a></li>
							<li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-fill"></i> Profil</a></li>
							<li><a class="dropdown-item" href="network.php"><i class="bi bi-people-fill"></i> Amis</a></li>
							<li><a class="dropdown-item" href="network.php"><i class="bi bi-people-fill"></i> Amis</a></li>
							<li><a class="dropdown-item" href="jpbs.php"><i class="bi bi-backpack3"></i> Emplois</a></li>
							<li><a class="dropdown-item" href="messaging.php"><i class="bi bi-chat-right-dots-fill"></i> Messagerie</a></li>
							<li><a class="dropdown-item" href="notifications.php"><i class="bi bi-bell-fill"></i> Notification</a></li>
							<li><a class="dropdown-item" href="publication.php"><i class="bi bi-journal-album"></i> Publication</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
			            </ul>
			          </li>
			          <li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			              Reseaux sociaux
			            </a>
			            <ul class="dropdown-menu dropdown-menu-dark">
							<li><a class="dropdown-item" href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
							<li><a class="dropdown-item" href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
							<li><a class="dropdown-item" href="#"><i class="bi bi-twitter-x"></i> Tweeter</a></li>
			            </ul>
			        </li>
				        <li class="nav-item dropdown">
				        	<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				              Nos partenaires
				            </a>
				            <ul class="dropdown-menu dropdown-menu-dark">
				            	<li>a faire</li>
				            </ul>
				        </li>
				        <li class="nav-item dropdown">
				        	<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				              nous contacter
				            </a>
				            <ul class="dropdown-menu dropdown-menu-dark">
				            	<li>a faire</li>
				            </ul>
				        </li>
			        </ul>
			        
			      </div>
			    </div>
			  </div>
			</nav>
		</div>

		<footer class="container-fluid bg-dark">
			<div class="container py-4 py-md-5 px-4 px-md-3 text-light-emphasis">
				<div class="row px-4 py-4">
					<div class="col">
						<img src="img/logo/LOGO.png" width="150" height="auto">
					</div>
					<div class="col">
						<h5>Aide</h5>
						<ul class="list-unstyled">
							<li>email:henri.lantigua@edu.fr</li>
							<li>tel:06 XX XX XX XX</li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Formulaire d'aide</a></li>
						</ul>
					</div>
					<div class="col">
						<h5>Nos réseaux sociaux</h5>
						<ul class="list-unstyled">
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-instagram"></i> Instagram</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-twitter-x"></i> tweeter/X</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-facebook"></i> Facebook</a></li>
						</ul>
					</div>
					<div class="col">
						<h5>Links</h5>
						<ul class="list-unstyled">
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Acceuil</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Profil</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Messagerie</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Notification</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Publication</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Emploi</a></li>
							<li><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Amis</a></li>
						</ul>
					</div>
					<div class="col">
						<h5>Auteur</h5>
						<ul class="list-unstyled">
							<p>
								Henri Lantigua Jorge
								Claudia Andrea Sotomayor Michuy
								Piriya
								Sami
							</p>
						</ul>
					</div>
				</div>
			</div>
		</footer>
</body>
</html>
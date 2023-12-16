<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'accueil</title>

 	<!-- Dernier CSS compilé et minifié -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

	<link href="css/home.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center" style="height:100px; background-color: #1f5477;" ></div>
				<div class="col-sm-12 text-center" style="height:300px; background-color: #1f5477;" ><img src="img/logo_acceuil.png" height="300" width="auto"></div>
			</div>
		</div>
	</div>
	
	
	<div class="navbar data-bs-theme='dark' bg-body-tertiary">
		<nav class="navbar navbar-dark fixed-top bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		    	<img src="img/LOGO.png" width="50" height="auto"> ECEin
			</a>

		    <ul class="nav nav-pills nav-fill navbar-left">
			  <li class="nav-item">
			    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-person-fill"></i> Profil</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-people-fill"></i> Amis</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-backpack3"></i> Emplois</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-chat-right-dots-fill"></i> Messagerie</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-bell-fill"></i> Notification</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><i class="bi bi-journal-album"></i> Publication</a>
			  </li>
			</ul>

		    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
		      <div class="offcanvas-header">
		        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
		        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		      </div>
		      <div class="offcanvas-body">
		        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
		          <li class="nav-item">
		            <a class="nav-link active" aria-current="page" href="#">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="#">Link</a>
		          </li>
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		              Dropdown
		            </a>
		            <ul class="dropdown-menu dropdown-menu-dark">
		              <li><a class="dropdown-item" href="#">Action</a></li>
		              <li><a class="dropdown-item" href="#">Another action</a></li>
		              <li>
		                <hr class="dropdown-divider">
		              </li>
		              <li><a class="dropdown-item" href="#">Something else here</a></li>
		            </ul>
		          </li>
		        </ul>
		        <form class="d-flex mt-3" role="search">
		          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		          <button class="btn btn-success" type="submit">Search</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</nav>
	</div>

	<div id="section">
		<div id="carousel" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/carousel/fjords.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
					<div class="carousel-item">
						<img src="img/carousel/nature.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Some representative placeholder content for the second slide.</p>
						</div>
					</div>
				<div class="carousel-item">
					<img src="img/carousel/lights.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	
</body>
</html>

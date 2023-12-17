<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Singn up</title>
	<!-- Dernier CSS compilé et minifié -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #1f5477; height: 100%;">
	<div id="wrapper" class="container-fluid">
		<div class="row text-center" style="margin: 20px;">
			<div class="col-sm-12 text-center"><img src="../img/logo/logo_acceuil.png" height="300" width="auto"></div>
		</div>
		<div class="container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin: 50px">
			<div class="row g-3">
				<form action="authentification.php" method="post">
					<div class="col-md-6" >
						<label for="inputUser" class="form-label">Username</label>
						<input type="text" class="form-control" id="inputUser">
					</div>
					<div class="col-md-6">
						<label for="inputPassword" class="form-label">Password</label>
						<input type="password" class="form-control" id="inputPassword">
					</div>
					<div class="col-md-6">
						<label for="inputPasswordcon" class="form-label">Confirm password</label>
						<input type="password" class="form-control" id="inputPasswordcon">
					</div>
					<div class="col-12">
						<label for="inputEmail" class="form-label">Email</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="exemple@email.com">
					</div>
					<div class="row">
						<div class="col">
							<label for="firstname" class="form-label">First Name</label>
							<input type="text" class="form-control" id="firstname">
						</div>
						<div class="col">
							<label for="lastname" class="form-label">Last Name</label>
							<input type="text" class="form-control" id="lastname">
						</div>
					</div>
					<div class="col-md-6">
						<label for="inputCity" class="form-label">City</label>
						<input type="text" class="form-control" id="inputCity">
					</div>
					<div class="col-md-4">
						<label for="inputStatut" class="form-label">Statut</label>
						<select id="inputStatut" class="form-select">
							<option selected>Choose...</option>
							<option>Ingénieur</option>
							<option>Professeur</option>
							<option>Etudiant</option>
							<option>Autre</option>
						</select>
					</div><br><br><br>
					<div class="col-12 text-center">
						<a href="authentification.php">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
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
				<form action="confirm_signup.php" method="post">
					<div class="col-md-6" >
						<label for="user" class="form-label">Username</label>
						<input type="text" class="form-control" id="user" name="user">
					</div>
					<div class="col-md-6">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="col-md-6">
						<label for="passwordcon" class="form-label">Confirm password</label>
						<input type="password" class="form-control" id="passwordcon" name="passwordcon">
					</div>
					<div class="col-12">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" placeholder="exemple@email.com" name="email">
					</div>
					<div class="row">
						<div class="col">
							<label for="firstname" class="form-label">First Name</label>
							<input type="text" class="form-control" id="firstname" name="firstname">
						</div>
						<div class="col">
							<label for="lastname" class="form-label">Last Name</label>
							<input type="text" class="form-control" id="lastname" name="lastname">
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="form-label">City</label>
						<input type="text" class="form-control" id="city" name="city">
					</div>
					<div class="col-md-4">
						<label for="statut" class="form-label">Statut</label>
						<select id="statut" class="form-select" name="statut">
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
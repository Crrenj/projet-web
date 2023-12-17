<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Dernier CSS compilé et minifié -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #1f5477; height: 100%;">
	<div id="wrapper" class="container">
		<div class="row" style="margin: 20px;">
			<div class="col-sm-12 text-center"><img src="../img/logo/logo_acceuil.png" height="300" width="auto"></div>
		</div>
		<div class="container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded">
			<form action="authentification.php" method="post">
				<div class="row mb-3">
					<label for="inputUser" class="col-sm-2 col-form-label">User</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputUser" name="user">
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" name="password">
						<a href="#" class="text-right"><small>forgot password?</small></a>
					</div>
				</div>
				<fieldset class="row mb-3">
					<legend class="col-form-label col-sm-2 pt-0">Admin</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="admin" id="yes" value=1>
							<label class="form-check-label" for="yes">
							yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="admin" id="no" value=0 checked>
							<label class="form-check-label" for="no">
							no
							</label>
						</div>
					</div>
				</fieldset>
				<button type="submit" class="btn btn-primary text-center">Login</button>
			</form>

			<div>
				<hr class="hr"/>
				If you don't have already an account:
				<div class="d-grid gap-2">
					<button class="btn btn-primary" type="button"><a href="signup.php" class="link-body-light link-light link-underline-opacity-0">Sign up</a></button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
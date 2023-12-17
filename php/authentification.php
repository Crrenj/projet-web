<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>authentification</title>
	<!-- Dernier CSS compilé et minifié -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #1f5477; height: 100%;">
	<?php 
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		$_SESSION['user'] = isset($_POST['user'])? $_POST['user'] : "";
		$_SESSION['admin'] = isset($_POST['admin'])? $_POST['admin'] : "";

		$user = $_SESSION['user'];
		$pwd = isset($_POST['password'])? $_POST['password'] : "";
		$admin = $_SESSION['admin'];

		$database = "database";

		$db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889 );
        $db_found = mysqli_select_db($db_handle, $database);

        if (empty($user)) {
        	$choix = "noUser";
        } else if (empty($pwd)) {
        	$choix= "noPwd";
        } else if (empty($user) && empty($pwd)){
        	$choix = "rien";
        } else {
        	$choix = "checked";
        }

        $sql = "";
		
	?>
	<div id="wrapper" class="container-fluid">
		<div class="row" style="margin: 20px;">
			<div class="col-sm-12 text-center"><img src="../img/logo/logo_acceuil.png" height="300" width="auto"></div>
		</div>
		<div class="container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin: 100px;">
			<?php
				switch ($choix) {
					case 'noUser':
						echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>You didn't insert your username</h2></div><br>
						<div class='d-grid gap-2 col-4 mx-auto'>
							<a href='login.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Return to login</button></a>
						</div>";
						break;
					case 'noPwd':
						echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>You didn't insert your password</h2></div><br>
						<div class='d-grid gap-2 col-4 mx-auto'>
							<a href='login.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Return to login</button></a>
						</div>";
						break;
					case 'rien':
						echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>You didn't insert anything</h2></div><br>
						<div class='d-grid gap-2 col-4 mx-auto'>
							<a href='login.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Return to login</button></a>
						</div>";
						break;
					case 'checked':
						$sql = "SELECT * From Utilisateur Where user = '$user'";
						$result = mysqli_query($db_handle, $sql);
						$data = mysqli_fetch_assoc($result);

						if (mysqli_num_rows($result) == 0) {
							echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>No such user in our database</h2></div><br>
							<div class='d-grid gap-2 col-4 mx-auto'>
								<a href='login.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Return to login</button></a>
							</div>";
						} else if (mysqli_num_rows($result) > 0 && ($data['MotDePasse'] != $pwd || $data['Admin'] != $admin)) {
							echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>Password incorrect or admin statut incorrect</h2></div><br>
							<div class='d-grid gap-2 col-4 mx-auto'>
								<a href='login.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Return to login</button></a>
							</div>";
						} else {
							echo "<div class='bg-success rounded text-center text-light' style='height: 60px'><h2>Connection successfull</h2></div><br>
							<div class='d-grid gap-2 col-4 mx-auto'>
								<a href='../index.php' class='link-body-light link-light link-underline-opacity-0'><button class='btn btn-primary' type='button'>Continue</button></a>
							</div>";
						}
						break;
					default:
						echo "erreur";
						break;
				}
			?>
		</div>
	</div>

</body>
</html>
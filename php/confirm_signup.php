<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation sign up</title>
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
		$_SESSION['admin'] = 0;

		$user = $_SESSION['user'];
		$pwd = isset($_POST['password'])? $_POST['password'] : "";
		$admin = $_SESSION['admin'];
		$pwdcon = isset($_POST['passwordcon'])? $_POST['passwordcon'] : "";
		$statut = isset($_POST['statut'])? $_POST['statut'] : "";
		$city = isset($_POST['city'])? $_POST['city'] : "";
		$firstname = isset($_POST['firstname'])? $_POST['firstname'] : "";
		$lastname = isset($_POST['lastname'])? $_POST['lastname'] : "";
		$email = isset($_POST['email'])? $_POST['email'] : "";

		$database = "database";

		$db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889 );
        $db_found = mysqli_select_db($db_handle, $database);

        if (empty($user) || empty($pwd) || empty($pwdcon) || !isset($admin) || empty($statut) || empty($city) || empty($firstname) || empty($lastname) || empty($email)) {
        	$choix = "noComplete";
        	echo "$user<br>$pwd<br>$pwdcon<br>$statut<br>$city<br>$firstname<br>$lastname<br>$email<br>$admin";
        } else if ($pwd != $pwdcon) {
        	$choix= "invalidPassword";
        } else {
        	$choix = "checked";
        }

        $sql = "";
		
	?>

	<div id="wrapper" class="container-fluid">
		<div class="row" style="margin: 20px;">
			<div class="col-sm-12 text-center"><img src="../img/logo/logo_acceuil.png" height="300" width="auto"></div>
		</div>
		<div class="container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded">
			<?php
				if ($db_found) {
					switch ($choix) {
						case 'noComplete':
							echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>You didn't complet all the information</h2></div><br>
							<div class='d-grid gap-2 col-4 mx-auto'>
								<button class='btn btn-primary' type='button'><a href='signup.php' class='link-body-light link-light link-underline-opacity-0'>Return to sign up</a></button>
							</div>";
							break;
						case 'invalidPassword':
							echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>Passwords are not the same</h2></div><br>
							<div class='d-grid gap-2 col-4 mx-auto'>
								<button class='btn btn-primary' type='button'><a href='signup.php' class='link-body-light link-light link-underline-opacity-0'>Return to sign up</a></button>
							</div>";
							break;
						case 'checked':
							$sql = "SELECT * From Utilisateur Where user = '$user'";
							$result = mysqli_query($db_handle, $sql);
							if (mysqli_num_rows($result) > 0) {
								echo "<div class='bg-danger rounded text-center text-light' style='height: 60px'><h2>Username already used</h2></div><br>
								<div class='d-grid gap-2 col-4 mx-auto'>
									<button class='btn btn-primary' type='button'><a href='signup.php' class='link-body-light link-light link-underline-opacity-0'>Return to sign up</a></button>
								</div>";
							} else {
								$dateActuelle = date("Y-m-d");
								$sql = "INSERT INTO Utilisateur (user, Admin, MotDePasse, DateInscription) VALUES ('$user', '$admin', '$pwd', '$dateActuelle')";
								$result = mysqli_query($db_handle, $sql);
								if ($result) {
									echo "<div class='bg-success rounded text-center text-light' style='height: 60px'><h2>Sign up successfull</h2></div><br>
									<div class='d-grid gap-2 col-4 mx-auto'>
										<button class='btn btn-primary' type='button'><a href='../index.php' class='link-body-light link-light link-underline-opacity-0'>Continue</a></button>
									</div>";
								} else {
									echo "faild";
								}
							}
							break;
						default:
							echo "erreur";
							break;
					}
				}
			?>
		</div>
</body>
</html>
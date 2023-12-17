<?php
session_start();

include 'db_config.php';


if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = "SELECT * FROM utilisateur WHERE user = '$user'";
    $result = mysqli_query($db_handle, $query);

    if ($result) {
        $user_data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($db_handle);
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger datos del formulario
    $nom = mysqli_real_escape_string($db_handle, $_POST['nom']);
    $prenom = mysqli_real_escape_string($db_handle, $_POST['prenom']);
    $statut = mysqli_real_escape_string($db_handle, $_POST['statut']);
    $localisation = mysqli_real_escape_string($db_handle, $_POST['localisation']);
    $email = mysqli_real_escape_string($db_handle, $_POST['email']);
    $telephone = mysqli_real_escape_string($db_handle, $_POST['telephone']);
    $biographie = mysqli_real_escape_string($db_handle, $_POST['biographie']);
    

     
    $updateQuery = "
        UPDATE utilisateur SET 
            Nom = '$nom', 
            Prenom = '$prenom',
            Statut = '$statut',
            Localisation = '$localisation',
            Email = '$email',
            Telephone = '$telephone',
            Biographie = '$biographie'
        WHERE user = '$user'";
    // ... maque

    if (mysqli_query($db_handle, $updateQuery)) {
        header('Location: profile.php');
        exit();
    } else {
        echo "Error al actualizar: " . mysqli_error($db_handle);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualiser le profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Bibliothèque jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Dernier JavaScript compilé -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css\profile-update.css">
 
</head>
<body>

<form action="update.php" method="post">
    Nom: <input type="text" name="nom" value="<?php echo $user_data['Nom']; ?>"><br>
    Prenom: <input type="text" name="prenom" value="<?php echo $user_data['Prenom']; ?>"><br>
    Statut: <input type="text" name="statut" value="<?php echo $user_data['Statut']; ?>"><br>
    Localisation: <input type="text" name="localisation" value="<?php echo $user_data['Localisation']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $user_data['Email']; ?>"><br>
    Telephone: <input type="text" name="telephone" value="<?php echo $user_data['Telephone']; ?>"><br>
    Biographie: <textarea name="biographie"><?php echo $user_data['Biographie']; ?></textarea><br>
    

    <input type="submit" value="Actualiser le profil">
</form>



</body>
</html>

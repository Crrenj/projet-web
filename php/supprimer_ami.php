<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $database = "database";
        $db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889);

        if ($db_handle) {
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found) {
                $sql = "DELETE FROM Relation WHERE ID_Utilisateur1 = '$id'";
                $result = mysqli_query($db_handle, $sql);

                if ($result) {
                    echo "Ami supprimé avec succès.";
                } else {
                    echo "Erreur lors de la suppression: " . mysqli_error($db_handle);
                }
            } else {
                echo "Database not found";
            }
            mysqli_close($db_handle);
        } else {
            echo "Erreur de connexion à MySQL: " . mysqli_connect_error();
        }
    }
}

header("Location: reseau.php"); 
?>

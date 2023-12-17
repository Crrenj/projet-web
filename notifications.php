<?php
$database = "social_network"; 

$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT * FROM notification";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
        echo "ID_Notification: " . $data['ID_Notification'] . "<br>";
        echo "ID_Utilisateur: " . $data['ID_Utilisateur'] . "<br>";
        echo "Contenu: " . $data['Contenu'] . "<br>";
        echo "DateHeure: " . $data['DateHeure'] . "<br>";
        echo "Type: " . $data['type'] . "<br>";
        echo "Lue: " . $data['lue'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Database not found";
}		

mysqli_close($db_handle);

$db_found = mysqli_select_db($db_handle, $database);

if(?)

$sql = "SELECT utilisateur.Nom, utilisateur.Prenom, notification.Contenu, notification.type
            FROM Utilisateur
            JOIN notification ON demande_ami.ID_Expéditeur = utilisateur.ID_Utilisateur
            WHERE type=demandeAmi";

?>

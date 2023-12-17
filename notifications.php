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

//remplir la phrase en cas de demande d'ami (la derniere demande d'ami reçu)

$sql = "SELECT utilisateur.Nom, utilisateur.Prenom
        FROM utilisateur
        INNER JOIN notification ON utilisateur.ID_Utilisateur = notification.ID_Utilisateur
        WHERE notification.type = 'demande_ami'
        ORDER BY notification.DateHeure DESC;"

$resultat = mysqli_query($db_handle, $sql);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    $row = mysqli_fetch_assoc($resultat);

    echo json_encode($row);
} else {
    echo "Aucune demande d'ami";
}

// Fermeture de la connexion MySQLi
mysqli_close($db_handle);
?>

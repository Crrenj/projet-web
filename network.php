<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'amis</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .wrapper {
            display: grid;
            grid-template-areas:
        }
        header {
            grid-area: header;
            padding: 10px;
            background: #f8f9fa;
            border-bottom: 1px solid #e7e7e7;
            text-align: center;
        }
        nav {
            grid-area: nav;
            padding: 10px;
            background: #f8f9fa;
            border-bottom: 1px solid #e7e7e7;
            display: flex;
            justify-content: space-evenly;
        }
        nav input, nav button {
            padding: 5px;
        }
        main {
            grid-area: main;
            padding: 10px;

        }
        .friend-card {
            border: 1px solid #e7e7e7;
            margin-bottom: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        .friend-card img {
            width: 60px;
            height: 60px;
            background: #ddd;
            margin-right: 10px;
        }
        footer {
            grid-area: footer;
            padding: 10px;
            background: #f8f9fa;
            border-top: 1px solid #e7e7e7;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        Header
    </header>
    <nav>
        <form method="get" action="">
            <input type="text" class="form-control" placeholder="Recherche votre ami" name="search">
            <button type="submit">Rechercher</button>
        </form>
        <button onclick="window.location.href='ajouter_ami.php'">Ajouter des amis</button>

        <select name="filter" onchange="this.form.submit()">
            <option value="">Filtrer par...</option>
            <option value="age">Nom</option>
            <option value="sexe">Prénom</option>
            <!-- Autres options de filtrage -->
        </select>
    </nav>
    <main>
        <?php
        $database = "Mon Réseau";
        $db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889);
        $searchTerm = '';
        if ($db_handle) {
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found) {
                if (isset($_GET['search'])) {
                    $searchTerm = mysqli_real_escape_string($db_handle, $_GET['search']);
                }
                $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

                $sql = "SELECT * FROM amis WHERE Nom LIKE '%$searchTerm%' OR Prenom LIKE '%$searchTerm%'";

                if ($filter == "age") {
                    $sql .= " ORDER BY Age"; // Exemple, ajustez selon votre structure de base de données
                } elseif ($filter == "sexe") {
                    $sql .= " ORDER BY Sexe"; // Exemple, ajustez selon votre structure de base de données
                }
                $sql = "SELECT * FROM amis WHERE Nom LIKE '%$searchTerm%' OR Prenom LIKE '%$searchTerm%'";
                $result = mysqli_query($db_handle, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<div class='friend-card'>";
                        echo "<a href='profil.php?id=" . $data['ID'] . "'>";
                        echo "<img src='" . $data['Photo'] . "' alt='Photo de " . $data['Prenom'] . "'>";
                        echo "</a>";
                        echo "<div>";
                        echo "<p>" . $data['Nom'] . " " . $data['Prenom'] . "</p>";
                        echo "<p>" . $data['Description'] . "</p>";
                        echo "<form method='post' action='supprimer_ami.php'>";
                        echo "<input type='hidden' name='id' value='" . $data['ID'] . "'>";
                        echo "<button type='submit' name='delete'>Supprimer cet ami</button>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($db_handle);
                }
            } else {
                echo "Database not found";
            }
            mysqli_close($db_handle);
        } else {
            echo "Erreur de connexion à MySQL: " . mysqli_connect_error();
        }
        ?>
    </main>
    <footer>
        Footer
    </footer>
</div>
</body>
</html>

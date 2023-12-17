<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des amis</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        header, footer {
            padding: 20px;
            background: #f8f9fa;
            text-align: center;
            border-bottom: 1px solid #e7e7e7;
        }
        footer {
            border-top: 1px solid #e7e7e7;
            border-bottom: none;
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

    </style>
</head>
<body>
<div class="wrapper">
    <header>
        Header
    </header>
    <nav>
        <form method="get" action="ajouter_ami.php">
            <input type="text" class="form-control" placeholder="Rechercher une personne" name="search">
            <button type="submit">Rechercher</button>
        </form>
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
            $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

            $sql = "SELECT * FROM nouveau_amis WHERE Nom LIKE '%$searchTerm%' OR Prenom LIKE '%$searchTerm%'";

            if ($filter == "age") {
                $sql .= " ORDER BY Age"; // Exemple, ajustez selon votre structure de base de données
            } elseif ($filter == "sexe") {
                $sql .= " ORDER BY Sexe"; // Exemple, ajustez selon votre structure de base de données
            }

            if (isset($_GET['search'])) {
                $searchTerm = mysqli_real_escape_string($db_handle, $_GET['search']);
                $sql = "SELECT * FROM nouveau_amis WHERE Nom LIKE '%$searchTerm%' OR Prenom LIKE '%$searchTerm%'";
                $result = mysqli_query($db_handle, $sql);
                if ($result) {
                    while ($person = mysqli_fetch_assoc($result)) {
                        echo "<div class='friend-card'>";
                        echo "<img src='" . $person['Photo'] . "' alt='Photo de " . $person['Prenom'] . "'>";
                        echo "<div>";
                        echo "<p>" . $person['Nom'] . " " . $person['Prenom'] . "</p>";
                        echo "<p>" . $person['Description'] . "</p>";
                        echo "<form action='envoyer_demande_ami.php' method='post'>";
                        echo "<input type='hidden' name='friend_id' value='" . $person['ID'] . "'>";
                        echo "<button type='submit' name='send_request'>Envoyer une demande</button>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
            }
        }
        ?>
    </main>
    <footer>
        Footer
    </footer>
</div>
</body>
</html>

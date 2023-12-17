<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = $_SESSION['user'];
$admin = $_SESSION['admin'];


$database = "database";
$db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889);
if (!$db_handle) {
    die("Connection failed: " . mysqli_connect_error());
}
$db_found = mysqli_select_db($db_handle, $database);
if (!$db_found) {
    die("Database selection failed: " . mysqli_error($db_handle));
}

$query = "
SELECT 
    u.*, 
    p.Photo, 
    b.Nom, b.Prenom, b.Statut, b.Localisation, b.Telephone, b.Email, b.Biographie,
    cv.TitreCV,
    e.Entreprise, e.Poste, e.Description AS ExpDescription, e.DateDebut AS ExpDateDebut, e.DateFin AS ExpDateFin,
    ed.Etablissement, ed.Diplome, ed.DateDebut AS EduDateDebut, ed.DateFin AS EduDateFin,
    cil.Competence, cil.Interet, cil.Langue
FROM 
    utilisateur u
JOIN 
    profil p ON u.ID_Utilisateur = p.ID_Utilisateur
JOIN 
    bio b ON u.ID_Utilisateur = b.ID_Utilisateur
JOIN 
    cv cv ON u.ID_Utilisateur = cv.ID_Utilisateur
LEFT JOIN 
    experience e ON cv.ID_CV = e.ID_CV
LEFT JOIN 
    education ed ON cv.ID_CV = ed.ID_CV
LEFT JOIN 
    competence_interet_langue cil ON cv.ID_CV = cil.ID_CV
WHERE
u.user = '$user'"; 

$result = mysqli_query($db_handle, $query);

if ($result) {
    $user_data = mysqli_fetch_assoc($result);
    
} else {
  
    echo "Error: " . mysqli_error($db_handle);
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profil Utilisateur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bibliothèque jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- Dernier JavaScript compilé -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css\profile.css">
    
</head>
<body>
  <div id="wrapper">


  <div class="navbar data-bs-theme='dark' bg-body-tertiary">
      <nav class="navbar navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo/LOGO.png" width="50" height="auto"> ECEin
        </a>

          <ul class="nav nav-pills nav-fill navbar-left">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><i class="bi bi-person-fill"></i> Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="network.php"><i class="bi bi-people-fill"></i> Amis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jpbs.php"><i class="bi bi-backpack3"></i> Emplois</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="messaging.php"><i class="bi bi-chat-right-dots-fill"></i> Messagerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notifications.php"><i class="bi bi-bell-fill"></i> Notification</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="publication.php"><i class="bi bi-journal-album"></i> Publication</a>
          </li>
        </ul>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="img/logo/LOGO.png" width="50" height="auto"> ECEin</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Navigation
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="index.php"><i class="bi bi-house-fill"></i> Home</a></li>
              <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-fill"></i> Profil</a></li>
              <li><a class="dropdown-item" href="network.php"><i class="bi bi-people-fill"></i> Amis</a></li>
              <li><a class="dropdown-item" href="network.php"><i class="bi bi-people-fill"></i> Amis</a></li>
              <li><a class="dropdown-item" href="jpbs.php"><i class="bi bi-backpack3"></i> Emplois</a></li>
              <li><a class="dropdown-item" href="messaging.php"><i class="bi bi-chat-right-dots-fill"></i> Messagerie</a></li>
              <li><a class="dropdown-item" href="notifications.php"><i class="bi bi-bell-fill"></i> Notification</a></li>
              <li><a class="dropdown-item" href="publication.php"><i class="bi bi-journal-album"></i> Publication</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reseaux sociaux
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-twitter-x"></i> Tweeter</a></li>
                  </ul>
              </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Nos partenaires
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li>a faire</li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      nous contacter
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li>a faire</li>
                    </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
    </div>

  <div id="header">
   
    <div id="profile-picture">
        <?php 
        if (isset($user_data['Photo']) && !empty($user_data['Photo'])) {
            echo '<img src="' . $user_data['Photo'] . '" alt="Photo de profil">';
        } else {
            // Ruta a la imagen de perfil predeterminada
            echo '<img src="path_to_default_profile_picture.jpg" alt="Photo de profil par défaut">';
        }
        ?>
    </div>
    
    <h1>
        <?php 
        if (isset($user_data['Nom']) && isset($user_data['Prenom'])) {
            echo $user_data['Nom'] . ' ' . $user_data['Prenom'];
        } else {
            echo 'Nom et prénom non disponibles';
        }
        ?>
    </h1>
</div>

<div id="main">
    <div class="field">
        <label>Statut:</label>
        <?php echo isset($user_data['Statut']) ? $user_data['Statut'] : ''; ?><br>
    </div>
    <div class="field">
        <label>Localisation:</label>
        <?php echo isset($user_data['Localisation']) ? $user_data['Localisation'] : ''; ?><br>
    </div>
    <div class="field">
        <label>Email:</label>
        <?php echo isset($user_data['Email']) ? $user_data['Email'] : ''; ?><br>
    </div>
    <div class="field">
        <label>Téléphone:</label>
        <?php echo isset($user_data['Telephone']) ? $user_data['Telephone'] : ''; ?><br>
    </div>

            <div class="field">
        <label>Biographie:</label>
        <?php echo isset($user_data['Biographie']) ? $user_data['Biographie'] : ''; ?><br>
    </div>
          


      
<section id="education">
    <h2>Formation / Education</h2>
    <?php 
    if (isset($user_education) && is_array($user_education)) {
        foreach ($user_education as $education) {
            echo "Diplôme: " . $education['diplome'] . "<br>";
            echo "Établissement: " . $education['etablissement'] . "<br>";
            echo "Date de début: " . $education['DateDebut'] . "<br>";
            echo "Date de fin: " . $education['DateFin'] . "<br><br>";
        }
    } 
    ?>
</section>

<section id="experience">
    <h2>Expériences / Stages</h2>
    <?php 
    if (isset($user_experience) && is_array($user_experience)) {
        foreach ($user_experience as $experience) {
            echo "Poste: " . $experience['poste'] . "<br>";
            echo "Entreprise: " . $experience['entreprise'] . "<br>";
            echo "Description: " . $experience['description'] . "<br>";
            echo "Date de début: " . $experience['DateDebut'] . "<br>";
            echo "Date de fin: " . $experience['DateFin'] . "<br><br>";
        }
    }
    ?>
</section>


<section id="projects">
    <h2>Projets</h2>
    <?php 
    if (isset($user_projects) && is_array($user_projects)) {
        foreach ($user_projects as $project) {
            echo "Titre du projet: " . $project['Titre'] . "<br>";
            echo "Description: " . $project['Description'] . "<br><br>";
        }
    }
    ?>
</section>


        
            <section id="skills">
                <h2>Compétences</h2>
                <div class="skills-entry">
                    <?php if (isset($user_data['Compétence'])) {
                        echo "Compétences: " . $user_data['Compétence'] . "<br>";
                    } ?>
                </div>
            </section>

          
            <section id="languages">
                <h2>Langues</h2>
                <div class="languages-entry">
                    <?php if (isset($user_data['Langue'])) {
                        echo "Langues: " . $user_data['Langue'] . "<br>";
                    } ?>
                </div>
            </section>

           
            <section id="interests">
                <h2>Intérêt</h2>
                <div class="interests-entry">
                    <?php if (isset($user_data['Interet'])) {
                        echo "Intérêts: " . $user_data['Interet'] . "<br>";
                    } ?>
                </div>
            </section>


            <form action="update_profile.php" method="post">
              <button type="submit">Modifier le profil</button>
            </form>

            <form action="generate_cv.php" method="post">
              <button type="submit">Générer le CV</button>
            </form>


        </form>
    </div>
  </div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vous</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  !-- NAVIGATION -->
  
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



<!-- Partie profile images -->
<div class="header">
  <div class="banner" onclick="document.getElementById('bannerInput').click();">
    <div class="edit-overlay">Cliquez pour modifier</div>
  </div>
  <div class="profile-pic-container" onclick="document.getElementById('profileInput').click();">
    <img src="path_to_profile_pic.jpg" alt="Perfil" class="profile-pic">
    <div class="edit-overlay">Cliquez pour modifier</div>
  </div>
  <div class="name">
    <span class="name-text">NOM COMPLET</span>
    <i class="fas fa-pencil-alt edit-name-icon"></i>
  </div>
</div>

<!-- Popups-->
<div class="popup" id="editNamePopup">
  <input type="text" id="nameInput"> 
  <button onclick="saveName();">Enregistrer</button>
  <button onclick="hideEditNamePopup();">Annuler</button>
</div>




<!-- Partie d information general -->

<div class="formulario-general">
  <div class="iconos">
    <img src="img/tres-puntos.png" alt="Más opciones" title="Más opciones" class="icono-tres-puntos">
    <img src="img/lapiz.png" alt="Editar" title="Editar" class="editar" style="display:none;">
    <img src="img/candado.png" alt="Seguridad" title="Seguridad" class="seguridad" style="display:none;">
  </div>
  
  
  <div class="campo">
    <label>statut</label>
    <span id="statut">écrire statut</span>
  </div>
  <div class="campo">
    <label>localisation</label>
    <span id="localisation">écrire localisation</span>
  </div>
  <div class="campo">
    <label>email</label>
    <span id="email">écrire email</span>
  </div>
  <div class="campo">
    <label>téléphone</label>
    <span id="telephone">écrire téléphone</span>
  </div>
  <div class="campo">
    <label>description</label>
    <span id="description">écrire description</span>
  </div>
</div>


<div id="popup-editar">
  <form id="formulario-editar">
    <div class="form-field">
    <label for="statut">Statut:</label>
    <input type="text" id="statut" name="statut" placeholder="Écrire statut">
</div>
<div class="form-field">
    <label for="localisation">Localisation:</label>
    <input type="text" id="localisation" name="localisation" placeholder="Écrire localisation">
</div>
<div class="form-field">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Écrire email">
</div>
<div class="form-field">
    <label for="telephone">Téléphone:</label>
    <input type="tel" id="telephone" name="telephone" placeholder="Écrire téléphone">
</div>
<div class="form-field">
    <label for="description">Description:</label>
    <textarea id="description" name="description" placeholder="Écrire description" rows="10"></textarea>
</div>
    <button type="submit">Guardar</button>
    <button type="button" id="cancelar-editar">Cancelar</button>
  </form>
</div>


<div id="popup-seguridad">
  <ul>
    <li data-privacidad="vous">Vous</li>
    <li data-privacidad="amies">Amies</li>
    <li data-privacidad="public">Public</li>
  </ul>
  <button type="button" id="cancelar-seguridad">Cancelar</button>
</div>



<!-- Partie d information profesional -->
  
<div class="general">
<div class="information-section">

    
    <div class="main-sections">
       
        <div class="section">
            <div class="section-title">Expériences / stages</div>
            <div class="section-body" id="experience"></div>
        </div>
        <div class="section">
            <div class="section-title">Formation / education</div>
            <div class="section-body" id="education"></div>
        </div>
        <div class="section">
            <div class="section-title">Projet</div>
            <div class="section-body" id="project"></div>
        </div>
    </div>
    <div class="sidebar">
        <div class="sidebar-section">
            <div class="sidebar-title">compétences</div>
            <div class="sidebar-body" id="skills"></div>
        </div>
        <div class="sidebar-section">
            <div class="sidebar-title">langues</div>
            <div class="sidebar-body" id="languages"></div>
        </div>
        <div class="sidebar-section">
            <div class="sidebar-title">intérêt</div>
            <div class="sidebar-body" id="interests"></div>
        </div>
</div>
</div>
<div class="edit-icons">
  <img src="img/tres-puntos.png" alt="Más opciones" class="more-options-icon" onclick="toggleIcons()">
  <img src="img/lapiz.png" alt="Editar" class="edit-icon" onclick="showEditPopup()">
  <img src="img/candado.png" alt="Privacidad" class="privacy-icon" onclick="showPrivacyPopup()">
</div>

<div class="popup" id="edit-information-popup">
  <div>
    <label for="experience-edit">Expériences / stages:</label>
    <textarea id="experience-edit" rows="4"></textarea>
  </div>
  <div>
    <label for="education-edit">Formation / education:</label>
    <textarea id="education-edit" rows="4"></textarea>
  </div>
  <div>
    <label for="project-edit">Projet:</label>
    <textarea id="project-edit" rows="4"></textarea>
  </div>
  <div>
    <label for="skills-edit">compétences:</label>
    <textarea id="skills-edit" rows="2"></textarea>
  </div>
  <div>
    <label for="languages-edit">langues:</label>
    <textarea id="languages-edit" rows="2"></textarea>
  </div>
  <div>
    <label for="interests-edit">intérêt:</label>
    <textarea id="interests-edit" rows="2"></textarea>
  </div>
  <button onclick="saveInformation()">Guardar</button>
  <button onclick="closePopup('edit-information-popup')">Cancelar</button>
</div>

<div class="popup" id="privacy-information-popup">
  <form id="privacy-form">
    <input type="radio" id="private" name="privacy" value="private">
    <label for="private">Vous</label><br>
    <input type="radio" id="friends" name="privacy" value="friends">
    <label for="friends">Amies</label><br>
    <input type="radio" id="public" name="privacy" value="public" checked>
    <label for="public">Public</label><br>
    <button type="button" onclick="savePrivacy()">Guardar</button>
    <button type="button" onclick="closePopup('privacy-information-popup')">Cancelar</button>
  </form>
</div>

<input type="file" id="bannerInput" style="display: none;">
<input type="file" id="profileInput" style="display: none;">



</body>
</html>


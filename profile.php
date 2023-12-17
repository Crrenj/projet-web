<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vous</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
    <style>
         body { font-family: Arial, sans-serif; margin: 0; padding: 20px; box-sizing: border-box; }
    .header { position: relative; margin-bottom: 20px; }

    .banner, .profile-pic-container { cursor: pointer; }

    .banner { background: url('path_to_banner_image.jpg') no-repeat center center; background-size: cover; height: 270px; }
    .banner:hover .edit-overlay, .profile-pic-container:hover .edit-overlay { display: flex; }

    .profile-pic-container { 
    position: absolute; 
    top: 50%; /* Centrar verticalmente en el header */
    left: 20px; /* Espacio desde el borde izquierdo */
    transform: translateY(-50%); /* Desplazamiento para centrar exactamente */
    width: 150px; /* Nuevo ancho para la imagen de perfil */
    height: 150px; /* Nuevo alto para la imagen de perfil */
    border: 4px solid #fff; /* Ajuste del borde */
    border-radius: 50%;
    box-shadow: 0 0 0 4px black; /* Sombra para imitar el borde negro */
    overflow: hidden;

  }

    .profile-pic {
    width: 100%; /* Esto hará que la imagen llene completamente el ancho de su contenedor */
    height: 100%; /* Esto hará que la imagen llene completamente la altura de su contenedor */
    border-radius: 50%; /* Esto mantendrá la imagen redonda */
    object-fit: cover; /* Esto asegurará que la imagen cubra el espacio sin deformarse */
  }

    .edit-overlay { display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);
     color: #fff; justify-content: center;  text-align: center ; align-items: center; font-size: 1em; }

    .name { 
    position: absolute; 
    bottom: 15px; /* Posición desde la parte inferior del encabezado */
    left: 165px; /* Posición desde el lado izquierdo del encabezado */
    width: calc(100% - 170px); /* Ancho ajustado para ocupar el espacio restante */
    font-size: 36px; /* Tamaño de fuente para el nombre */
    font-weight: bold;
    padding: 10px 20px; /* Espaciado interno */
    
    white-space: nowrap; /* Asegura que el texto no se envuelva */
    overflow: hidden; /* Oculta cualquier desbordamiento de texto */
    text-overflow: ellipsis; /* Añade puntos suspensivos si el texto es demasiado largo */
    color: #000; /* Color del texto */
    text-shadow: 
      -1px -1px 0 #fff,  
       1px -1px 0 #fff,
      -1px 1px 0 #fff,
       1px 1px 0 #fff; /* Sombra blanca alrededor del texto */
  }


    .edit-name-icon { display: none; margin-left: 10px; font-size: 0.55em;}
    .name:hover .edit-name-icon { display: inline; }
    .popup { display: none; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 1px solid #ddd; z-index: 10; }
    .popup button { margin-top: 10px; }










     .formulario-general {
    max-width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 20px auto;
    
    position: relative;
  }
  .formulario-general .campo {
    margin-bottom: 10px;
  }
  .formulario-general label {
    display: block;
    font-weight: bold;
  }
  .formulario-general span {
    display: block;
    margin-bottom: 5px;
  }
  .iconos {
    position: absolute;
    top: 0;
    right: 0;
  }
  .iconos img {
    cursor: pointer;
    width: 20px;
    height: 20px;
    margin-right: 10px;
    margin-top: 5px;
  }

  

  #popup-editar,
  #popup-seguridad {
    display: none;
    position: fixed;
    left: 50%;
    top: 50%;
    width: 80%;
  max-width: 500px; /* El pop-up no será más ancho de 800px */
  min-width: 300px; 
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 100;
  }
  #popup-editar input,
  #popup-editar button,
  #popup-seguridad button {
    display: block;
    margin-bottom: 10px;
  }
  #popup-seguridad ul {
    list-style-type: none;
    padding: 0;
  }
  #popup-seguridad li {
    cursor: pointer;
    margin-bottom: 5px;
    padding: 5px;
    border: 1px solid #ccc;
  }
  #popup-seguridad li.selected {
    background-color: #007bff;
    color: white;
  }
        </style>
<body>

<div class="header">
  <div class="banner" onclick="document.getElementById('bannerInput').click();">
    <div class="edit-overlay">Cliquez pour modifier</div>
  </div>
  <div class="profile-pic-container" onclick="document.getElementById('profileInput').click();">
    <img src="path_to_profile_pic.jpg" alt="Perfil" class="profile-pic">
    <div class="edit-overlay">Cliquez pour modifier</div>
  </div>
  <div class="name">
    <!-- Agregamos un contenedor adicional para el nombre -->
    <span class="name-text">NOM COMPLET</span>
    <i class="fas fa-pencil-alt edit-name-icon"></i>
  </div>
</div>

<!-- Popups for editing -->
<div class="popup" id="editNamePopup">
  <input type="text" id="nameInput"> <!-- Eliminamos el valor predeterminado -->
  <button onclick="saveName();">Enregistrer</button>
  <button onclick="hideEditNamePopup();">Annuler</button>
</div>






<div class="formulario-general">
  <!-- Iconos para editar y seguridad -->
  <div class="iconos">
    <img src="tres-puntos.png" alt="Más opciones" title="Más opciones" class="icono-tres-puntos">
    <img src="lapiz.png" alt="Editar" title="Editar" class="editar" style="display:none;">
    <img src="candado.png" alt="Seguridad" title="Seguridad" class="seguridad" style="display:none;">
  </div>
  
  <!-- Campos del formulario -->
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

<!-- Popup para editar -->
<div id="popup-editar">
  <form id="formulario-editar">
    <input type="text" name="statut" placeholder="statut">
    <input type="text" name="localisation" placeholder="localisation">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="telephone" placeholder="téléphone">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Guardar</button>
    <button type="button" id="cancelar-editar">Cancelar</button>
  </form>
</div>

<!-- Popup para seguridad -->
<div id="popup-seguridad">
  <ul>
    <li data-privacidad="vous">Vous</li>
    <li data-privacidad="amies">Amies</li>
    <li data-privacidad="public">Public</li>
  </ul>
  <button type="button" id="cancelar-seguridad">Cancelar</button>
</div>







<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Variables globales para manejar si es el perfil del usuario
var isOwnProfile = true; // Esto debería ser definido por el backend dependiendo del perfil que se esté viendo.

// Evento de clic en el ícono de edición del nombre
$('.edit-name-icon').on('click', function() {
  if (isOwnProfile) {
    // Restablecemos el valor del campo de entrada de texto al valor actual del nombre
    $('#nameInput').val($('.name-text').text());
    $('#editNamePopup').show();
  }
});

function hideEditNamePopup() {
  $('#editNamePopup').hide();
}

function saveName() {
  var newName = $('#nameInput').val();
  $('.name-text').text(newName); // Actualizamos el texto del nombre
  $('#editNamePopup').hide();
}

$(document).ready(function() {
  // Evento de cambio para la imagen del perfil
  $('#profileInput').on('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.profile-pic').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
  });

  // Evento de cambio para el banner
  $('#bannerInput').on('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.banner').css('background-image', 'url(' + e.target.result + ')');
    };
    reader.readAsDataURL(file);
  });
});





$(document).ready(function() {
  var editPopupOpen = false;
  var securityPopupOpen = false;

  function closeAllPopups() {
    $('#popup-editar').hide();
    $('#popup-seguridad').hide();
    editPopupOpen = false;
    securityPopupOpen = false;
  }

  $('.icono-tres-puntos').click(function() {
    $('.editar, .seguridad').toggle();
  });

  $('.editar').click(function() {
    if (!editPopupOpen) {
      $('.campo').each(function() {
        var campo = $(this).find('span').attr('id');
        var valorActual = $('#' + campo).text();
        $('#formulario-editar input[name="' + campo + '"]').val(valorActual);
      });
      $('#popup-editar').show();
      editPopupOpen = true;
    } else {
      closeAllPopups();
    }
  });

  $('#formulario-editar').submit(function(e) {
    e.preventDefault();
    $('.campo').each(function() {
      var campo = $(this).find('span').attr('id');
      var nuevoValor = $('#formulario-editar input[name="' + campo + '"]').val();
      $('#' + campo).text(nuevoValor);
    });
    closeAllPopups();
  });

  $('#cancelar-editar').click(function() {
    closeAllPopups();
  });

  $('.seguridad').click(function() {
    if (!securityPopupOpen) {
      getSetPrivacidad(); // Actualizar la UI con la privacidad guardada
      $('#popup-seguridad').show();
      securityPopupOpen = true;
    } else {
      closeAllPopups();
    }
  });

  // Función para obtener y establecer la privacidad actual
  function getSetPrivacidad() {
    var privacidadActual = localStorage.getItem('privacidad') || 'public'; // 'public' es el valor por defecto
    $('#popup-seguridad li').removeClass('selected');
    $('#popup-seguridad li[data-privacidad="' + privacidadActual + '"]').addClass('selected');
  }

  $('#popup-seguridad li').click(function() {
    var privacidadSeleccionada = $(this).data('privacidad');
    $('#popup-seguridad li').removeClass('selected');
    $(this).addClass('selected');
    localStorage.setItem('privacidad', privacidadSeleccionada); // Guardar la selección en el almacenamiento local
    closeAllPopups();
  });

  $('#cancelar-seguridad').click(function() {
    closeAllPopups();
  });

  // Al cargar la página, marcamos la privacidad seleccionada
  getSetPrivacidad();
});








</script>

<!-- Inputs ocultos para la carga de imágenes -->
<input type="file" id="bannerInput" style="display: none;">
<input type="file" id="profileInput" style="display: none;">


















</body>
</html>

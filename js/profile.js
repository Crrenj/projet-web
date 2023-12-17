<!--partie d images -->
var isOwnProfile = true;

$('.edit-name-icon').on('click', function() {
  if (isOwnProfile) {
    $('#nameInput').val($('.name-text').text());
    $('#editNamePopup').show();
  }
});

function hideEditNamePopup() {
  $('#editNamePopup').hide();
}

function saveName() {
  var newName = $('#nameInput').val();
  $('.name-text').text(newName); 
  $('#editNamePopup').hide();
}

$(document).ready(function() {
 
  $('#profileInput').on('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.profile-pic').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
  });

  
  $('#bannerInput').on('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.banner').css('background-image', 'url(' + e.target.result + ')');
    };
    reader.readAsDataURL(file);
  });
});



<!-- partie d information general -->

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

    var nuevoValorDescripcion = $('#formulario-editar textarea[name="description"]').val();
    $('#description').text(nuevoValorDescripcion);

    closeAllPopups();
});


  $('#cancelar-editar').click(function() {
    closeAllPopups();
  });

  $('.seguridad').click(function() {
    if (!securityPopupOpen) {
      getSetPrivacidad(); 
      $('#popup-seguridad').show();
      securityPopupOpen = true;
    } else {
      closeAllPopups();
    }
  });

  
  function getSetPrivacidad() {
    var privacidadActual = localStorage.getItem('privacidad') || 'public'; 
    $('#popup-seguridad li').removeClass('selected');
    $('#popup-seguridad li[data-privacidad="' + privacidadActual + '"]').addClass('selected');
  }

  $('#popup-seguridad li').click(function() {
    var privacidadSeleccionada = $(this).data('privacidad');
    $('#popup-seguridad li').removeClass('selected');
    $(this).addClass('selected');
    localStorage.setItem('privacidad', privacidadSeleccionada); 
    closeAllPopups();
  });

  $('#cancelar-seguridad').click(function() {
    closeAllPopups();
  });


  getSetPrivacidad();
});







<!-- partie d information profesional -->




$(document).ready(function() {
  
  $('.edit-icon, .privacy-icon').hide();
  $('.more-options-icon').show();
});

function toggleIcons() {
  
  $('.edit-icon, .privacy-icon').toggle();
 
}

function showEditPopup() {
  
  $('#experience-edit').val($('#experience').text());
  $('#education-edit').val($('#education').text());
  $('#project-edit').val($('#project').text());
  $('#skills-edit').val($('#skills').text());
  $('#languages-edit').val($('#languages').text());
  $('#interests-edit').val($('#interests').text());

  $('#edit-information-popup').show();
}

function saveInformation() {
  
  $('#experience').text($('#experience-edit').val());
  $('#education').text($('#education-edit').val());
  $('#project').text($('#project-edit').val());
  $('#skills').text($('#skills-edit').val());
  $('#languages').text($('#languages-edit').val());
  $('#interests').text($('#interests-edit').val());

  closePopup('edit-information-popup');
}

function showPrivacyPopup() {
 
  var privacySetting = localStorage.getItem('privacy');
  if (privacySetting) {
    $('input[name="privacy"][value="' + privacySetting + '"]').prop('checked', true);
  }
  $('#privacy-information-popup').show();
}

function savePrivacy() {
  
  var selectedPrivacy = $('input[name="privacy"]:checked').val();
  localStorage.setItem('privacy', selectedPrivacy);
  closePopup('privacy-information-popup');
}

function closePopup(popupId) {
  $('#' + popupId).hide();
}

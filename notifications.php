<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="notification.css" rel="stylesheet" type="text/css" />
    <title>Notifications ECE</title>
</head>
<body>
    <header>
        <h3>ECE In : Social Media Professionnel de l'ECE Paris</h3>
        <h3>Notification</h3>
        <img src="ecelinkedin.jpg" width="140" height="150" class="logo"></img>
    </header>
    <section>

        <h3 class="demandeami"><u>Demande d'ami</u></h3>
        <div class="demande" id="demande">
            <img src="profil.jpg" alt="Photo de profil">
            <p>Vous avez une demande d'ami de [nom] [prénom] reçue le [date] <br>
            <button id="ajouterAmi" class="accepter" onclick="supprimerDemande()">Accepter</button>
            <button id="refuserAmi" class="refuser" onclick="supprimerDemande()">Refuser</button>
            <button id="voirAutreDeamndeAmi" class="voirAutreDeamndeAmi" onclick="redirectToAmisPage()">Voir toutes les demandes d'amis</button>
<script>
    function redirectToAmisPage() {
        window.location.href = "monreseau.html";
    }
</script>
        </div>
        <br>

            <h3 class="boite"><u>Boîte de réception</u></h3>
        <div class="message">
            <p>Vous avez reçu un message de [nom] [prénom] reçu le [date] <br>
                <button id="Répondre" class="Répondre" onclick="redirigerVersMessagerieAmi">Répondre</button>
                <button id="voirToutLesMessages" class="voirToutLesMessages" onclick="redirigerVersMessagerie()">Voir tous les messages</button>
<script>
    function redirigerVersMessagerie() {
        window.location.href = "messagerie.html";
    }
</script>
        </div>
        <br>

            <h3 class="evenements"><u>Evenements</u></h3>
        <div class="event" id="event">
            <img src="ecejpo.jpg" width="170" height="100" class="ecejpo"></img>
            <p>  Journée portes ouvertes de l'ECE Paris le 27 janvier 2024 de 14h à 18h.</p>
            <button onclick="supprimerContenu()">  en savoir plus et s'inscrire</button>
            <br>
            <br>
            <br>
        </div>
    </section>

<script>
    function supprimerContenu() {
        var div = document.getElementById('event');
        window.location.href = "https://www.ece.fr/inseecu/conference/8040";
        div.innerHTML = '';
    }
</script>

<script>
    function supprimerDemande() {
        var div = document.getElementById('demande');

        div.innerHTML = '';
    }
</script>

<script>  function redirigerVersMessagerie() {
    
        var urlMessagerie = "messagerie.html";

        window.location.href = urlMessagerie;
    }
</script>


</body>
</html>

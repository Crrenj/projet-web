<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        section {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        textarea, input[type="file"], input[type="submit"] {
            width: 80%;
            margin: 10px 0;
        }
        textarea {
            height: 150px;
            resize: none;
        }
        input[type="file"] {
            margin: 20px 0;
        }
        input[type="submit"] {
            padding: 5px;
        }
        input[type="submit"]:hover {
            padding: 5px;
        }
        label {
            display: block;
            margin: 10px 0;
        }
    </style>

</head>
<body>
<div class="wrapper">
    <header>
        Header
    </header>
    <section>
        <form action="envoyer_demande_ami.php" method="post" enctype="multipart/form-data">
            <label for="message">Message :</label>
            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Votre message"></textarea>
            <label for="document">Ajouter un document : </label>
            <input type="file" id="document" name="document">

            <input type="submit" value="Envoyer">
        </form>
    </section>
    <footer>
        Footer
    </footer>
</div>
</body>
</html>

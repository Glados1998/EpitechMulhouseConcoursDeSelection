<!DOCTYPE html>

<?php

if (isset($_POST['mail'])) {

    $nom = $_POST['nom'];
    $prénom = $_POST['prénom'];
    $groupe = $_POST['groupe'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $to = "j.greder@staro.ch";
    $headers = "Vous avez reçu un nouveau courriel de: " . $mailfrom;
    $body = "";

    $body = "$message";

    mail($to, $headers, $body);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavage-auto - Contact</title>
    <link rel="stylesheet" href="styles_lavageauto.css">

</head>

<body>

    <header>

        <nav class="navbar">

            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="pricing.html">SERVICES</a></li>
                <li><a href="about us.html">À PROPOS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>

        </nav>

    </header>

    <section>

        <div>
            <h1>contact</h1>
            <p>Si vous avez des questions, n'hésitez pas à nous écrire<br>
                ou à nous appeler</p>
            <p>téléphoner au +31 03 89 70 92 01
                <br> où +31 06 34 17 80 68
            </p>
        </div>


        <form class="form" action="contact.php" method="POST">

            <div class="form-item">
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom" required>
            </div>

            <div class="form-item">
                <label for="Prénom">Prénom</label>
                <input type="text" id="Prénom" name="Prénom" required>
            </div>

            <div class="form-item">
                <label for="Groupe">Groupe/Service</label>
                <input type="text" id="Groupe" name="Groupe" required>
            </div>

            <div class="form-item">
                <label for="mail">Mail</label>
                <input type="mail" id="mail" name="mail" required>
            </div>

            <div class="form-item">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" required minlength="10" maxlength="500"></textarea>
            </div>

            <button type="submit" style="color: white;">send</button>

        </form>

        <div>

            <p>Veuillez garder à l'esprit que seuls les rendez-vous du lundi après-midi,<br>
                du jeudi et du vendredi matin sont possibles.</p>

        </div>

    </section>

    <footer>

        <div>

            <a class="footer-item" href="about us.html">À propos</a>
            <a class="footer-item" href="pricing.html">Services</a>
            <a class="footer-item" href="contact.php">Contact</a>
            <a class="footer-item" href="https://afapei68.org/" target="_blanck">Association</a>

        </div>

        <div class="adresse-containerbeja">

            <p class="adresse">76 Rue de Blotzheim, 68870 Bartenheim</p>
            <a class="adresse" href="mailto:ime.preesat@afapei68.org">ime.preesat@afapei68.org</a>
            <p class="adresse">+31 03 89 70 92 01 - +31 06 34 17 80 68</p>

        </div>

    </footer>

</body>

</html>
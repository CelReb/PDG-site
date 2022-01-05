<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacter-nous</title>
    <link rel="stylesheet" href="./css/navbarr.css"/>
    <link rel="stylesheet" href="./css/contact.css"/>
</head>
<body>
<header>
    <div id="hed">
        <div class="iconsreseau">
            <a href="#"><img class="reseau" src="./rsc/mail.png" alt="mail"></a>
            <a href="#"><img class="reseau" src="./rsc/twitter.png" alt="twitter"></a>
            <a href="#"><img class="reseau" src="./rsc/linkdIn.png" alt="linkdIn"></a>
            <a href="#"><img class="reseau" src="./rsc/facebook.png" alt="facebook"></a>
        </div>
        <div class="logo">
            <a href="index.html"><img class="logoimg" src="./rsc/logo2.png" alt="PDG-IT entreprise d'informatique"></a>
        </div>
        <div class="navbarr">
            <ul>
                <li><a href="equipe.html"> / Qui sommes-nous ?</a></li>
                <li><a href="valeurs.html"> / Quelles sont nos valeurs ?</a></li>
                <li><a href="services.html"> / Nous et nos clients</a></li>
                <li><a href="contact.html"> / Nous contacter</a></li>
                <li><a href="#"> / Le blog</a></li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="trait"></div>
    <h1>Comment nous contacter ?</h1>
    <!-- <div id="containeurInformations">
        <div class="Informations">
        <p class="informations">Services disponibles du Lundi au Vendredi de 9h à 18h.</p>
        <p class="informations">33-35 rue Marchande</p>
            <p class="informations">38200 VIENNE</p>
        <p class="informations">04.81.43.05.89</p>
        <p class="informations">contact@pdg-it.com</p>
        </div>
    </div>
    <div class="traitContact"></div>-->
    <div id="formulaireContact">
        <div class="styleformulaire">
            <form id="contact-form" method="post" action="" role="form">

                <div class="ButtonName">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="NOM" value="">
                    <p class="comments"></p>
                </div>

                <div class="ButtonLastname">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="PRENOM" value="">
                    <p class="comments"></p>
                </div>

                <div class="ButtonEmail">
                    <input type="email" id="email" name="email" class="form-control" placeholder="EMAIL" value="">
                    <p class="comments"></p>
                </div>

                <div class="ButtonPhone">
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone" value="">
                    <p class="comments"></p>
                </div>

                <div class="ButtonMotif">
                    <input type="text" id="request" name="request" class="form-control" placeholder="MOTIF DE LA DEMANDE" value="">
                    <p class="comments"></p>
                </div>

                <div class="ButtonMessage">
                    <textarea id="message" name="message" class="form-control" placeholder="Votre message" value="" rows="4"></textarea>
                </div>

                <div class="ButtonSubmit">
                    <input class="buttonSub" type="submit" class="button1" value="Envoyer">
                </div>

            </form>
        </div>
    </div>
</main>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Comptésens est une société qui propose un service de comptabilité, de fiscalité et de droit pour les entreprises individuelles, associations et les PME de moins de 100 salariés"
    />
    <meta name="author" content="fvwebiste" />
    <title>ComptéSens - Expertise Comptable</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- aos -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Bootstrap css -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts-->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Glightbox -->
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
  <!-- Vendor autres -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

    <!-- Core theme CSS -->
    <link href="css/styles.css" rel="stylesheet" />

  </head>
  <body id="page-top">
<!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html"><img src="assets/img/logo_comptesens-blanc.png" alt="Comptésens"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">Qui sommes-nous ?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html#missions" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos missions
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-body" href="index.html#expertCompta">Expertise Comptable</a></li>
                <li><a class="dropdown-item text-body" href="index.html#expertSociale">Expertise Sociale</a></li>
                <li><a class="dropdown-item text-body" href="index.html#droit">Droit d'entreprise</a></li>
                <li><a class="dropdown-item text-body" href="index.html#conseils">Conseils</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html#methode" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Notre méthode
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-body" href="index.html#engagement">Notre engagement</a></li>
                <li><a class="dropdown-item text-body" href="index.html#digital">Outils digitaux</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link shrink-doc" href="liens.html#liens">Documentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.html#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Bouton vers le haut -->
<div id="scrollUp">
  <a href="#page-top"><i class="bi bi-arrow-up-short scrollUp"></i></a>
</div>
<!-- head -->
    <section class="page-section bg-bleu text-white" data-aos="fade-up">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="text-center">
        <i class="bi bi-envelope fs-1"></i>
          <h2>Vous avez un message...</h2>
          <hr class="divider" />
          <p class="text-white mb-4 text-center">
          </p>
      </div>
    </section>
    <!-- End head -->
<?php

// Captcha Google (voir header pour clé publique !)
// Ma clé privée
$secret = "6LcklpseAAAAAD9kP6JWhevXk2xQVGsx0ooisT-T";
// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];
// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];
// paramètres à passe dans l'url
$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip ;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'assets/vendor/PHPMailer-master/src/Exception.php';
require 'assets/vendor/PHPMailer-master/src/PHPMailer.php';
require 'assets/vendor/PHPMailer-master/src/SMTP.php';

$nom = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$body = "
<html>
    <head>
        <body>
        <h4>Message du formulaire de contact sur www.comptesens.fr</h4>
            <table width='500px'>
                <tr>
                    <td width=25%' align='left'>Le nom (et pr&eacute;nom) : </td>
                    <td align='left'>$nom</td>
                </tr>
                <tr>
                    <td width=25%' align='left'>Entreprise : </td>
                    <td align='left'>$company</td>
                </tr>
                <tr>
                    <td width=25%' align='left'>L'email : </td>
                    <td align='left'>$email</td>
                </tr>
                <tr>
                    <td width=25%' align='left'>L'email : </td>
                    <td align='left'>$phone</td>
                </tr>
                <tr>
                    <td width=25%' valign='top' align='left'>Le message : </td>
                    <td align='left'>$message</td>
                </tr>
            </table>
        </body>
    </head>
</html>
";

$mail = new PHPMailer();

$mail -> SMTPDebug  =  SMTP :: DEBUG_SERVER ; 
$mail -> SMTPDebug  =  0 ;    
$mail->IsSMTP();                    // dire à la classe d'utiliser SMTP
$mail->Host = 'ns0.ovh.net';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 587;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = true;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if($mail->SMTPAuth){
   $mail->SMTPSecure = 'tls';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'siteweb@2venirconseil.fr';    //Adresse email à utiliser
   $mail->Password   =  'grWs7xeLBPhaFdg';         //Mot de passe de l'adresse email à utiliser
}

$mail->From = "contact@comptesens.fr";
$mail->FromName = "Comptesens";
$mail->Body = "$body";

$mail->AddAddress('contact@comptesens.fr');   // L'email envoyé à ...
$mail->addCC('siteweb@2venirconseil.fr');   // en copie
$mail->addBCC('contact@fvwebsite.com');   // Copie 

$mail->Subject    =  "formulaire de contact comptesens.fr";                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo '
        <div class="text-center m-5">
        <h4>Votre message a bien été envoyé</h4>
        </div>
      ';
}
echo "
<div class='m-4'>
  <p>
  <strong>votre nom : </strong>$nom
  </p>
  <p>
  <strong>votre entreprise : </strong>$company
  </p>
  <p>
  <strong>votre email : </strong>$email
  </p>
  <p>
  <strong>votre téléphone </strong>$phone
  </p>
  <p>
  <strong>votre message : </strong>$message
  </p>
</div>
";
?>
<!-- Footer-->
    <footer class="border-top py-5">
      <div class="container px-4 px-lg-5">
        <div class="small text-center">
          Copyright &copy; 2022 - ComptéSens - <a href="mentions.html">Mentions Légales </a>
        </div>
        <div class="small text-center mt-3">
          <img src="assets/img/Logo_ordre_des_experts_comptables.png" alt="ordre experts comptable">
        </div>
      </div>
    </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- aos JS -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script>
      AOS.init()
    </script>
    <!-- Bootstrap core JS-->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <script src="js/main.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- RGPD -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  </body>
</html>